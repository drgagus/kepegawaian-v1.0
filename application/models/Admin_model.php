<?php
class admin_model extends CI_model{

	
	public function getPegawai()
	{
		$this->db->order_by('nourut', 'ASC');
		$this->db->where('id >', 3);
		return $this->db->get('pegawai')->result_array();
	}

	public function getPegawaiById($id)
	{
		
		$this->db->where('id', $id);
		return $this->db->get('pegawai')->row_array();
	}

	public function delPegawaiById($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('pegawai');
	}
	
	public function changePassword($position, $new_password)
	{
		$this->db->set('password',password_hash($new_password,PASSWORD_DEFAULT));
		$this->db->where('position',$position);
		$this->db->update('pegawai');
	}

	public function getFiles($pegawai_id)
	{
		$this->db->where('pegawai_id', $pegawai_id);
		return $this->db->get('bank_files')->result_array();
	}
	
	public function getGuest()
	{
		$this->db->where('id', 2);
		return $this->db->get('pegawai')->row_array();
	}
	
	public function getHakAksesGuest()
	{
		return $this->db->get('guest')->row_array();
	}

	public function getNama($id)
	{
		$this->db->select('nama');
		$this->db->where('id', $id);
		return $this->db->get('pegawai')->row_array();
	}

	public function open($id)
	{
		$this->db->set('portal', 1);
		$this->db->where('id',$id);
		$this->db->update('pegawai');
	}
	
	public function close($id)
	{
		$this->db->set('portal', 0);
		$this->db->where('id',$id);
		$this->db->update('pegawai');
	}

	public function show($id)
	{
		$this->db->set('guest', 1);
		$this->db->where('id',$id);
		$this->db->update('pegawai');
	}
	
	public function hide($id)
	{
		$this->db->set('guest', 0);
		$this->db->where('id',$id);
		$this->db->update('pegawai');
	}

	public function GuestPasswordExpired($guestpassword, $expired)
	{
		$this->db->set('password',password_hash($guestpassword,PASSWORD_DEFAULT));
		$this->db->set('expired', $expired);
		$this->db->where('id', 2);
		$this->db->update('pegawai');
	}
	
	public function GuestExpired($expired)
	{
		$this->db->set('expired', $expired);
		$this->db->where('id', 2);
		$this->db->update('pegawai');
	}
	
	public function resetAccount($id)
	{
		$this->db->set('password', '$2y$10$tOcsrWZiSrpoSE0lfSU1rOX2zSNjCXwNoc8ExXIRIJcD1VGigF.iy');
		$this->db->where('id', $id);
		$this->db->update('pegawai');
	}

	public function getPegawaiGuest()
	{
		$this->db->order_by('nourut', 'ASC');
		$this->db->where('id >', 3);
		$this->db->where('guest', 1);
		return $this->db->get('pegawai')->result_array();
	}
	
}




?>