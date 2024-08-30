<?php
// Junks out codes that might be useful

//hidden-xs hidden-sm ==> from page_info.php button style
//class="fa fa-cog fa-spin fa-3x fa-fw"

//<i class="fa-solid fa-money-check-dollar-pen"></i>


 //This updates the invoice table with the successful payment details

 $this->db->where('invoice_id', $invoce_id);
 $this->db->update('invoice', $page_data);
 //This inserts into the payment table with the successful payment details
 $page_data2['title'] = $this->db->get_where('invoice', array('invoice_id' => $invoce_id))->row()->title;
 $page_data2['payment_type'] = 'income';
 $page_data2['payment_method'] = '2';
 $page_data2['amount'] = $payment_amount;
 $page_data2['timestamp'] = strtotime(date('Y-m-d'));
 $this->db->insert('payment', $page_data2);



 $select_invoice_by_id = $this->db->get_where('patient', array('patient_id' => $this->session->userdata('patient_id')))->result_array();
        foreach($select_invoice_by_id as $key => $row):





            //public function invoice2($param1 = null, $param2 = null, $param3 = null)
            {
                if($param1 == 'pay'){
                $select_invoice_by_id = $this->db->get_where('patient', array('patient_id' => $this->session->userdata('patient_id')))->result_array();
                foreach($select_invoice_by_id as $key => $row):
                
                $invoce_id = $this->input->post('invoice_id');
                $paystack_email = $this->db->get_where('settings', array('type' => 'paystack_email'))->row();
                $invoice_details = $this->db->get_where('invoice', array('invoice_id' => $invoce_id))->row();
                $invoice_number = $this->db->get_where('invoice', array('invoice_id' => $invoce_id))->row()->invoice_number;
                $user_email = $this->db->get_where('patient', array('patient_id' => $row['patient_id']))->row()->email;
        
                $payment_amount = $this->payment_model->calculate_invoice_total_amount($invoice_number);
                
                
                // Payment amount (to be multiplied by 100)
                //$payment_amount = 500 * 100;
        
                // User email. Ideally, this will be fetched dynamically
                //$user_email = "sammyskills@gmail.com";
                
                // Payment reference. That is, if you do not want to use paystack's supplied reference.
                $payment_reference = random_string('md5');
                
                // Add fields to Paystack form
                $this->paystack_lib->add_field('item_name', $invoice_details->title);
                $this->paystack_lib->add_field('email', $user_email); // user email (required)
                $this->paystack_lib->add_field('amount', $payment_amount)*100; // amount (required)
                $this->paystack_lib->add_field('custom', $invoice_details->invoice_id);
                $this->paystack_lib->add_field('business', $paystack_email->description);
        
                $this->paystack_lib->add_field('callback_url', base_url('paystack_verify')); // callback (required for verifaction)
                $this->paystack_lib->add_field('reference', $payment_reference); // only if you do not want to use reference provided by paystack
                
        
                // Render Paystack form
                $this->paystack_lib->ps_auto_form();
        
        
                endforeach;
            }}
        
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



        $this->test_secret_key = $this->CI->db->get_where('settings', array('type' => 'test_secret_key'))->row()->description;
        $this->test_public_key = $this->CI->db->get_where('settings', array('type' => 'test_public_key'))->row()->description;
        $this->live_secret_key = $this->CI->db->get_where('settings', array('type' => 'live_secret_key'))->row()->description;
        $this->live_public_key = $this->CI->db->get_where('settings', array('type' => 'live_public_key'))->row()->description;
        $this->api_mode = $this->CI->db->get_where('settings', array('type' => 'api_mode'))->row()->description;

?>

