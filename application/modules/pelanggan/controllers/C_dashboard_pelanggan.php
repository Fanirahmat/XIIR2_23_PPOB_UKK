<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard_pelanggan extends CI_Controller {

	public function index()
	{
		$this->load->view('v_dashboard_pelanggan');
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('pelanggan/C_landing_page','refresh');
	}

}

/* End of file C_dashboard_pelanggan.php */
/* Location: ./application/modules/pelanggan/controllers/C_dashboard_pelanggan.php */