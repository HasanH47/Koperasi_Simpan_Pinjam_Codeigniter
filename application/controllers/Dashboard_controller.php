<?php defined('BASEPATH') or exit('No direct script access allowed');


class Dashboard_controller extends MY_Controller
{

	public function index()
	{
		$this->load->view('admin/dashboard');
	}
}

/* End of file Controllername.php */
