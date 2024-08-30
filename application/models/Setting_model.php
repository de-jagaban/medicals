<?php if (!defined('BASEPATH'))exit('No direct script access allowed'); //This ensures the route is following the basepath

class Setting_model extends CI_Model {

    function __construct() {
        parent::__construct();

    }


    function updateSystemSettingFunction(){
        //This function updates the System settings table in the database.
        //It both SELECTS and UPDATES the form from the table 'settings' and changes the 'descrption Column 

        $setting['description']      = $this->input->post('system_name');
        $this->db->where('type', 'system_name');
        $this->db->update('settings', $setting);

        $setting['description']     = $this->input->post('system_title');
        $this->db->where('type', 'system_title');
        $this->db->update('settings', $setting);

        $setting['description']          = $this->input->post('address');
        $this->db->where('type', 'address');
        $this->db->update('settings', $setting);

        $setting['description']        = $this->input->post('phone');
        $this->db->where('type', 'phone');
        $this->db->update('settings', $setting);

        $setting['description']        = $this->input->post('website_url');
        $this->db->where('type', 'website_url');
        $this->db->update('settings', $setting);

        $setting['description']       = $this->input->post('currency');
        $this->db->where('type', 'currency');
        $this->db->update('settings', $setting);

        $setting['description']     = $this->input->post('system_email');
        $this->db->where('type', 'system_email');
        $this->db->update('settings', $setting);

        $setting['description']       = $this->input->post('language');
        $this->db->where('type', 'language');
        $this->db->update('settings', $setting);


        $setting['description']      = $this->input->post('text_align');
        $this->db->where('type', 'text_align');
        $this->db->update('settings', $setting);

        $setting['description']     = $this->input->post('footer');
        $this->db->where('type', 'footer');
        $this->db->update('settings', $setting);

        $setting['description']     = $this->input->post('paypal_email');
        $this->db->where('type', 'paypal_email');
        $this->db->update('settings', $setting);

        $setting['description']     = $this->input->post('paystack_email');
        $this->db->where('type', 'paystack_email');
        $this->db->update('settings', $setting);

        $setting['description']     = ($this->input->post('test_secret_key'));
        $this->db->where('type', 'test_secret_key');
        $this->db->update('settings', $setting);

        $setting['description']     = $this->input->post('test_public_key');
        $this->db->where('type', 'test_public_key');
        $this->db->update('settings', $setting);

        $setting['description']     = ($this->input->post('live_secret_key'));
        $this->db->where('type', 'live_secret_key');
        $this->db->update('settings', $setting);

        $setting['description']     = $this->input->post('live_public_key');
        $this->db->where('type', 'live_public_key');
        $this->db->update('settings', $setting);

        $setting['description']     = $this->input->post('api_mode');
        $this->db->where('type', 'api_mode');
        $this->db->update('settings', $setting);

        $setting['description']     = $this->input->post('abbr');
        $this->db->where('type', 'abbr');
        $this->db->update('settings', $setting);



    }

   function uploadSystemLogoFunction(){
       //Upload logo to post logo to directory folder
        move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/logo.png');

   }

   function updateSystemThemeFunction(){

    $theme['description']     = $this->input->post('skin_colour');
    $this->db->where('type', 'skin_colour');
    $this->db->update('settings', $theme);


   }

   function createNewLanguageColumn(){
    //This function controls the System Language

    $language = $this->input->post('language');
    $this->load->dbforge();
    $fields = array($language => array('type' => 'LONGTEXT'));
    $this->dbforge->add_column('language', $fields);

    $page_data2['name'] = $language;
    $this->db->insert('language_list', $page_data2);
}

function createNewPhraseForlanguage(){
    $page_data['phrase'] = $this->input->post('phrase');
    $this->db->insert('language', $page_data);
}

function deleteSelectedlanguage($param2){

    $language = $param2;
    $this->load->dbforge();
    $this->dbforge->drop_column('language', $language);
}

// This is the database backup creation function
function create_backup ($type){

    $this->load->dbutil();
    $options = array(
            'format'      => 'txt',             // gzip, zip, txt
            'add_drop'    => TRUE,              // Whether to add DROP TABLE statements to backup file
            'add_insert'  => TRUE,              // Whether to add INSERT data to backup file
            'newline'     => "\n"               // Newline character used in backup file
          );
    if($type == 'all'){
        $tables = array('');
        $file_name	=	'database_backup';
    }

    else {
        $tables = array('tables'	=>	array($type));
        $file_name	=	'backup_'.$type;
    }
    $backup =& $this->dbutil->backup(array_merge($options , $tables)); 
    $this->load->helper('download');
    force_download($file_name.'.sql', $backup);
}

//This function deletes a selected database table or deletes all the specified db
function delete_database ($type){

    if($type == 'all'){

        $this->db->truncate('admin');
        $this->db->truncate('doctor');
        $this->db->truncate('nurse');
        $this->db->truncate('donor');
    }
    else{	
    $this->db->truncate($type);
    }

}


}