<?php if (!defined('BASEPATH'))exit('No direct script access allowed'); //This ensures the route is following the basepath

class Schedule_model extends CI_Model {

    function __construct() {
        parent::__construct();

    }


    function insertIntoScheduleTable(){
        $page_data['department_id']          = html_escape($this->input->post('department_id'));
        $page_data['doctor_id']              = html_escape($this->input->post('doctor_id'));
        $page_data['avail_day']              = strtotime($this->input->post('avail_day'));
        $page_data['start_time']             = html_escape($this->input->post('start_time'));
        $page_data['end_time']               = html_escape($this->input->post('end_time'));
        $page_data['per_patient_time']       = html_escape($this->input->post('per_patient_time'));        
        $page_data['status']                 = html_escape($this->input->post('status'));    
        
        $this->db->insert('schedule', $page_data);



    }

    function updateScheduleTable($param2){
        $page_data['department_id']          = html_escape($this->input->post('department_id'));
        $page_data['doctor_id']              = html_escape($this->input->post('doctor_id'));
        $page_data['avail_day']              = strtotime($this->input->post('avail_day'));
        $page_data['start_time']             = html_escape($this->input->post('start_time'));
        $page_data['end_time']               = html_escape($this->input->post('end_time'));
        $page_data['per_patient_time']       = html_escape($this->input->post('per_patient_time'));        
        $page_data['status']                 = html_escape($this->input->post('status'));    
        
        $this->db->where('schedule_id', $param2);
        $this->db->update('schedule', $page_data);

    }

    function deleteScheduleTable($param2){
        $this->db->where('schedule_id', $param2);
        $this->db->delete('schedule');

        
    }

    function select_schedule(){
        $query = $this->db->get('schedule')->result_array();
        return $query;
    }

    function get_schedule_by_id($schedule_id){
        $query = $this->db->get_where('schedule', array('schedule_id' => $schedule_id))->result_array();
        return $query;
    }
}