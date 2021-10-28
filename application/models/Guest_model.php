<?php
class guest_model extends CI_model{

	
	public function getPegawai()
	{
		$this->db->order_by('nourut', 'ASC');
		$this->db->where('id >', 3);
		$this->db->where('guest', 1);
		return $this->db->get('pegawai')->result_array();
	}

	public function getHakAksesGuest()
	{
		return $this->db->get('guest')->row_array();
	}

	
}




?>