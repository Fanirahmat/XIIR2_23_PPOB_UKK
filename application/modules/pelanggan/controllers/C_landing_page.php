<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_landing_page extends CI_Controller {

	public function index()
	{
		$this->load->view('v_landing_page');
	}
	public function proses_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$cek = $this->db->get_where('pelanggan', ['username' => $username, 'password' => $password])->row_array();
		if ($cek) 
		{
			$data = [
				'username' => $cek['username'],
				'nama_pelanggan' => $cek['nama_pelanggan'],
				'id_level' => $cek['id_level'],
				'logged' => true
			];
			$this->session->set_userdata($data);
			$dt['status']=1;
			echo json_encode($dt);

		} 
		else 
		{
			$dt['status']=0;
			echo json_encode($dt);
		}
		
	}
	
	

}

/* End of file C_landing_page.php */
/* Location: ./application/modules/pelanggan/controllers/C_landing_page.php */