<?php if (!defined('BASEPATH'))exit('No direct script access allowed'); //This ensures the route is following the basepath

class Receptionist_model extends CI_Model {

    function __construct() {
        parent::__construct();

    }

      //This function selects the receptionist from the receptionist table in the database.
      function select_all_receptionists(){
        $query = $this->db->get('receptionist');
            return $query->result_array();
    }
    /*ends here */


  
     //This will insert the data entered in the form into the receptionist table.
    function insertIntoReceptionistTable(){   
        $page_data['name']              = html_escape($this->input->post('name'));
        $page_data['date_of_birth']     = strtotime($this->input->post('date_of_birth'));
        
        $page_data['place_of_birth']    = html_escape($this->input->post('place_of_birth'));       
        $page_data['id_card']           = html_escape($this->input->post('id_card'));
        $page_data['gender']            = html_escape($this->input->post('gender'));
        $page_data['department_id']     = html_escape($this->input->post('department_id'));
        $page_data['mother_tongue']     = html_escape($this->input->post('mother_tongue'));
        $page_data['marital_status']    = html_escape($this->input->post('marital_status'));
        $page_data['religion']          = html_escape($this->input->post('religion'));
        $page_data['blood_group']       = html_escape($this->input->post('blood_group'));
        $page_data['address']           = html_escape($this->input->post('address'));
        $page_data['city']              = html_escape($this->input->post('city'));
        $page_data['qualification']     = html_escape($this->input->post('qualification'));
        $page_data['state']             = html_escape($this->input->post('state'));
        $page_data['nationality']       = html_escape($this->input->post('nationality'));        
        $page_data['biography']         = html_escape($this->input->post('biography'));

        $page_data['email']             = html_escape($this->input->post('email'));
        $page_data['phone']             = html_escape($this->input->post('phone'));
        $page_data['mobile_no']         = html_escape($this->input->post('mobile_no'));
        $page_data['password']          = sha1($this->input->post('password'));
        $page_data['facebook']          = html_escape($this->input->post('facebook'));
        $page_data['twitter']           = html_escape($this->input->post('twitter'));
        $page_data['google_plus']       = html_escape($this->input->post('google_plus'));
        $page_data['linkedin']          = html_escape($this->input->post('linkedin'));

        $page_data['file_name'] = $_FILES["file_name"]["name"];


        //Email validation
        $check_email = $this->db->get_where('receptionist', array('email' => $page_data['email']))->row()->email;
        if($check_email != null || $check_email != ''){

            $this->session->set_flashdata('error_message', get_phrase('Email Already Exists'));
            redirect(base_url(). 'admin/manage_receptionist', 'refresh');
        }
        else{

            $this->db->insert('receptionist', $page_data); //Inserts into the database.
            $receptionist_id = $this->db->insert_id();
            move_uploaded_file($_FILES['file_name']['tmp_name'], 'uploads/receptionist_image/' . $_FILES["file_name"]["name"]);
            //Uploads receptionist's image into receptionist image folder
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/receptionist_image/' . $receptionist_id . '.jpg');

        }


        
    }


     //This will update the data entered in the form into the receptionist database.
    function updateReceptionistInformation($param2){      
        $page_data['name']              = html_escape($this->input->post('name'));
        $page_data['date_of_birth']     = strtotime($this->input->post('date_of_birth'));
        
        $page_data['place_of_birth']    = html_escape($this->input->post('place_of_birth'));       
        $page_data['id_card']           = html_escape($this->input->post('id_card'));
        $page_data['gender']            = html_escape($this->input->post('gender'));
        $page_data['department_id']     = html_escape($this->input->post('department_id'));
        $page_data['mother_tongue']     = html_escape($this->input->post('mother_tongue'));
        $page_data['marital_status']    = html_escape($this->input->post('marital_status'));
        $page_data['religion']          = html_escape($this->input->post('religion'));
        $page_data['blood_group']       = html_escape($this->input->post('blood_group'));
        $page_data['address']           = html_escape($this->input->post('address'));
        $page_data['city']              = html_escape($this->input->post('city'));
        $page_data['qualification']     = html_escape($this->input->post('qualification'));
        $page_data['state']             = html_escape($this->input->post('state'));
        $page_data['nationality']       = html_escape($this->input->post('nationality'));        
        $page_data['biography']         = html_escape($this->input->post('biography'));

        $page_data['email']             = html_escape($this->input->post('email'));
        $page_data['phone']             = html_escape($this->input->post('phone'));
        $page_data['mobile_no']         = html_escape($this->input->post('mobile_no'));
        $page_data['facebook']          = html_escape($this->input->post('facebook'));
        $page_data['twitter']           = html_escape($this->input->post('twitter'));
        $page_data['google_plus']       = html_escape($this->input->post('google_plus'));
        $page_data['linkedin']          = html_escape($this->input->post('linkedin'));


        $this->db->where('receptionist_id', $param2); //Will delete based on the department_id
        $this->db->update('receptionist', $page_data); //Updates the database.

        move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/receptionist_image/' . $param2 . '.jpg');

    }

    function deleteReceptionistInformation($param2){
        //This will delete the data entered in the form into the department database.
        $this->db->where('receptionist_id', $param2); //Will delete based on the department_id
        $this->db->delete('receptionist'); //Updates the database.
    }

    
    function updateReceptionistInfoFunction(){

        $page_data['name']      =   html_escape($this->input->post('name'));
        $page_data['email']     =   html_escape($this->input->post('email'));
        $page_data['phone']     =   html_escape($this->input->post('phone'));
        $page_data['address']   =   html_escape($this->input->post('address'));

        $this->db->where('receptionist_id', $this->session->userdata('receptionist_id'));
        $this->db->update('receptionist', $page_data);
        move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/receptionist_image/' . $this->session->userdata('receptionist_id') . '.jpg');
    }



    function changePasswordFunction (){

        $page_data['password']       =   sha1($this->input->post('new_password'));
        $confirm_password            =   sha1($this->input->post('confirm_new_password'));

        if($page_data['password'] == $confirm_password){
            $this->db->where('receptionist_id', $this->session->userdata('receptionist_id'));
            $this->db->update('receptionist', $page_data);

        }

        else{

            $this->session->set_flashdata('error_message', get_phrase('Password Mismatch'));
            redirect(base_url() . 'receptionist/change_profile', 'refresh');

        }
    }




}