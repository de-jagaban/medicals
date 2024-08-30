<?php if (!defined('BASEPATH'))exit('No direct script access allowed'); //This ensures the route is following the basepath


class Doctor extends CI_Controller {

    function __construct() {
        parent::__construct();

		$this->load->database(); //This loads the database
		$this->load->library('session'); //To track user activities
        //$this->load->model('setting_model');
        $this->load->model('doctor_model');
        $this->load->model('schedule_model');
        $this->load->model('department_model');
       
    }

    public function index() {
        if($this->session->userdata('doctor_login') != 1) redirect(base_url(). 'login', 'refresh');
        if($this->session->userdata('doctor_login') == 1) redirect(base_url(). 'doctor/dashboard', 'refresh');
    }


    function dashboard() {
        if($this->session->userdata('doctor_login') != 1) redirect(base_url(). 'login', 'refresh');
        $page_data['page_name']  = 'dashboard';
        $page_data['page_title'] =  get_phrase('Doctor Dashboard');
        $this->load->view('backend/index', $page_data);
    }


     //******** The function below update doctor profile  *****************/
     function change_profile($param1 = null, $param2 = null, $param3 = null){
        if($param1 == 'update_info'){
            $this->doctor_model->updateDoctorInfoFunction();
            $this->session->set_flashdata('flash_message', get_phrase('Data Updated Successfully'));
            redirect(base_url() . 'doctor/change_profile', 'refresh');
        }
        if($param1 == 'change_password'){
            $this->doctor_model->changePasswordFunction();
            $this->session->set_flashdata('flash_message', get_phrase('Password Changed Successfully'));
            redirect(base_url() . 'doctor/change_profile', 'refresh');
        }
        $page_data['page_name']  = 'change_profile';
        $page_data['page_title'] =  get_phrase('Change Profile');
        $this->load->view('backend/index', $page_data);
    }
    //******** Ends here *****************/




    function notification ($param1 = null, $param2 = null, $param3 = null){

       

        $page_data['page_name'] =   'notification';
        $page_data['page_title'] =   get_phrase('Add Event');
        $this->load->view('backend/index', $page_data);

    }



    function add_schedule ($param1 = null, $param2 = null, $param3 = null){

        if($param1 == 'create'){

           $this->schedule_model->insertIntoScheduleTable();
            $this->session->set_flashdata('flash_message', get_phrase('Data Saved Successfully'));
            redirect(base_url() . 'doctor/list_schedule', 'refresh');
        }

        if($param1 == 'update'){

            $this->schedule_model->updateScheduleTable($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data Updated Successfully'));
            redirect(base_url() . 'doctor/list_schedule', 'refresh');
        }

        if($param1 == 'delete'){

            $this->schedule_model->deleteScheduleTable($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data Deleted Successfully'));
            redirect(base_url() . 'doctor/list_schedule', 'refresh');
        }

        $page_data['page_name'] =   'add_schedule';
        $page_data['page_title'] =   get_phrase('Add schedule');
        $this->load->view('backend/index', $page_data);

    }


    function list_schedule(){

        $page_data['page_name'] =   'list_schedule';
        $page_data['page_title'] =   get_phrase('List schedule');
        $this->load->view('backend/index', $page_data);
    }


    function edit_schedule ($schedule_id){

        $page_data['get_schedule'] = $this->schedule_model->get_schedule_by_id($schedule_id);
        $page_data['page_name'] =   'edit_schedule';
        $page_data['page_title'] =   get_phrase('Edit schedule');
        $this->load->view('backend/index', $page_data);

    }


   

}