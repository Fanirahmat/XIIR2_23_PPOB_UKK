<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_pelanggan extends CI_Model {

	Public function get_pelanggan()
	{
		return $this->db->get('pelanggan')->result();
	}
	Public function hapus_pel($id_pelanggan)
	{
		return $this->db->where('id_pelanggan', $id_pelanggan)->delete('pelanggan');
	}

}

/* End of file M_data_pelanggan.php */
/* Location: ./application/modules/admin/models/M_data_pelanggan.php */