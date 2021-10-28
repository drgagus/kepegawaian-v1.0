<?php
class pegawai_model extends CI_model{

	
	public function getPegawai()
	{
		$this->db->order_by('nourut', 'ASC');
		return $this->db->get('pegawai')->result_array();
	}

	public function getPegawaiById($id)
	{
		
		$this->db->where('id', $id);
		return $this->db->get('pegawai')->row_array();
	}

	public function getFiles($pegawai_id)
	{
		$this->db->where('pegawai_id', $pegawai_id);
		return $this->db->get('bank_files')->result_array();
	}

	public function getFilesById($file_id,$pegawai_id)
	{
		$this->db->where('file_id', $file_id);
		$this->db->where('pegawai_id', $pegawai_id);
		return $this->db->get('bank_files')->row_array();
	}

	public function delFileById($file_id,$pegawai_id)
	{
		$this->db->where('file_id', $file_id);
		$this->db->where('pegawai_id', $pegawai_id);
		$this->db->delete('bank_files');
	}

	public function replaceJudulById($judul,$file_id)
	{
		$this->db->set('judul', $judul);
		$this->db->where('file_id', $file_id);
		$this->db->update('bank_files');
	}
	
	public function changePassword($user_id, $new_password)
	{
		$this->db->set('password',password_hash($new_password,PASSWORD_DEFAULT));
		$this->db->where('id',$user_id);
		$this->db->update('pegawai');
	}

	public function changeUsername($user_id, $new_username)
	{
		$this->db->set('username', $new_username);
		$this->db->where('id',$user_id);
		$this->db->update('pegawai');
	}



}




?>