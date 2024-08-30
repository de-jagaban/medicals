<?php if (!defined('BASEPATH'))exit('No direct script access allowed'); //This ensures the route is following the basepath

class Login_model extends CI_Model {

    function __construct() {
        parent::__construct();

    }

    function userLoginFunction(){

        
        $email        =html_escape($this->input->post('email')); //Assigns the inserted value to a variable $email
        $password     =html_escape($this->input->post('password')); //Assigns the inserted value to a variable $password
        $data         =array('email' => $email, 'password' => sha1($password)); //Compares the user inserted values with what is available on the table


        $query        =$this->db->get_where('admin', $data);
        if($query->num_rows() > 0){

            $row = $query->row();

            //Setting sessions to track user login
            $this->session->set_userdata('login_type', 'admin');
            $this->session->set_userdata('admin_login', '1');
            $this->session->set_userdata('admin_id', $row->admin_id); //track admin_id in the sessions
            $this->session->set_userdata('login_user_id', $row->admin_id);
            $this->session->set_userdata('name', $row->name);

             //redirect user to dashboard after successful login
             $this->session->set_flashdata('flash_message', $row->name.' '.get_phrase('Login Successful')); //Shows a falsh message on the screen
             redirect(base_url().'admin/dashboard', 'refresh');

                     

    }

    $query = $this->db->get_where('accountant', $data);
        if ($query->num_rows() > 0) {
            $row = $query->row();
  
            $this->session->set_userdata('login_type', 'accountant');
            $this->session->set_userdata('accountant_login', '1');
            $this->session->set_userdata('accountant_id', $row->accountant_id);
            $this->session->set_userdata('login_user_id', $row->accountant_id);
            $this->session->set_userdata('name', $row->name);

            $this->session->set_flashdata('flash_message', $row->name.' '.get_phrase('Login Successful'));
            redirect(base_url() . 'accountant/dashboard', 'refresh');
            
           
        }


        $query = $this->db->get_where('doctor', $data);
        if ($query->num_rows() > 0) {
            $row = $query->row();

            $this->session->set_userdata('login_type', 'doctor');
            $this->session->set_userdata('doctor_login', '1');
            $this->session->set_userdata('doctor_id', $row->doctor_id);
            $this->session->set_userdata('login_user_id', $row->doctor_id);
            $this->session->set_userdata('name', $row->name);

            $this->session->set_flashdata('flash_message', $row->name.' '.get_phrase('Login Successful'));
            redirect(base_url() . 'doctor/dashboard', 'refresh');

        }

        $query = $this->db->get_where('nurse', $data);
        if ($query->num_rows() > 0) {
            $row = $query->row();

            $this->session->set_userdata('login_type', 'nurse');
            $this->session->set_userdata('nurse_login', '1');
            $this->session->set_userdata('nurse_id', $row->nurse_id);
            $this->session->set_userdata('login_user_id', $row->nurse_id);
            $this->session->set_userdata('name', $row->name);

            $this->session->set_flashdata('flash_message', $row->name.' '.get_phrase('Login Successful'));
            redirect(base_url() . 'nurse/dashboard', 'refresh');

        }

        $query = $this->db->get_where('patient', $data);
        if ($query->num_rows() > 0) {
            $row = $query->row();

            $this->session->set_userdata('login_type', 'patient');
            $this->session->set_userdata('patient_login', '1');
            $this->session->set_userdata('patient_id', $row->patient_id);
            $this->session->set_userdata('login_user_id', $row->patient_id);
            $this->session->set_userdata('name', $row->name);

            $this->session->set_flashdata('flash_message', $row->name.' '.get_phrase('Login Successful'));
            redirect(base_url() . 'patient/dashboard', 'refresh');

        }

        $query = $this->db->get_where('laboratorist', $data);
        if ($query->num_rows() > 0) {
            $row = $query->row();

            $this->session->set_userdata('login_type', 'laboratorist');
            $this->session->set_userdata('laboratorist_login', '1');
            $this->session->set_userdata('laboratorist_id', $row->laboratorist_id);
            $this->session->set_userdata('login_user_id', $row->laboratorist_id);
            $this->session->set_userdata('name', $row->name);

            $this->session->set_flashdata('flash_message', $row->name.' '.get_phrase('Login Successful'));
            redirect(base_url() . 'laboratorist/dashboard', 'refresh');

        }

        $query = $this->db->get_where('pharmacist', $data);
        if ($query->num_rows() > 0) {
            $row = $query->row();

            $this->session->set_userdata('login_type', 'pharmacist');
            $this->session->set_userdata('pharmacist_login', '1');
            $this->session->set_userdata('pharmacist_id', $row->pharmacist_id);
            $this->session->set_userdata('login_user_id', $row->pharmacist_id);
            $this->session->set_userdata('name', $row->name);

            $this->session->set_flashdata('flash_message', $row->name.' '.get_phrase('Login Successful'));
            redirect(base_url() . 'pharmacist/dashboard', 'refresh');

        }

        $query = $this->db->get_where('receptionist', $data);
        if ($query->num_rows() > 0) {
            $row = $query->row();

            $this->session->set_userdata('login_type', 'receptionist');
            $this->session->set_userdata('receptionist_login', '1');
            $this->session->set_userdata('receptionist_id', $row->receptionist_id);
            $this->session->set_userdata('login_user_id', $row->receptionist_id);
            $this->session->set_userdata('name', $row->name);

            $this->session->set_flashdata('flash_message', $row->name.' '.get_phrase('Login Successful'));
            redirect(base_url() . 'receptionist/dashboard', 'refresh');

        }


    elseif($query->num_rows() == 0){

        //This flashes an invalid login details alert to the user and redirects the user back to the login page
        $this->session->set_flashdata('error_message', get_phrase('Invalid Login Details'));
        redirect(base_url(). 'login', 'refresh');
    }

}


}