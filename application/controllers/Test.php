<?php if (!defined('BASEPATH'))exit('No direct script access allowed'); //This ensures the route is following the basepath


class Test extends CI_Controller {

    function __construct() {
        parent::__construct();
		$this->load->database(); //This loads the database into the constructor
		$this->load->library('session'); //To track user activities
        $this->load->model('department_model');
        $this->load->model('test_model');
    }

    
    function add_test ($param1 = null, $param2 = null, $param3 = null){

        if($param1 == 'create'){

            $this->test_model->insertIntoTestTable();
             $this->session->set_flashdata('flash_message', get_phrase('Test Saved Successfully'));
             redirect(base_url() . 'test/list_test', 'refresh');
         }

         if($param1 == 'update'){

            $this->test_model->updateTestTable($param2);
             $this->session->set_flashdata('flash_message', get_phrase('Test Updated Successfully'));
             redirect(base_url() . 'test/list_test', 'refresh');
         }

         if($param1 == 'delete'){

            $this->test_model->deleteFromTestTable($param2);
             $this->session->set_flashdata('flash_message', get_phrase('Test Deleted Successfully'));
             redirect(base_url() . 'test/list_test', 'refresh');
         }

    
        $page_data['page_name']  = 'add_test';
        $page_data['page_title'] =  get_phrase('Create Test');
        $this->load->view('backend/index', $page_data);
    }

    function list_test ($param1 = null, $param2 = null, $param3 = null){
       
       
        $page_data['page_name']  = 'list_test';
        $page_data['page_title'] =  get_phrase('List Test');
        $this->load->view('backend/index', $page_data);
    }


    function view_test($test_id){

        $page_data['select_test_by_id']  = $this->test_model->select_test_by_id($test_id);
        $page_data['page_name']  = 'view_test';
        $page_data['page_title'] =  get_phrase('Print Test');
        $this->load->view('backend/index', $page_data);
    }

    function edit_test($test_id){

        $page_data['select_test_by_id']  = $this->test_model->select_test_by_id($test_id);
        
        $page_data['test_id'] = $test_id;
        $page_data['page_name']  = 'edit_test';
        $page_data['page_title'] =  get_phrase('Edit Test');
        $this->load->view('backend/index', $page_data);
    }

    function get_doctor_patient_edit ($department_id, $test_id){

        $page_data['department_id'] = $department_id;
        $page_data['test_id'] = $test_id;
        $this->load->view('backend/laboratorist/display_doc_patient_prescrip', $page_data);
    }


    function select_doctor_patient($department_id){
        //This function controls the automatic display of the doctor and patient in a particular department
        //when the department is selected.

        $page_data['department_id'] = $department_id;
        $this->load->view('backend/laboratorist/display_doctor_patient', $page_data);
        //The loaded view above is automatic loaded once the department is selected and the JS Ajax function
        //in add_appointment.php is initiated.
    }

    


}