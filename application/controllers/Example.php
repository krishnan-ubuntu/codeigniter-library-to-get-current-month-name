<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Example extends CI_Controller {

	public function __construct() {
        parent::__construct();

        $this->load->library('customdate');

    }


    public function display_current_month_name() {

		$month_name = $this->customdate->get_current_month();

		echo $month_name;

    }

}