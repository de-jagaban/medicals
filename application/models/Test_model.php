<?php if (!defined('BASEPATH'))exit('No direct script access allowed'); //This ensures the route is following the basepath

class Test_model extends CI_Model {

    function __construct() {
        parent::__construct();

    }

    function select_test(){
        //This selects the tests from the database as an array and display that in the list_test function
        $query = $this->db->get('test')->result_array();
        return $query;
    }


    function get_test_by_id($test_id){
        $query = $this->db->get_where('test', array('test_id' => $test_id))->result_array();
        return $query;

    }



    function insertIntoTestTable(){

        $page_data['test_code'] = $this->input->post('test_code');
        $page_data['name'] = $this->input->post('name');
        $page_data['department_id'] = $this->input->post('department_id');
        $page_data['patient_id'] = $this->input->post('patient_id');
        $page_data['doctor_id'] = $this->input->post('doctor_id');
        $page_data['weight'] = $this->input->post('weight');
        $page_data['height'] = $this->input->post('height');
        $page_data['age'] = $this->input->post('age');
        $page_data['blood_pressure'] = $this->input->post('blood_pressure');
        $page_data['case_history'] = $this->input->post('case_history');
        $page_data['test_type'] = $this->input->post('test_type');
        $page_data['date_created'] = strtotime(date('Y-m-d'));
        
        $test_entries = array();
        $diagnose = $this->input->post('entry_diagnose');
        $medicine_name = $this->input->post('entry_medicine_name');
        $medicine_type = $this->input->post('entry_medicine_type');
        $usage_test = $this->input->post('entry_test');
        $usage_days = $this->input->post('entry_days');
        $number_of_entries          = sizeof($diagnose);

        for ($i = 0; $i < $number_of_entries; $i++){

            if($diagnose[$i] != "" && $medicine_name[$i] != "" && $medicine_type[$i] != "" && $usage_test[$i] != "" && $usage_days[$i] != ""){
                $new_entry = array('diagnose' => $diagnose[$i], 'medicine_name' => $medicine_name[$i], 'medicine_type' => $medicine_type[$i], 'usage_test' => $usage_test[$i], 'usage_days' => $usage_days[$i]);
                array_push($test_entries, $new_entry);
            }
        
        }

        $page_data['test_entries'] = json_encode($test_entries);

        $this->db->insert('test', $page_data);

        


        
    }

        function updateTestTable($param2){

        $page_data['name'] = $this->input->post('name');
        $page_data['department_id'] = $this->input->post('department_id');
        $page_data['patient_id'] = $this->input->post('patient_id');
        $page_data['doctor_id'] = $this->input->post('doctor_id');
        $page_data['weight'] = $this->input->post('weight');
        $page_data['height'] = $this->input->post('height');
        $page_data['age'] = $this->input->post('visiting_fee');
        $page_data['blood_pressure'] = $this->input->post('blood_pressure');
        $page_data['case_history'] = $this->input->post('case_history');
        $page_data['test_type'] = $this->input->post('test_type');
        $page_data['date_created'] = strtotime(date('Y-m-d'));
        
        //This controls the test entries and stores the values into test_entries table in the database.
        $test_entries = array();
        $diagnose = $this->input->post('entry_diagnose');
        $medicine_name = $this->input->post('entry_medicine_name');
        $medicine_type = $this->input->post('entry_medicine_type');
        $usage_test = $this->input->post('entry_test');
        $usage_days = $this->input->post('entry_days');
        $number_of_entries          = sizeof($diagnose);

        //This iteration counts the number entries to be stored.
        for ($i = 0; $i < $number_of_entries; $i++){

            if($diagnose[$i] != "" && $medicine_name[$i] != "" && $medicine_type[$i] != "" && $usage_test[$i] != "" && $usage_days[$i] != ""){
                $new_entry = array('diagnose' => $diagnose[$i], 'medicine_name' => $medicine_name[$i], 'medicine_type' => $medicine_type[$i], 'usage_test' => $usage_test[$i], 'usage_days' => $usage_days[$i]);
                array_push($test_entries, $new_entry);
            }
        
        }

        $page_data['test_entries'] = json_encode($test_entries); //The json_encode encrypts the entries

        $this->db->where('test_id', $param2);
        $this->db->update('test', $page_data);
    

        }

        function deleteFromTestTable($param2){
            //This will delete the data entered in the form into the department database.
            $this->db->where('test_id', $param2); //Will delete based on the department_id
            $this->db->delete('test'); //Updates the database.
        }


        function select_test_by_id($test_id){
            return $this->db->get_where('test', array('test_id' => $test_id))->result_array();
        }

}