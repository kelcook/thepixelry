<?php if (! defined('BASEPATH')) exit('No direct script access');

class Email_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Function send
     *
     * sends email
     *
     * @param (str) ($mail_from_email) from: email address
     * @param (str) ($mail_from_name) from: name
     * @param (str) ($mail_to) to: email address
     * @param (str) ($mail_subject) subject of email
     * @param (str) ($mail_message) message to be sent
     *
     * @return (bool)
     */
    public function send($mail_from_email = '', $mail_from_name = '', $mail_to = '', $mail_bcc = '', $mail_subject = '', $mail_message = '')
    {
		if (ENVIRONMENT == 'local')
		{
			// email config
			$this->email->initialize(array(
				'mailtype'  => 'html',
				'protocol'  => 'mail',
				'crlf'      => "\r\n",
				'newline'   => "\r\n"
			));
		}
		else
		{
			// email config
			$this->email->initialize(array(
				'mailtype'  => 'html',
				'charset'   => 'utf-8',
				'protocol'  => 'sendmail',
				'mailpath'  => '/usr/sbin/sendmail',
				'crlf'      => "\r\n",
				'newline'   => "\r\n"
			));
		}

        // send email
        $this->email->from($mail_from_email, $mail_from_name);
        $this->email->to($mail_to);
        $this->email->bcc($mail_bcc);
        $this->email->subject($mail_subject);
        $this->email->message($mail_message);
        $this->email->send();
    }
}