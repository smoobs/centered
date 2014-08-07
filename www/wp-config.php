<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'c0wshedyoga');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '=vRK6Q;,J=PAxkL!|IYA<aLk&hF#~e!BXBf)B$6z^u?h(&$:.%)$<JPaMw5s/<^$');
define('SECURE_AUTH_KEY',  'ed_U<v&uY(w0~0k{&f+VVk)@HJ?QWS+jPmi0h+tIqnm.z:^)_|FG+#uX1o19>&wp');
define('LOGGED_IN_KEY',    'o2[8]I0( eYlO}=*|2v63{@*|KyBg?Gl-KI:90l`K*[9|ilU]Ge>+VZu`FN#}%H>');
define('NONCE_KEY',        '(B-`O-C^R#Gl*66HL~VNd1<wDc&1hYRF+F>u:fa6of>-l*dp4s[t{5l+f^+Ygo(p');
define('AUTH_SALT',        'Xj!@|~[R|)%`}$?)Nn:k<^,-UBqDi8=&:#zd<J+ JEnzzK%mp[etl4qu2V/.9/=m');
define('SECURE_AUTH_SALT', 'DZmaI0}1.8M8Zp(xAG)OXOjg}+^4Uky+l#aFi5}<#+%T/R/B>+NW5#a_QE|9LW[>');
define('LOGGED_IN_SALT',   'f4-H~!os{?GMZ+aP#|Pu|ps5/52e!VByxVx8m7Wz;YpF%83_=ND;Rm[ #gG!C:fq');
define('NONCE_SALT',       'e-&5vG#ct6{IujZ_+#k86ul8-F|vN(YUq-tKCFQop}!.N*h8S9siavAi-vqq)E+-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
