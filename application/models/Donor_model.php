<?php if (!defined('BASEPATH'))exit('No direct script access allowed'); //This ensures the route is following the basepath

class Donor_model extends CI_Model {

    function __construct() {
        parent::__construct();

    }

    //This function selects the donor from the donor table in the database.
    function select_all_blood_donors(){
        $query = $this->db->get('donor');
            return $query->result_array();
    }
    /*ends here */


    function createNewBloodDonorInformation(){
        //This will insert the data entered in the form into the donor database.

        $page_data['name']              = html_escape($this->input->post('name'));
        $page_data['sex']               = html_escape($this->input->post('sex'));
        $page_data['age']               = html_escape($this->input->post('age'));
        $page_data['phone']             = html_escape($this->input->post('phone'));
        $page_data['address']           = html_escape($this->input->post('address'));
        $page_data['email']             = html_escape($this->input->post('email'));
        $page_data['blood_group']       = html_escape($this->input->post('blood_group'));
        $page_data['last_donation']     = html_escape($this->input->post('last_donation'));

        $this->db->insert('donor', $page_data); //Inserts into the database.
    }


    function updateBloodDonorInformation($param2){
        //This will insert the data entered in the form into the donor database.

        $page_data['name']              = html_escape($this->input->post('name'));
        $page_data['sex']               = html_escape($this->input->post('sex'));
        $page_data['age']               = html_escape($this->input->post('age'));
        $page_data['phone']             = html_escape($this->input->post('phone'));
        $page_data['address']           = html_escape($this->input->post('address'));
        $page_data['email']             = html_escape($this->input->post('email'));
        $page_data['blood_group']       = html_escape($this->input->post('blood_group'));
        $page_data['last_donation']     = html_escape($this->input->post('last_donation'));

        $this->db->where('donor_id', $param2); //Will delete based on the donor_id
        $this->db->update('donor', $page_data); //Updates the database.
    }

    function deleteBloodDonorInformation($param2){
        //This will delete the data entered in the form into the donor database.
        $this->db->where('donor_id', $param2); //Will delete based on the donor_id
        $this->db->delete('donor'); //Updates the database.
    }

   



}