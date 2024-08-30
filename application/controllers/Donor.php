<?php if (!defined('BASEPATH'))exit('No direct script access allowed'); //This ensures the route is following the basepath


class Donor extends CI_Controller {

    function __construct() {
        parent::__construct();
		$this->load->database(); //This loads the database into the constructor
		$this->load->library('session'); //To track user activities
        $this->load->model('donor_model');
    }

    function manage_donor($param1 = null, $param2 = null, $param3 = null){
        if($param1 == 'create'){
            $this->donor_model->createNewBloodDonorInformation();
            $this->session->set_flashdata('flash_message', get_phrase('Donor Added Successfully'));
            redirect(base_url() . 'donor/manage_donor', 'refresh');
        }

        if($param1 == 'update'){
            $this->donor_model->updateBloodDonorInformation($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data Updated Successfully'));
            redirect(base_url() . 'donor/manage_donor', 'refresh');
        }

        if($param1 == 'delete'){
            $this->donor_model->deleteBloodDonorInformation($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data Deleted Successfully'));
            redirect(base_url() . 'donor/manage_donor', 'refresh');
        }




        $page_data['page_name']     = 'manage_donor'; //This loads the page name from the view controller.
        $page_data['page_title']    = get_phrase('Manage Donor'); //This loads the page title

        $this->load->view('backend/index', $page_data);




    }





}