<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function sandysuy()
	{
		$this->session->unset_userdata('level');
    $this->session->sess_destroy();
    redirect('pasundan');
	}
}
