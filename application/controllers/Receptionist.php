<?php if (!defined('BASEPATH'))exit('No direct script access allowed'); //This ensures the route is following the basepath


class Receptionist extends CI_Controller {

    function __construct() {
        parent::__construct();

		$this->load->database(); //This loads the database
		$this->load->library('session'); //To track user activities
        //$this->load->model('setting_model');
        $this->load->model('department_model');
                $this->load->model('receptionist_model');
                $this->load->model('schedule_model');
                $this->load->model('appointment_model');  
    }

    public function index() {
        if($this->session->userdata('receptionist_login') != 1) redirect(base_url(). 'login', 'refresh');
        if($this->session->userdata('receptionist_login') == 1) redirect(base_url(). 'receptionist/dashboard', 'refresh');
    }


    function dashboard() {
        if($this->session->userdata('receptionist_login') != 1) redirect(base_url(). 'login', 'refresh');
        $page_data['page_name']  = 'dashboard';
        $page_data['page_title'] =  get_phrase('Receptionist Dashboard');
        $this->load->view('backend/index', $page_data);
    }


     //******** The function below update receptionist profile  *****************/
     function change_profile($param1 = null, $param2 = null, $param3 = null){
        if($param1 == 'update_info'){
            $this->receptionist_model->updateReceptionistInfoFunction();
            $this->session->set_flashdata('flash_message', get_phrase('Data Updated Successfully'));
            redirect(base_url() . 'receptionist/change_profile', 'refresh');
        }
        if($param1 == 'change_password'){
            $this->receptionist_model->changePasswordFunction();
            $this->session->set_flashdata('flash_message', get_phrase('Password Changed Successfully'));
            redirect(base_url() . 'receptionist/change_profile', 'refresh');
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

    function get_department_doctor($department_id){
        //This function works with the Ajax script function in the add_schedule.php 
        //and autoloads the list of doctors based on the selected department

        $doctors = $this->db->get_where('doctor', array('department_id' => $department_id))->result_array();
        foreach($doctors as $key => $doctors){
            echo '<option value="'.$doctors['doctor_id'].'">'.$doctors['name'].'</option>';
        }
    }

    function add_schedule ($param1 = null, $param2 = null, $param3 = null){

        if($param1 == 'create'){
           $this->schedule_model->insertIntoscheduleTable();
            $this->session->set_flashdata('flash_message', get_phrase('Data Saved Successfully'));
            redirect(base_url() . 'receptionist/list_schedule', 'refresh');
        }

        if($param1 == 'update'){
            $this->schedule_model->updatescheduleTable($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data Updated Successfully'));
            redirect(base_url() . 'receptionist/list_schedule', 'refresh');
        }

        if($param1 == 'delete'){

            $this->schedule_model->deletescheduleTable($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data Deleted Successfully'));
            redirect(base_url() . 'receptionist/list_schedule', 'refresh');
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


    function add_appointment ($param1 = null, $param2 = null, $param3 = null){

        if($param1 == 'create'){

            $this->appointment_model->insertIntoAppointmentTable();
            $this->session->set_flashdata('flash_message', get_phrase('Data Saved Successfully'));
            redirect(base_url() . 'receptionist/list_appointment', 'refresh');
        }
        if($param1 == 'update'){

            $this->appointment_model->updateAppointmentInformation($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data Updated Successfully'));
            redirect(base_url() . 'receptionist/list_appointment', 'refresh');
        }
        if($param1 == 'delete'){

            $this->appointment_model->deleteAppointmentInformation($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data Deleted Successfully'));
            redirect(base_url() . 'receptionist/list_appointment', 'refresh');
        }
        $page_data['page_name'] =   'add_appointment';
        $page_data['page_title'] =   get_phrase('Add Appointment');
        $this->load->view('backend/index', $page_data);

    }


    function get_doctor_schedule($doctor_id){
        $schedules = $this->db->get_where('schedule', array('doctor_id' => $doctor_id))->result_array();
        foreach ($schedules as $key => $schedule){
            echo '<option value="'.$schedule['schedule_id'].'">'.'schedule Date: '. date('d M Y', $schedule['avail_day']) .' - '.'Start Time: '.$schedule['start_time'].' End Time: '.$schedule['end_time'].'</option>';
        }
    }


    function list_appointment (){
        $page_data['page_name'] =   'list_appointment';
        $page_data['page_title'] =   get_phrase('List Appointment');
        $this->load->view('backend/index', $page_data);
    }

    function edit_appointment ($appointment_id){
        $page_data['display_appointment'] = $this->appointment_model->get_appointment_by_id($appointment_id);
        $page_data['appointment_id'] = $appointment_id;
        $page_data['page_name'] =   'edit_appointment';
        $page_data['page_title'] =   get_phrase('Edit Appointment');
        $this->load->view('backend/index', $page_data);
    }

        




}
