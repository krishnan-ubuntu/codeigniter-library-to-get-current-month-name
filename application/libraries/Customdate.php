<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Customdate {

	function get_current_month() {
		$mons = array(1 => "Jan", 2 => "Feb", 3 => "Mar", 4 => "Apr", 5 => "May", 6 => "Jun", 7 => "Jul", 8 => "Aug", 9 => "Sep", 10 => "Oct", 11 => "Nov", 12 => "Dec");
		$date = getdate();
		$month = $date['mon'];
		$month_name = $mons[$month];
		return $month_name;
	}

}
