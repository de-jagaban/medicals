<?php if (!defined('BASEPATH'))exit('No direct script access allowed'); //This ensures the route is following the basepath

class Blood_model extends CI_Model {

    function __construct() {
        parent::__construct();

    }

    //This function selects the blood from the blood table in the database.
    function select_all_bloods(){
        $query = $this->db->get('blood');
            return $query->result_array();
    }
    /*ends here */


    function createNewBloodInformation(){
        //This will insert the data entered in the form into the blood database.

        $page_data['name']              = html_escape($this->input->post('name'));
        $page_data['quantity']               = html_escape($this->input->post('quantity'));
        $page_data['status']               = html_escape($this->input->post('status'));

        $this->db->insert('blood', $page_data); //Inserts into the database.
    }


    function updateBloodInformation($param2){
        //This will insert the data entered in the form into the blood database.
        $page_data['name']              = html_escape($this->input->post('name'));
        $page_data['quantity']               = html_escape($this->input->post('quantity'));
        $page_data['status']               = html_escape($this->input->post('status'));

        $this->db->where('blood_id', $param2); //Will delete based on the blood_id
        $this->db->update('blood', $page_data); //Updates the database.
    }

    function deleteBloodInformation($param2){
        //This will delete the data entered in the form into the blood database.
        $this->db->where('blood_id', $param2); //Will delete based on the blood_id
        $this->db->delete('blood'); //Updates the database.
    }

   



}