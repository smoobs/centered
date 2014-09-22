#!/usr/bin/env perl

use strict;
use warnings;

use lib qw( lib );

use Data::Dumper;
use PHP::Serialization qw( serialize unserialize );
use Scalar::Util qw( blessed );

my %UNESC = (
  '\\0'  => "\0",
  '\\"'  => '"',
  "\\'"  => "'",
  '\\b'  => "\b",
  '\\n'  => "\n",
  '\\r'  => "\r",
  '\\t'  => "\t",
  '\\\\' => '\\',
);

my $escape   = mk_encoder( reverse %UNESC );
my $unescape = mk_encoder(%UNESC);

my ( $from, $to ) = @ARGV;

my $fixer = sub {
  ( my $str = shift ) =~ s/\Q$from/$to/g;
  return $str;
};

while (<STDIN>) {
  chomp( my $ln = $_ );
  $ln =~ s/'((?:\\.|[^'\\]*)*)'/"'" . fix_value($1) . "'"/eg;
  print "$ln\n";
}

sub mk_encoder {
  my %kv = @_;
  my $m  = mk_matcher( keys %kv );
  return sub {
    my $str = shift;
    $str =~ s/$m/$kv{$1}/eg;
    return $str;
  };
}

sub mk_matcher {
  my $pat = join '|', map quotemeta, @_;
  return qr{($pat)};
}

sub fix_value {
  my $v = shift;
#  return $v unless $v =~ /\Q$from/;
  my $vv = $unescape->($v);
  my $ds = eval { unserialize $vv };
  if ($@) {
    $vv = $fixer->($vv);
  }
  else {
    $vv = serialize( walk( $ds, $fixer ) );
  }

  return $escape->($vv);
}

sub unbless {
  my $obj = shift;
  return $obj unless defined $obj && blessed $obj;
  return {%$obj} if UNIVERSAL::isa( $obj, 'HASH' );
  return [@$obj] if UNIVERSAL::isa( $obj, 'ARRAY' );
  die;
}

sub walk {
  my ( $ds, $fixer ) = @_;
  return undef unless defined $ds;
  if ( my $pkg = blessed $ds ) {
    return bless walk( unbless($ds), $fixer ), $pkg;
  }
  if ( ref $ds ) {
    if ( 'HASH' eq ref $ds ) {
      return { map { $_ => walk( $ds->{$_}, $fixer ) } keys %$ds };
    }
    elsif ( 'ARRAY' eq ref $ds ) {
      return [map { walk( $_, $fixer ) } @$ds];
    }
    else { die Dumper($ds); }
  }
  else {
    return $fixer->($ds);
  }
}

# vim:ts=2:sw=2:sts=2:et:ft=perl

