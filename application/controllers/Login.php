<?php if (!defined('BASEPATH'))exit('No direct script access allowed'); //This ensures the route is following the basepath


class Login extends CI_Controller {

    function __construct() {
        parent::__construct();

		$this->load->database(); //This loads the database
		$this->load->library('session'); //To track user activities
    }


    public function index() {
        //Controls the login and logout logic
        if($this->session->userdata('admin_login') == 1) redirect(base_url(). 'admin/dashboard', 'refresh'); //checks if user session is already active and redirects to dashboard.
        if($this->session->userdata('accountant_login') == 1) redirect(base_url(). 'accountant/dashboard', 'refresh');
        if($this->session->userdata('doctor_login') == 1) redirect(base_url(). 'doctor/dashboard', 'refresh');
        if($this->session->userdata('nurse_login') == 1) redirect(base_url(). 'nurse/dashboard', 'refresh');
        if($this->session->userdata('patient_login') == 1) redirect(base_url(). 'patient/dashboard', 'refresh');
        if($this->session->userdata('laboratorist_login') == 1) redirect(base_url(). 'laboratorist/dashboard', 'refresh');
        if($this->session->userdata('pharmacist_login') == 1) redirect(base_url(). 'pharmacist/dashboard', 'refresh');
        if($this->session->userdata('receptionist_login') == 1) redirect(base_url(). 'receptionist/dashboard', 'refresh');
        $this->load->view('backend/login'); //This loads the login page from the view application


    }


    function check_login(){
            $this->login_model->userLoginFunction();            
           
        }

        function logout(){

            $this->session->sess_destroy();
            redirect(base_url(). 'login', 'refresh');

        }

     





    }

   
