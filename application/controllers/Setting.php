<?php if (!defined('BASEPATH'))exit('No direct script access allowed'); //This ensures the route is following the basepath


class Setting extends CI_Controller {

    function __construct() {
        parent::__construct();

		$this->load->database(); //This loads the database
		$this->load->library('session'); //To track user activities
        $this->load->model('setting_model');
        
    }

    function general_settings($param1 = null, $param2 = null, $param3 = null){

        if($param1 == 'update_setting'){
            $this->setting_model->updateSystemSettingFunction();
            $this->session->set_flashdata('flash_message', get_phrase('Settings Updated Successfully'));
            redirect(base_url(). 'setting/general_settings', 'refresh');

            
        }

        if($param1 == 'upload_logo'){
            $this->setting_model->uploadSystemLogoFunction();
            $this->session->set_flashdata('flash_message', get_phrase('Logo Uploaded Successfully'));
            redirect(base_url(). 'setting/general_settings', 'refresh');


        }

        if($param1 == 'update_theme'){
            $this->setting_model->updateSystemThemeFunction();
            $this->session->set_flashdata('flash_message', get_phrase('Theme Updated Successfully'));
            redirect(base_url(). 'setting/general_settings', 'refresh');


        }

        $page_data['page_name'] = 'general_settings';
        $page_data['page_title'] = get_phrase('General Settings');
        $this->load->view('backend/index', $page_data);
    }


    function manage_language($param1 = null, $param2 = null, $param3 = null){
        if($param1 == 'edit_phrase'){
            $page_data['edit_system_phrase'] = $param2;

        }
        if($param1 == 'language'){
            $this->setting_model->createNewLanguageColumn();
            $this->session->set_flashdata('flash_message', get_phrase('Data Saved Successfully'));
            redirect(base_url() . 'setting/manage_language', 'refresh');
        }

        if($param1 == 'phrase'){

            $this->setting_model->createNewPhraseForlanguage();
            $this->session->set_flashdata('flash_message', get_phrase('Phrase Created Successfully'));
            redirect(base_url() . 'setting/manage_language', 'refresh');

        }

        if($param1 == 'delete_language'){

            $this->setting_model->deleteSelectedlanguage($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Language Deleted Successfully'));
            redirect(base_url() . 'setting/manage_language', 'refresh');

        }

    $page_data['page_name'] =   'manage_language';
    $page_data['page_title'] =   get_phrase('Manage language');
    $this->load->view('backend/index', $page_data);
    }


    function updatePhraseWithAjax(){
        //This function auto updates the phrase into 
        //the database without having to refresh page

        $phrase_id['phrase_id'] = $this->input->post('phraseId');
        $update[$this->input->post('currentEditingLanguage')] = $this->input->post('updatedValue');
        $this->db->where('phrase_id', $phrase_id['phrase_id']);
        $this->db->update('language', $update);
        echo $phrase_id['phrase_id'].' '. $this->input->post('currentEditingLanguage').' '.$this->input->post('updatedValue');
    }


    function backup_database ($option="", $type=""){

        if($option == 'create_backup'){
            $this->setting_model->create_backup($type);
            $this->session->set_flashdata('flash_message', get_phrase('Database Backup Successfull'));
            redirect(base_url() . 'setting/backup_database', 'refresh');
        }

        if($option == 'delete_database'){
            $this->setting_model->delete_database($type);
            $this->session->set_flashdata('flash_message', get_phrase('Database Deleted Successfully'));
            redirect(base_url() . 'setting/backup_database', 'refresh');
        }


    $page_data['page_name'] =   'backup_database';
    $page_data['page_title'] =   get_phrase('backup_database');
    $this->load->view('backend/index', $page_data);
    }

    function about_system(){
        

    $page_data['page_name'] =   'about_system';
    $page_data['page_title'] =   get_phrase('about_system');
    $this->load->view('backend/index', $page_data);
    }

}