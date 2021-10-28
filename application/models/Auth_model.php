<?php
class auth_model extends CI_model{
	
	public function changePassword($user_id, $new_password)
	{
		$this->db->set('password',password_hash($new_password,PASSWORD_DEFAULT));
		$this->db->where('id', $user_id);
		$this->db->update('pegawai');
	}

    public function changeUsername($user_id, $new_username)
	{
		$this->db->set('username', $new_username);
		$this->db->where('id', $user_id);
		$this->db->update('pegawai');
	}

	
}




?>