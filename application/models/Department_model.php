<?php if (!defined('BASEPATH'))exit('No direct script access allowed'); //This ensures the route is following the basepath

class Department_model extends CI_Model {

    function __construct() {
        parent::__construct();

    }

    //This function selects the departments from the doctor table in the database.
    function select_all_departments(){
        $query = $this->db->get('department');
            return $query->result_array();
    }
    /*ends here */


    function createNewDepartmentInformation(){
        //This will insert the data entered in the form into the department database.

        $page_data['name'] = html_escape($this->input->post('name'));
        $page_data['description'] = html_escape($this->input->post('description'));

        $this->db->insert('department', $page_data); //Inserts into the database.
    }


    function updateDepartmentInformation($param2){
        //This will insert the data entered in the form into the department database.

        $page_data['name'] = html_escape($this->input->post('name'));
        $page_data['description'] = html_escape($this->input->post('description'));

        $this->db->where('department_id', $param2); //Will update based on the department_id
        $this->db->update('department', $page_data); //Updates the database.
    }

    function deleteDepartmentInformation($param2){
        //This will delete the data entered in the form into the department database.
        $this->db->where('department_id', $param2); //Will delete based on the department_id
        $this->db->delete('department'); //Updates the database.
    }

   



}