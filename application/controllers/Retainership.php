<?php if (!defined('BASEPATH'))exit('No direct script access allowed'); //This ensures the route is following the basepath


class Retainership extends CI_Controller {

    function __construct() {
        parent::__construct();
		$this->load->database(); //This loads the database into the constructor
		$this->load->library('session'); //To track user activities
        $this->load->model('retainership_model');
    }

    function manage_retainership($param1 = null, $param2 = null, $param3 = null){
        if($param1 == 'create'){
            $this->retainership_model->createNewRetainershipInformation();
            $this->session->set_flashdata('flash_message', get_phrase('Retainership  Added Successfully'));
            redirect(base_url() . 'retainership/manage_retainership', 'refresh');
        }

        if($param1 == 'update'){
            $this->retainership_model->updateRetainershipInformation($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data Updated Successfully'));
            redirect(base_url() . 'retainership/manage_retainership', 'refresh');
        }

        if($param1 == 'delete'){
            $this->retainership_model->deleteRetainershipInformation($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data Deleted Successfully'));
            redirect(base_url() . 'retainership/manage_retainership', 'refresh');
        }




        $page_data['page_name']     = 'manage_retainership'; //This loads the page name from the view controller.
        $page_data['page_title']    = get_phrase('Manage Retainership'); //This loads the page title

        $this->load->view('backend/index', $page_data);




    }





}