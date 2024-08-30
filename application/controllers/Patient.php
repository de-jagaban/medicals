<?php if (!defined('BASEPATH'))exit('No direct script access allowed'); //This ensures the route is following the basepath


class Patient extends CI_Controller {

    function __construct() {
        parent::__construct();
		$this->load->database(); //This loads the database into the constructor
		$this->load->library('session'); //To track user activities
        $this->load->model('patient_model');
        $this->load->model('department_model');
        $this->load->model('payment_model');
        // Load required libraries, models, helpers, etc.
        $this->load->library('paystack_lib'); // the paystack library
        $this->load->helper('string'); // to generate random string

    }


    public function index() {
        if($this->session->userdata('patient_login') != 1) redirect(base_url(). 'login', 'refresh');
        if($this->session->userdata('patient_login') == 1) redirect(base_url(). 'patient/dashboard', 'refresh');
    }


    function dashboard() {
        if($this->session->userdata('patient_login') != 1) redirect(base_url(). 'login', 'refresh');
        $page_data['page_name']  = 'dashboard';
        $page_data['page_title'] =  get_phrase('patient Dashboard');
        $this->load->view('backend/index', $page_data);
    }


     //******** The function below update patient profile  *****************/
     function change_profile($param1 = null, $param2 = null, $param3 = null){
        if($param1 == 'update_info'){
            $this->patient_model->updatePatientInfoFunction();
            $this->session->set_flashdata('flash_message', get_phrase('Data Updated Successfully'));
            redirect(base_url() . 'patient/change_profile', 'refresh');
        }
        if($param1 == 'change_password'){
            $this->patient_model->changePasswordFunction();
            $this->session->set_flashdata('flash_message', get_phrase('Password Changed Successfully'));
            redirect(base_url() . 'patient/change_profile', 'refresh');
        }
        $page_data['page_name']  = 'change_profile';
        $page_data['page_title'] =  get_phrase('Change Profile');
        $this->load->view('backend/index', $page_data);
    }
    //******** Ends here *****************/




    function notification ($param1 = null, $param2 = null, $param3 = null){

       

        $page_data['page_name'] =   'notification';
        $page_data['page_title'] =   get_phrase('Add Event');
        $this->load->view('backend/index', $page_data);

    }


    function add_patient($param1 = null, $param2 = null, $param3 = null){
        if($param1 == 'create'){
            $this->patient_model->createNewPatientInformation();
            $this->session->set_flashdata('flash_message', get_phrase('Patient Added Successfully'));
            redirect(base_url() . 'patient/list_patient', 'refresh');
        }

        if($param1 == 'update'){
            $this->patient_model->updatePatientInformation($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data Updated Successfully'));
            redirect(base_url() . 'patient/list_patient', 'refresh');
        }

        if($param1 == 'delete'){
            $this->patient_model->deletePatientInformation($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Patient Deleted Successfully'));
            redirect(base_url() . 'patient/list_patient', 'refresh');
        }

        $page_data['page_name']     = 'add_patient'; //This loads the page name from the view controller.
        $page_data['page_title']    = get_phrase('Add Patient'); //This loads the page title

        $this->load->view('backend/index', $page_data);

    }

    function list_patient(){
        $page_data['page_name']     = 'list_patient'; //This loads the page name from the view controller.
        $page_data['page_title']    = get_phrase('List Patient'); //This loads the page title
        $this->load->view('backend/index', $page_data);
    }

    function edit_patient($patient_id){        

        $page_data['select_patient'] = $this->patient_model->get_patient_by_id($patient_id);
        $page_data['page_name']     = 'edit_patient'; //This loads the page name from the view controller.
        $page_data['page_title']    = get_phrase('Edit Patient'); //This loads the page title
        $this->load->view('backend/index', $page_data);

    }

    function update_patient($param1=null, $param2=null){

        if($param1 == 'update'){
            $this->patient_model->updatePatientInformation($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data Updated Successfully'));
            redirect(base_url() . 'patient/list_patient', 'refresh');
        }

    }

    function view_patient($patient_id){
        $page_data['select_patient'] = $this->patient_model->get_patient_by_id($patient_id);
        $page_data['page_name']     = 'view_patient'; //This loads the page name from the view controller.
        $page_data['page_title']    = get_phrase('View Patient'); //This loads the page title
        $this->load->view('backend/index', $page_data); 


    }

    function list_appointment (){
        $page_data['page_name'] =   'list_appointment';
        $page_data['page_title'] =   get_phrase('List Appointment');
        $this->load->view('backend/index', $page_data);
    }

    function invoice ($param1 = null, $param2 = null, $param3 = null){

        if($param1 == 'pay'){
            //This is the Paypal Payment integration function

            $invoce_id = $this->input->post('invoice_id');
            $paypal_email = $this->db->get_where('settings', array('type' => 'paypal_email'))->row();
            $invoice_details = $this->db->get_where('invoice', array('invoice_id' => $invoce_id))->row();
            $invoice_number = $this->db->get_where('invoice', array('invoice_id' => $invoce_id))->row()->invoice_number;

            $amount = $this->payment_model->calculate_invoice_total_amount($invoice_number);

            $this->paypal->add_field('rm','2');           // Return method = POST
            $this->paypal->add_field('no_note', 0);
            $this->paypal->add_field('item_name', $invoice_details->title);
            $this->paypal->add_field('amount', $amount);
            $this->paypal->add_field('custom', $invoice_details->invoice_id);
            $this->paypal->add_field('business', $paypal_email->description);
            $this->paypal->add_field('notify_url', base_url() . 'patient/invoice/paypal_ipn');
            $this->paypal->add_field('cancel_return', base_url() . 'patient/invoice/paypal_cancel');
            $this->paypal->add_field('return', base_url() . 'patient/invoice/paypal_success');

            $this->paypal->submit_paypal_post();
            // This submits the fields to paypal

        }

        if($param1 == 'paypal_ipn'){

            if ($this->paypal->validate_ipn() == true) {

                $ipn_response = "";
                foreach ($_POST as $key => $value) {

                    $value = urlencode(stripslashes($value));
                    $ipn_response .= "\n$key=$value";

                    $page_data['status'] = '2';
                    $invoce_id = $_POST['custom'];
                    //This updates the invoice table with the successful payment details

                    $this->db->where('invoice_id', $invoce_id);
                    $this->db->update('invoice', $page_data);

                    //This inserts into the payment table with the successful payment details
                    $page_data2['title'] = $this->db->get_where('invoice', array('invoice_id' => $invoce_id))->row()->title;
                    $page_data2['payment_type'] = 'income';
                    $page_data2['payment_method'] = '2';
                    $page_data2['amount'] = $amount;
                    $page_data2['description'] = $ipn_response;
                    $page_data2['timestamp'] = strtotime(date('Y-m-d'));
                    $this->db->insert('payment', $page_data2);


                }

                if($param1 == 'paypal_cancel'){
                    $this->session->set_flashdata('error_message', get_phrase('Payment cancelled'));
                    redirect(base_url() . 'payment/list_invoice', 'refresh');
                }

                if($param1 == 'paypal_success'){
                    $this->session->set_flashdata('flash_message', get_phrase('Payment successful'));
                    redirect(base_url() . 'payment/list_invoice', 'refresh');
                }

            }
        }

    }


    //This is the Paystack Payment Function
    public function invoice2()
    {
        //$select_invoice_by_id = $this->db->get_where('patient', array('patient_id' => $this->session->userdata('patient_id')))->result_array();
        //foreach($select_invoice_by_id as $key => $row):
        
        $invoce_id = $this->input->post('invoice_id');
        $invoice_details = $this->db->get_where('invoice', array('invoice_id' => $invoce_id))->row();
        $invoice_number = $this->db->get_where('invoice', array('invoice_id' => $invoce_id))->row()->invoice_number;
        $user_email = $this->db->get_where('invoice', array('invoice_id' => $invoce_id['patient_id']))->row()->email;

        $payment_amount = $this->payment_model->calculate_invoice_total_amount($invoice_number);

        // Payment reference. That is, if you do not want to use paystack's supplied reference.
        $payment_reference = random_string('md5');
        
        // Add fields to Paystack form
        //$this->paystack_lib->add_field('item_name', $invoice_details->title);
        $this->paystack_lib->add_field('email', $user_email); // user email (required)
        $this->paystack_lib->add_field('amount', $payment_amount*100); // amount (required)
        //$this->paystack_lib->add_field('custom', $invoice_details->invoice_id);
        //$this->paystack_lib->add_field('business', $paystack_email->description);

        $this->paystack_lib->add_field('callback_url', base_url('paystack-verify')); // callback (required for verifaction)
        $this->paystack_lib->add_field('reference', $payment_reference); // only if you do not want to use reference provided by paystack
        

        // Render Paystack form
        $this->paystack_lib->ps_auto_form();


        //endforeach;
    }

    /**  
     * Verify
     * 
     * Maps to the following URL
	 * 		http://example.com/paystack-verify
	 *	- or -
	 * 		http://example.com/index.php/paystack-verify
     * 
     * This method handles the verification of payments from 
     * the paystack api.
    */
    public function verify()
    {
        // Check if trxref or reference is passed in the url
        if ( $this->input->get('trxref') OR $this->input->get('reference') )
        {
            // Valid url, store reference in variable
            $reference = ($this->input->get('trxref')) ? $this->input->get('trxref') : $this->input->get('reference');

            // Callback paystack to get real transaction status
            $ps_api_response = $this->paystack_lib->verify_transaction($reference);

            /**  
             * Check API response
            */
            if (array_key_exists('data', $ps_api_response) && array_key_exists('status', $ps_api_response['data']) && ($ps_api_response['data']['status'] === 'success')) 
            {
                
                // Payment was successful

                // Redirect to success page

            } 
            else
            {
                // Payment was not successful

                // Redirect to error page
            } 
            
        }
        else 
        {
            // Redirect to dashboard or 404 (as you choose)
            redirect(base_url().'payment/list_invoice');
        }
    }
    

}