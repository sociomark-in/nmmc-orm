<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Send_mail_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        $this->load->helper('email');
        try {
            if ($this->session->userdata('authenticate')) {
                $this->userdata = $this->getUserData();
            }
        } catch (Exception $ex) {
            print($ex);
        }
    }

    public function email_config()
    {

        $email_config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp-relay.sendinblue.com',
            'smtp_port' => 587,
            'smtp_crypto' => 'tls',
            'smtp_user' => 'business@sociomark.in', //'info@ayushakti.in', // change it to yours
            'smtp_pass' => 'Socio@0610', //'ayu.shakti@123', // change it to yours
            'charset' => 'iso-8859-1',
            'mailtype' => 'html',
            'wordwrap' => TRUE
        );

        $this->load->library('email', $email_config);

        $this->email->set_header('MIME-Version', '1.0' . PHP_EOL);
        $this->email->set_header('Content-type', 'text/html; charset=ISO-8859-1' . PHP_EOL);
    }

    // <=============== HALF DAYS END ====================>

    public function send_otp_mail()
    {
        $this->email_config();

        $this->email->set_newline("\r\n");
        $str_result = '0123456789';
        $str_result = substr(str_shuffle($str_result), 0, 5);

        $otp_data = array(
            'date' => date('Y-m-d h:i:s'),
            'otp' => $str_result
        );
        $this->session->set_userdata('otp', $otp_data);

        $mailData = array(
            'name' => $this->userdata['first_name'] . " " . $this->userdata["last_name"],
            'otp' => $str_result,
            'user_id' => $this->userdata['id']
        );
        $email = $this->userdata['email'];

        $message = $this->load->view('Emails/send_otp_for_verification', $mailData, TRUE);

        $this->email->from('business@sociomark.in', 'Sociomark');
        $this->email->to($email);

        //		$this->email->cc('developer@sociomark.in');
        $this->email->subject("OTP for reset password verification! Apogee digitech pvt. ltd.");
        $this->email->message($message);
        $this->email->reply_to('business@sociomark.in');

        if ($this->email->send()) {
            return true;
        } else {
            return false;
        }
    }
}
