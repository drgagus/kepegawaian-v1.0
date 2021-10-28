<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('auth_model');
	}

	public function index()
	{
        if ($this->session->userdata('posisi') == 'admin')
        {
			redirect('admin');
        }
        elseif ($this->session->userdata('posisi') == 'pegawai')
        {
			redirect('pegawai');
        }
        elseif ($this->session->userdata('posisi') == 'guest')
        {
			redirect('guest');
        }
        else{

            $this->form_validation->set_rules('username', 'Username', 'required|trim',[
                'required'=>'Username belum diisi'
                ]);
            $this->form_validation->set_rules('password', 'Password', 'required|trim', [
                'required'=>'Password belum diisi'
                ]);

            if ($this->form_validation->run() == false){
                
                $data['title'] = "Login";
                $this->load->view('auth/login',$data);
            }else{
                        $username = $this->input->post('username');
                        $password = $this->input->post('password');
                        $user = $this->db->get_where('pegawai',['username'=> $username])->row_array();
                        if($user){
                                if (password_verify($password, $user['password'])){
                                    $data = [
                                            'user_id' => $user['id'],
                                            'posisi' => $user['position']
                                    ];
                                    $this->session->set_userdata($data);
                                    $this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Anda Telah Berhasil Login.</div>');
                                    if ($this->session->userdata('posisi') == 'admin')
                                    {
                                        redirect('admin');
                                    }
                                    elseif ($this->session->userdata('posisi') == 'pegawai')
                                    {
                                        redirect('pegawai');
                                    }
                                    else
                                    {
                                        redirect('auth');
                                    }
                                    
                                }else{
                                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password yang dimasukkan salah</div>');
                                    redirect('auth');
                                }

                        }else{
                            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username yang dimasukkan salah</div>');
                            redirect('auth');
                        }
                }
		}
		
	}

	public function logout()
	{
		if ($this->session->userdata('posisi')){
			$this->session->unset_userdata('posisi');
			$this->session->unset_userdata('user_id');
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Anda Telah Berhasil Keluar</div>');
			redirect('auth');	
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Anda Harus Login Dahulu</div>');
			redirect('auth');
		}
	}

	public function password()
	{
		if (!($this->session->userdata('posisi'))){
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Anda Harus Login Dahulu</div>');
			redirect('auth');
		}else{
			$data['title'] = 'Pegawai Puskesmas';
			$data['user']= $this->db->get_where('pegawai', ['id'=>$this->session->userdata('user_id')])->row_array();

			$this->form_validation->set_rules('old_password', 'old_password', 'required|trim',[
				'required'=>'Password lama harus diisi'
			]);
			$this->form_validation->set_rules('new_password1', 'new_password1', 'required|trim|min_length[3]|matches[new_password2]', [
				'required'=>'Password baru harus diisi',
				'min_length' => 'Password terlalu pendek',
				'matches' => 'Password baru tidak sama'
				]);
			$this->form_validation->set_rules('new_password2', 'new_password2', 'required|trim|matches[new_password1]',[
				'required'=>'Password baru harus diisi',
				'matches' => 'Password baru tidak sama'
			]);


			if ($this->form_validation->run()==false){
				$this->load->view('templates/header', $data);
				$this->load->view('auth/password', $data);
				$this->load->view('templates/footer',$data);
			}else{
				$current_password = $data['user']['password'];
				$old_password = $this->input->post('old_password');
				$new_password = $this->input->post('new_password1');
					if (!password_verify($old_password,$current_password)){
						$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Lama Salah!</div>');
						redirect('auth/password');
					}else{
								if (password_verify($new_password,$current_password)){
								$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Baru Tidak Boleh Sama Dengan Password Lama!</div>');
								redirect('auth/password');
								}else{
									$this->auth_model->changePassword($data['user']['id'],$new_password);
									$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Password Berhasil Diubah</div>');
								redirect('auth/password');

								}
					}

			}
		}
		
	}


	public function username()
	{
		if ($this->session->userdata('posisi') != 'admin'){
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Anda Harus Login Dahulu</div>');
			redirect('auth');
        }elseif ($this->session->userdata('posisi') != 'pegawai'){
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Anda Harus Login Dahulu</div>');
			redirect('auth');
		}else{
			$data['title'] = 'Pegawai Puskesmas';
			$data['user']= $this->db->get_where('pegawai', ['id'=>$this->session->userdata('user_id')])->row_array();
			

			$this->form_validation->set_rules('old_username', 'old_username', 'required|trim',[
				'required'=>'Username lama harus diisi'
			]);
			$this->form_validation->set_rules('new_username', 'new_username', 'required|trim|min_length[3]|is_unique[pegawai.username]', [
				'required'=>'Username baru harus diisi',
				'min_length' => 'Username terlalu pendek',
				'is_unique' => 'Username baru sudah ada yang menggunakan'
				]);
			
				if ($this->form_validation->run()==false){
					$this->load->view('templates/header_user', $data);
					$this->load->view('user/username', $data);
					$this->load->view('templates/footer',$data);
				}else{
					$old_username = $this->input->post('old_username');
					$new_username = $this->input->post('new_username');

						if ($data['user']['username'] == $old_username){
							$this->auth_model->changeUsername($data['user']['id'],$new_username);
							$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Username Berhasil Diubah</div>');
							redirect('auth/username');
						}else{
							$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username Lama Salah!</div>');
							redirect('auth/username');
						}
				}
		}
		
	}

}
?>