<?php if (!defined('BASEPATH'))exit('No direct script access allowed'); //This ensures the route is following the basepath

class Retainership_model extends CI_Model {

    function __construct() {
        parent::__construct();

    }

    //This function selects the companies from the retainership table in the database.
    function select_all_retainerships(){
        $query = $this->db->get('retainership');
            return $query->result_array();
    }
    /*ends here */


    function createNewRetainershipInformation(){
        //This will insert the data entered in the form into the retainership database.

        $page_data['company_name'] = html_escape($this->input->post('company_name'));
        $page_data['address'] = html_escape($this->input->post('address'));
        $page_data['email'] = html_escape($this->input->post('email'));
        $page_data['parameters'] = html_escape($this->input->post('parameters'));
        $page_data['phone'] = html_escape($this->input->post('phone'));
        $page_data['focal_person'] = html_escape($this->input->post('focal_person'));
        $page_data['ref_no'] = html_escape($this->input->post('ref_no'));
        $page_data['start_date'] = strtotime(date($this->input->post('start_date')));
        $page_data['expiry_date'] = strtotime(date($this->input->post('expiry_date')));
        $page_data['status'] = html_escape($this->input->post('status'));
        $page_data['date_created'] = time();  // Get current Unix timestamp

        $this->db->insert('retainership', $page_data); //Inserts into the database.
    }


    function updateRetainershipInformation($param2){
        //This will insert the data entered in the form into the retainership database.

        $page_data['company_name'] = html_escape($this->input->post('company_name'));
        $page_data['address'] = html_escape($this->input->post('address'));
        $page_data['email'] = html_escape($this->input->post('email'));
        $page_data['parameters'] = html_escape($this->input->post('parameters'));
        $page_data['phone'] = html_escape($this->input->post('phone'));
        $page_data['focal_person'] = html_escape($this->input->post('focal_person'));
        $page_data['ref_no'] = html_escape($this->input->post('ref_no'));
        $page_data['start_date'] = strtotime(date($this->input->post('start_date')));
        $page_data['expiry_date'] = strtotime(date($this->input->post('expiry_date')));
        $page_data['status'] = html_escape($this->input->post('status'));

        $this->db->where('company_id', $param2); //Will update based on the company_id
        $this->db->update('retainership', $page_data); //Updates the database.
    }

    function deleteRetainershipInformation($param2){
        //This will delete the data entered in the form into the department database.
        $this->db->where('company_id', $param2); //Will delete based on the department_id
        $this->db->delete('retainership'); //Updates the database.
    }

   



}