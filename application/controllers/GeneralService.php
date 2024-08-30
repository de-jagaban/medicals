<?php if (!defined('BASEPATH'))exit('No direct script access allowed'); //This ensures the route is following the basepath


class GeneralService extends CI_Controller {

    function __construct() {
        parent::__construct();

		$this->load->database(); //This loads the database
		$this->load->library('session'); //To track user activities
        //$this->load->model('setting_model');
        
    }


}
