<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_data_pelanggan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_data_pelanggan','mdp');
	}
	public function index()
	{
		$data['konten']="v_data_pelanggan";
		$data['data_pel']=$this->mdp->get_pelanggan();
		$this->load->view('Template',$data);
	}
	public function hapus_pel($id_pelanggan)
	{
		$this->mdp->hapus_pel($id_pelanggan);
		redirect('admin/C_data_pelanggan/index','refresh');
	}

}

/* End of file C_data_pelanggan.php */
/* Location: ./application/modules/admin/controllers/C_data_pelanggan.php */