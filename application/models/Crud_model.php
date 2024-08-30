<?php

use function PHPSTORM_META\type;

 if (!defined('BASEPATH'))exit('No direct script access allowed'); //This ensures the route is following the basepath

class Crud_model extends CI_Model {

    function __construct() 
    {
        parent::__construct();

    }

    //This functions fetches the user image from the  stored folder
    //'uploads/user_type folder('admin_image, patient_image, doctor_image')/image_id fetched from the datadase table.jpg
    function get_image_url($type = null, $id = null){

        if(file_exists('uploads/'. $type . '_image/' . $id . '.jpg'))
        $image_url = (base_url(). 'uploads/' . $type . '_image/' . $id . '.jpg');
        else
        $image_url = base_url(). 'uploads/default.jpg';
        return $image_url;


    }

    //Function to query for the user name and display in the dashboard
    function get_type_name_by_id($type, $type_id = null, $field = 'name'){
        $this->db->where($type . '_id', $type_id);
        $query = $this->db->get($type);
        $result = $query->result_array();
        foreach ($result as $key => $row)
        return $row[$field];


    }

    //This function get the prescription info and displays to the users
    function select_prescription_info(){
        return $this->db->get('prescription')->result_array();
    }

    function select_prescription_info_by_patient_id(){
        $patient_id = $this->session->userdata('login_user_id');
        return $this->db->get_where('prescription', array('patient_id' => $patient_id))->result_array();
    }

     //This function get the prescription info and displays to the users
     function select_test_info(){
        return $this->db->get('test')->result_array();
    }

    function select_test_info_by_patient_id(){
        $patient_id = $this->session->userdata('login_user_id');
        return $this->db->get_where('test', array('patient_id' => $patient_id))->result_array();
    }


    function select_Invoice_info(){
        return $this->db->get('invoice')->result_array();
    }


}

