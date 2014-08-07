<?php

class LS_Sliders {

	public static $results = array();
	public static $count = null;


	// Don't allow instantiate
	private function __construct() {

	}


	public static function first($offset = 0) {

		if(is_int($offset) && $offset >= 0) {
			$this->_fetch("SELECT * FROM %s ORDER BY id ASC LIMIT %i, 1", $offset);
		}

		// Return false otherwise
		return false;
	}

	public static function last($offset = 0) {

		if(is_int($offset) && $offset <= 0) {
			$this->_fetch("SELECT * FROM %s ORDER BY id DESC LIMIT %i, 1", $offset);
		}

		// Return false otherwise
		return false;
	}

	public static function count() {

	}


	public static function find($args) {

		// Find by slider ID
		if(is_int($args)) {
			return self::_getById($args);

		// Find by query
		} else {

			// Defaults
			$defaults = array(
				'columns' => '*',
				'where' => '',
				'exclude' => array('hidden', 'removed'),
				'orderby' => 'date_c',
				'order' => 'DESC',
				'limit' => 10,
				'page' => 1,
				'data' => true
			);

			// User data
			foreach($defaults as $key => $val) {
				if(!isset($args[$key])) { $args[$key] = $val; } }

			// Escape user data
			foreach($args as $key => $val) {
				$args[$key] = esc_sql($val); }

			// Exclude
			if(!empty($args['exclude'])) {
				if(in_array('hidden', $args['exclude'])) {
					$exclude[] = "flag_hidden = '0'"; }

				if(in_array('removed', $args['exclude'])) {
					$exclude[] = "flag_deleted = '0'"; }

				$args['exclude'] = implode(' AND ', $exclude);
			}

			// Where
			$where = '';
			if(!empty($args['where']) && !empty($args['exclude'])) {
				$where = "WHERE ({$args['exclude']}) AND ({$args['where']}) ";

			} elseif(!empty($args['where'])) {
				$where = "WHERE {$args['where']} ";

			} elseif(!empty($args['exclude'])) {
				$where = "WHERE {$args['exclude']} ";
			}

			// Some adjustments
			$args['limit'] = ($args['limit'] * $args['page'] - $args['limit']).', '.$args['limit'];

			// Build the query
			global $wpdb;
			$table = $wpdb->prefix.LS_DB_TABLE;
			$sliders = $wpdb->get_results("SELECT SQL_CALC_FOUND_ROWS {$args['columns']} FROM $table $where
									ORDER BY {$args['orderby']} {$args['order']} LIMIT {$args['limit']}", ARRAY_A);

			// Set counter
			$found = $wpdb->get_col("SELECT FOUND_ROWS()");
			self::$count = (int) $found[0];

			// Return original value on error
			if(!is_array($sliders)) { return $sliders; };

			// Parse slider data
			if($args['data']) {
				foreach($sliders as $key => $val) {
					$sliders[$key]['data'] = json_decode($val['data'], true);
				}
			}

			// Return sliders
			return $sliders;
		}
	}




	public static function add($title = 'Unnamed', $data = array()) {

		global $wpdb;

		$data = !empty($data) ? $data : array(
			'properties' => array('title' => $_POST['title']),
			'layers' => array(array()),
		);

		$wpdb->insert($wpdb->prefix.LS_DB_TABLE, array(
			'name' => $_POST['title'],
			'data' => json_encode($data),
			'date_c' => time(),
			'date_m' => time()
		), array(
			'%s', '%s', '%d', '%d'
		));

		return $wpdb->insert_id;
	}





	public static function remove($id = null) {

		// Check ID
		if($id == null) {
			return false;
		}

		// Remove
		global $wpdb;
		$wpdb->update($wpdb->prefix.LS_DB_TABLE,
			array('flag_deleted' => 1),
			array('id' => $id),
			'%d', '%d'
		);

		return true;
	}



	public static function delete($id = null) {

		// Check ID
		if($id == null) {
			return false;
		}

		// Delete
		global $wpdb;
		$wpdb->delete($wpdb->prefix.LS_DB_TABLE, array('id' => $id), '%d');

		return true;
	}



	public static function restore($id = null) {

		// Check ID
		if($id == null) {
			return false;
		}

		// Remove
		global $wpdb;
		$wpdb->update($wpdb->prefix.LS_DB_TABLE,
			array('flag_deleted' => 0),
			array('id' => $id),
			'%d', '%d'
		);

		return true;
	}




	private static function _getById($id = null) {

		// Check ID
		if($id == null) {
			return false;
		}

		global $wpdb;
		$table = $wpdb->prefix.LS_DB_TABLE;

		$result = $wpdb->get_row("SELECT * FROM $table WHERE id = '$id' LIMIT 1", ARRAY_A);
		$result['data'] = json_decode($result['data'], true);

		return $result;
	}
}
