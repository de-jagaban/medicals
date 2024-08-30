<?php if (!defined('BASEPATH'))exit('No direct script access allowed'); //This ensures the route is following the basepath


class Blood extends CI_Controller {

    function __construct() {
        parent::__construct();
		$this->load->database(); //This loads the database into the constructor
		$this->load->library('session'); //To track user activities
        $this->load->model('blood_model');
    }

    function manage_blood($param1 = null, $param2 = null, $param3 = null){
        if($param1 == 'create'){
            $this->blood_model->createNewBloodInformation();
            $this->session->set_flashdata('flash_message', get_phrase('Blood Added Successfully'));
            redirect(base_url() . 'blood/manage_blood', 'refresh');
        }

        if($param1 == 'update'){
            $this->blood_model->updateBloodInformation($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data Updated Successfully'));
            redirect(base_url() . 'blood/manage_blood', 'refresh');
        }

        if($param1 == 'delete'){
            $this->blood_model->deleteBloodInformation($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data Deleted Successfully'));
            redirect(base_url() . 'blood/manage_blood', 'refresh');
        }




        $page_data['page_name']     = 'manage_blood'; //This loads the page name from the view controller.
        $page_data['page_title']    = get_phrase('Manage Blood'); //This loads the page title

        $this->load->view('backend/index', $page_data);




    }





}