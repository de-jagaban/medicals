<?php if (!defined('BASEPATH'))exit('No direct script access allowed'); //This ensures the route is following the basepath

class Admin_model extends CI_Model {

    function __construct() {
        parent::__construct();

    }

    function updateAdminInfoFunction(){
        //This updates the Admin details

        $page_data['name'] = html_escape($this->input->post('name'));
        $page_data['email'] = html_escape($this->input->post('email'));
        $page_data['phone'] = html_escape($this->input->post('phone'));
        $page_data['address'] = html_escape($this->input->post('address'));

        $this->db->where('admin_id', $this->session->userdata('admin_id'));
        $this->db->update('admin', $page_data);
        //uploads/stores admin image to the its directory.
        move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/admin_image/'. $this->session->userdata('admin_id').'.jpg');

    }

    function changePasswordFunction(){
        //This controls the password change function

        $page_data['password']       = sha1($this->input->post('new_password'));
        $confirm_password            = sha1($this->input->post('confirm_new_password'));

        //Validates if passwords match
        if($page_data['password'] == $confirm_password){
            $this->db->where('admin_id', $this->session->userdata('admin_id'));
            $this->db->update('admin', $page_data);
        }
        
        else{
            $this->session->set_flashdata('error_message', get_phrase('Password does not match'));
            redirect(base_url(). 'admin/change_profile', 'refresh');
        }



    }




    
}