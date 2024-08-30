<?php if (!defined('BASEPATH'))exit('No direct script access allowed'); //This ensures the route is following the basepath

class Bed_model extends CI_Model {

    function __construct() {
        parent::__construct();

    }


    function insertIntoBedWardTable(){
        $page_data['name'] = html_escape($this->input->post('name'));
        $page_data['department_id'] = html_escape($this->input->post('department_id'));
        $page_data['description'] = html_escape($this->input->post('description'));

        $this->db->insert('bed_ward', $page_data); //Inserts into the database


    }


    function updateBedWardInfo($param2){
        $page_data['name'] = html_escape($this->input->post('name'));
        $page_data['department_id'] = html_escape($this->input->post('department_id'));
        $page_data['description'] = html_escape($this->input->post('description'));

        $this->db->where('bed_ward_id', $param2); //Will update based on the ward_id
        $this->db->update('bed_ward', $page_data); //Inserts into the databas
        
    }

    function deleteFromBedWardTable($param2){
    
        $this->db->where('bed_ward_id', $param2); //Will update based on the ward_id
        $this->db->delete('bed_ward'); //Inserts into the database        
    }
 
    function select_all_bed_wards(){
        $query = $this->db->get('bed_ward')->result_array();
        return $query;

    }

    function selectBedWardWithID($id){
        $query = $this->db->get_where('bed_ward', array('id'=> $id))->result_array();
        return $query;


    }

    function insertIntoBedTable (){
        
        $bed_data['name'] = html_escape($this->input->post('name'));
        $bed_data['bed_size'] = html_escape($this->input->post('bed_size'));
        $bed_data['bed_price'] = html_escape($this->input->post('bed_price'));
        $bed_data['bed_ward_id'] = html_escape($this->input->post('bed_ward_id'));
        $bed_data['department_id'] = html_escape($this->input->post('department_id'));
        $bed_data['status'] = html_escape($this->input->post('status'));
        $bed_data['description'] = html_escape($this->input->post('description'));

        $this->db->insert('bed', $bed_data);

    }

    function updateBedInfo ($param2){

        $bed_data['name'] = html_escape($this->input->post('name'));
        $bed_data['bed_size'] = html_escape($this->input->post('bed_size'));
        $bed_data['bed_price'] = html_escape($this->input->post('bed_price'));
        $bed_data['bed_ward_id'] = html_escape($this->input->post('bed_ward_id'));
        $bed_data['department_id'] = html_escape($this->input->post('department_id'));
        $bed_data['status'] = html_escape($this->input->post('status'));
        $bed_data['description'] = html_escape($this->input->post('description'));

        $this->db->where('bed_id', $param2);
        $this->db->update('bed', $bed_data);

    }


    function DeleteFromBedTable ($param2){

        $this->db->where('bed_id', $param2);
        $this->db->delete('bed');

    }

    function select_all_beds (){
        $sql = $this->db->get('bed')->result_array();
        return $sql;
    }


    function select_bed_by_id($bed_id){
        $sql = $this->db->get_where('bed', array('bed_id'=> $bed_id))->result_array();
        return $sql;

    }

    function insertIntoAssignBedTable(){

        $page_data['patient_id'] = html_escape($this->input->post('patient_id'));
        $page_data['bed_id'] = html_escape($this->input->post('bed_id'));
        $page_data['department_id'] = html_escape($this->input->post('department_id'));
        $page_data['status'] = html_escape($this->input->post('status'));
        $page_data['assign_date'] = strtotime($this->input->post('assign_date'));
        $page_data['discharge_date'] = strtotime($this->input->post('discharge_date'));
        $page_data['description'] = html_escape($this->input->post('description'));

        $this->db->insert('assign_bed', $page_data);
    }


    function updateAssignBedTable($param2){

        $page_data['patient_id'] = html_escape($this->input->post('patient_id'));
        $page_data['bed_id'] = html_escape($this->input->post('bed_id'));
        $page_data['department_id'] = html_escape($this->input->post('department_id'));
        $page_data['status'] = html_escape($this->input->post('status'));
        $page_data['assign_date'] = strtotime($this->input->post('assign_date'));
        $page_data['discharge_date'] = strtotime($this->input->post('discharge_date'));
        $page_data['description'] = html_escape($this->input->post('description'));

        $this->db->where('assign_bed_id', $param2);
        $this->db->update('assign_bed', $page_data);


    }
 
    function deleteAssignBedInformation($param2){

        $this->db->where('assign_bed_id', $param2);
        $this->db->delete('assign_bed');
    }

    function select_from_assign_bed (){
        $sql = $this->db->get('assign_bed')->result_array();
        return $sql;
    }

   
    
     

   




}