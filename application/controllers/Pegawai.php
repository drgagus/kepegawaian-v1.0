<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('pegawai_model');
	}
	
	public function index()
	{
		if ($this->session->userdata('posisi') != 'pegawai'){
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Anda Harus Login Dahulu</div>');
			redirect('auth');
		}else{
				$data['title'] = "Pegawai Puskesmas";
				$data['user']= $this->db->get_where('pegawai', ['id'=>$this->session->userdata('user_id')])->row_array();
				$data['files']=$this->pegawai_model->getFiles($data['user']['id']);


				$this->form_validation->set_rules('judulfile', 'Judulfile', 'required|trim',[
					'required'=>'Judul file harus diisi'
					]);

				if ($this->form_validation->run()==false){
				$this->load->view('templates/header_pegawai',$data);
				$this->load->view('pegawai/index',$data);
				$this->load->view('templates/footer',$data);
				}else{

					$upload_file = $_FILES['berkas']['name'];

					if ($upload_file){
						$config['upload_path'] = './assets/files/';
						$config['allowed_types'] = 'docx|xlsx|pdf|jpg|png';
						$config['max_size']     = '4096';

						$this->load->library('upload', $config);

						if ($this->upload->do_upload('berkas'))
		                {
		                	
							$data=[
									'pegawai_id'=> $data['user']['id'],
									'judul'=> $this->input->post('judulfile'),
									'file'=> $this->upload->data('file_name')
							];
							
							$this->db->insert('bank_files', $data);
							$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">File Berhasil di input</div>');
							redirect('pegawai');
		                }
		                else
		                {
		                   echo $this->upload->display_errors();
		                }
		            }else{
		            	$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">File belum di pilih</div>');
						redirect('pegawai');
		            }


					
				}
		}
		
	}


	public function edit_file($file_id)
	{
		if ($this->session->userdata('posisi') != 'pegawai'){
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Anda Harus Login Dahulu</div>');
			redirect('pegawai/login');
		}else{
				$data['title'] = "Pegawai Puskesmas";
				$data['user']= $this->db->get_where('pegawai', ['id'=>$this->session->userdata('user_id')])->row_array();
				$data['files']=$this->pegawai_model->getFiles($data['user']['id']);
				$data['filebyid']=$this->pegawai_model->getFilesById($file_id,$data['user']['id']);


				$this->form_validation->set_rules('judulfile', 'Judulfile', 'required|trim',[
					'required'=>'Judul file harus diisi'
					]);

				if ($this->form_validation->run()==false){
				$this->load->view('templates/header_pegawai',$data);
				$this->load->view('pegawai/edit',$data);
				$this->load->view('templates/footer',$data);
				}else{

					$upload_file = $_FILES['berkas']['name'];

					if ($upload_file){
						$config['upload_path'] = './assets/files/';
						$config['allowed_types'] = 'docx|xlsx|pdf|jpg|png';
						$config['max_size']     = '4096';

						$this->load->library('upload', $config);

						if ($this->upload->do_upload('berkas'))
		                {
		                	$old_file = $data['filebyid']['file'];
                			unlink (FCPATH.'assets/files/'.$old_file);
                	

		                	$pegawai_id = $data['user']['id'];
							$data=[
									'judul'=> $this->input->post('judulfile'),
									'file'=> $this->upload->data('file_name')
							];
							
							$this->db->where('pegawai_id', $pegawai_id);
							$this->db->update('bank_files', $data);
							$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">File berhasil diedit.</div>');
							redirect('pegawai');
		                }
		                else
		                {
		                   echo $this->upload->display_errors();
		                }
		            }else{
		            	$pegawai_id = $data['user']['id'];
		            	$file_id = $data['filebyid']['file_id'];
		            	$judul=$this->input->post('judulfile');
		            	$this->pegawai_model->replaceJudulById($judul,$file_id);
		            	$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Judul File Berhasil Diubah</div>');
						redirect('pegawai');
		            }


					
				}
		}
		
	}

	
	public function delete_file($file_id)
	{
		if ($this->session->userdata('posisi') != 'pegawai'){
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Anda Harus Login Dahulu</div>');
			redirect('pegawai/login');
		}else{
			$data['user']= $this->db->get_where('pegawai', ['id'=>$this->session->userdata('user_id')])->row_array();
			$data['filebyid']=$this->pegawai_model->getFilesById($file_id,$data['user']['id']);
			$name_file = $data['filebyid']['file'];

			$this->pegawai_model->delFileById($file_id,$data['user']['id']);
			
            unlink (FCPATH.'assets/files/'.$name_file);
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">File berhasil dihapus.</div>');
			redirect('pegawai');
		}
	}

	public function login()
	{
		if ($this->session->userdata('posisi') == 'user'){
			redirect('pegawai');
			}else{

		$this->form_validation->set_rules('username', 'Username', 'required|trim',[
			'required'=>'Username belum diisi'
			]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim', [
			'required'=>'Password belum diisi'
			]);

		if ($this->form_validation->run() == false){
			
			$data['title'] = "Pegawai Puskesmas";
			$this->load->view('pegawai/login',$data);
		}else{
					$username = $this->input->post('username');
					$password = $this->input->post('password');
					$user = $this->db->get_where('pegawai',['username'=> $username])->row_array();
					if($user){
							if (password_verify($password, $user['password'])){
								$data = [
										'pegawai_id' => $user['id'],
										'posisi' => $user['position']
								];
								$this->session->set_userdata($data);
								$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Anda Telah Berhasil Login.</div>');
								redirect('pegawai');
								
							}else{
								$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password yang dimasukkan salah</div>');
								redirect('pegawai/login');
							}

					}else{
						$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username yang dimasukkan salah</div>');
						redirect('pegawai/login');
					}
			}
		}
		
	}

	public function logout()
	{
		if ($this->session->userdata('posisi') != 'pegawai' ){
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Anda Harus Login Dahulu</div>');
			redirect('pegawai/login');
		}else{
			$this->session->unset_userdata('posisi');
			$this->session->unset_userdata('pegawai_id');
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Anda Telah Berhasil Keluar</div>');
			redirect('pegawai/login');
		}
	}

	public function password()
	{
		if ($this->session->userdata('posisi') != 'pegawai'){
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Anda Harus Login Dahulu</div>');
			redirect('admin/login');
		}else{
			$data['title'] = 'Pegawai Puskesmas';
			$data['user']= $this->db->get_where('pegawai', ['id'=>$this->session->userdata('user_id')])->row_array();
			// $data['akun']= $this->db->get_where('user', ['id'=>$this->session->userdata('pegawai_id')])->row_array();

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
				$this->load->view('templates/header_pegawai', $data);
				$this->load->view('pegawai/password', $data);
				$this->load->view('templates/footer',$data);
			}else{
				$current_password = $data['user']['password'];
				$old_password = $this->input->post('old_password');
				$new_password = $this->input->post('new_password1');
					if (!password_verify($old_password,$current_password)){
						$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Lama Salah!</div>');
						redirect('pegawai/password');
					}else{
								if (password_verify($new_password,$current_password)){
								$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Baru Tidak Boleh Sama Dengan Password Lama!</div>');
								redirect('pegawai/password');
								}else{
									$this->pegawai_model->changePassword($data['user']['id'],$new_password);
									$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Password Berhasil Diubah</div>');
								redirect('pegawai/password');

								}
					}

			}
		}
		
	}


	public function username()
	{
		if ($this->session->userdata('posisi') != 'pegawai'){
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Anda Harus Login Dahulu</div>');
			redirect('admin/login');
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
					$this->load->view('templates/header_pegawai', $data);
					$this->load->view('pegawai/username', $data);
					$this->load->view('templates/footer',$data);
				}else{
					$old_username = $this->input->post('old_username');
					$new_username = $this->input->post('new_username');

						if ($data['user']['username'] == $old_username){
							$this->pegawai_model->changeUsername($data['user']['id'],$new_username);
							$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Username Berhasil Diubah</div>');
							redirect('pegawai/username');
						}else{
							$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username Lama Salah!</div>');
							redirect('pegawai/username');
						}
				}
		}
		
	}

	public function pengaturan()
	{
		if ($this->session->userdata('posisi') != 'pegawai'){
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Anda Harus Login Dahulu</div>');
			redirect('admin/login');
		}else{
			if ($this->input->post('old_username') or $this->input->post('new_username')){
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
						$this->load->view('templates/header_pegawai', $data);
						$this->load->view('pegawai/pengaturan', $data);
						$this->load->view('templates/footer',$data);
					}else{
						$old_username = $this->input->post('old_username');
						$new_username = $this->input->post('new_username');
						if ($data['user']['username'] == $old_username){
							$this->pegawai_model->changeUsername($data['user']['id'],$new_username);
							$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Username Berhasil Diubah</div>');
							redirect('pegawai/pengaturan');
						}else{
							$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username Lama Salah!</div>');
							redirect('pegawai/pengaturan');
						}
					}
			}elseif ($this->input->post('old_password') or $this->input->post('new_password1') or $this->input->post('new_password2')){
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
					$this->load->view('templates/header_pegawai', $data);
					$this->load->view('pegawai/pengaturan', $data);
					$this->load->view('templates/footer',$data);
				}else{
					$current_password = $data['user']['password'];
					$old_password = $this->input->post('old_password');
					$new_password = $this->input->post('new_password1');
						if (!password_verify($old_password,$current_password)){
							$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Lama Salah!</div>');
							redirect('pegawai/pengaturan');
						}else{
									if (password_verify($new_password,$current_password)){
									$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Baru Tidak Boleh Sama Dengan Password Lama!</div>');
									redirect('pegawai/pengaturan');
									}else{
										$this->pegawai_model->changePassword($data['user']['id'],$new_password);
										$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Password Berhasil Diubah</div>');
									redirect('pegawai/pengaturan');

									}
						}

				}
			}else{
				$data['title'] = 'Pegawai Puskesmas';
				$data['user']= $this->db->get_where('pegawai', ['id'=>$this->session->userdata('user_id')])->row_array();
				$this->load->view('templates/header_pegawai', $data);
				$this->load->view('pegawai/pengaturan', $data);
				$this->load->view('templates/footer',$data);
			}
			
		}
		
	}

	public function profil()
	{
		$data['title'] = "Pegawai Puskesmas";
		$data['user']= $this->db->get_where('pegawai', ['id'=>$this->session->userdata('user_id')])->row_array();
		$data['pegawai']=$this->pegawai_model->getPegawaiById($data['user']['id']);

		$this->load->view('templates/header_pegawai', $data);
		$this->load->view('pegawai/profil', $data);
		$this->load->view('templates/footer',$data);
	}

	public function editprofil()
	{
		if ($this->session->userdata('posisi') != 'pegawai'){
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Anda Harus Login Dahulu</div>');
			redirect('auth');
		}else{
			$data['user']= $this->db->get_where('pegawai', ['id'=>$this->session->userdata('user_id')])->row_array();
			if ($data['user']['portal'] != 1){
				$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Anda Tidak Mempunyai Izin Untuk  Mengedit Profil. Silahkan Hubungi Admin.</div>');
				redirect('pegawai/profil');
			}
			$data['title'] = "KEPEGAWAIAN";
			$data['user']= $this->db->get_where('pegawai', ['id'=>$this->session->userdata('user_id')])->row_array();
			$data['pegawai'] = $data['user'];
				$this->form_validation->set_rules('nama', 'Nama', 'required|trim',[
					'required'=>'Nama Lengkap harus diisi'
					]);
				$this->form_validation->set_rules('jeniskelamin', 'Jeniskelamin', 'required|trim',[
					'required'=>'Jenis kelamin harus diisi'
					]);
				$this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim',[
					'required'=>'Jabatan harus diisi'
					]);
				
				if ($this->form_validation->run()==false){
						$this->load->view('templates/header_pegawai',$data);
						$this->load->view('pegawai/editprofil',$data);
						$this->load->view('templates/footer',$data);
				}else{

					$upload_image = $_FILES['image']['name'];

					if ($upload_image){
						$config['upload_path'] = './assets/img/profil/';
						$config['allowed_types'] = 'gif|jpg|png';
						$config['max_size']     = '2048';

						$this->load->library('upload', $config);

						if ($this->upload->do_upload('image'))
		                {
		                	$old_image = $data['pegawai']['image'];
		                	if ($old_image != 'default.jpg'){
		                		unlink (FCPATH.'assets/img/profil/'.$old_image);
		                	}
		                	$new_image = $this->upload->data('file_name');
		                    
		                     $data = [
									'nama' => $this->input->post('nama'),
									'nip' => $this->input->post('nip'),
									'golongan' => $this->input->post('golongan'),
									'tmtgolongan' => $this->input->post('tmtgolongan'),
									'jeniskelamin' => $this->input->post('jeniskelamin'),
									'jabatan' => $this->input->post('jabatan'),
									'statuskepegawaian' => $this->input->post('statuskepegawaian'),
									'tmtjabatan' => $this->input->post('tmtjabatan'),
									'unitkerja' => $this->input->post('unitkerja'),
									'universitas' => $this->input->post('universitas'),
									'jurusan' => $this->input->post('jurusan'),
									'tahunlulus' => $this->input->post('tahunlulus'),
									'tempatlahir' => $this->input->post('tempatlahir'),
									'tanggallahir' => $this->input->post('tanggallahir'),
									'nik' => $this->input->post('nik'),
									'nokk' => $this->input->post('nokk'),
									'status' => $this->input->post('status'),
									'alamat' => $this->input->post('alamat'),
									'desa' => $this->input->post('desa'),
									'kecamatan' => $this->input->post('kecamatan'),
									'kabupaten' => $this->input->post('kabupaten'),
									'provinsi' => $this->input->post('provinsi'),
									'rt' => $this->input->post('rt'),
									'rw' => $this->input->post('rw'),
									'npwp' => $this->input->post('npwp'),
									'bpjskesehatan' => $this->input->post('bpjskesehatan'),
									'bpjsketenagakerjaan' => $this->input->post('bpjsketenagakerjaan'),
									'phonenumber' => $this->input->post('phonenumber'),
									'email' => $this->input->post('email'),
									'namabank' => $this->input->post('namabank'),
									'norek' => $this->input->post('norek'),
									'terbitstr' => $this->input->post('terbitstr'),
									'str' => $this->input->post('str'),
									'berlakustr' => $this->input->post('berlakustr'),
									'terbitsip' => $this->input->post('terbitsip'),
									'sip' => $this->input->post('sip'),
									'berlakusip' => $this->input->post('berlakusip'),
									'pelatihan' => $this->input->post('pelatihan'),
									'image' => $new_image
								];

								
								$this->db->where('id', $this->session->userdata('user_id'));
								$this->db->update('pegawai', $data);
								$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Data Pegawai Berhasil Diedit</div>');
								redirect('pegawai/profil');
		                }
		                else
		                {
		                   echo $this->upload->display_errors();
		                }

					}

		                $data = [
						'nama' => $this->input->post('nama'),
						'nip' => $this->input->post('nip'),
						'golongan' => $this->input->post('golongan'),
						'tmtgolongan' => $this->input->post('tmtgolongan'),
						'jeniskelamin' => $this->input->post('jeniskelamin'),
						'jabatan' => $this->input->post('jabatan'),
						'statuskepegawaian' => $this->input->post('statuskepegawaian'),
						'tmtjabatan' => $this->input->post('tmtjabatan'),
						'unitkerja' => $this->input->post('unitkerja'),
						'universitas' => $this->input->post('universitas'),
						'jurusan' => $this->input->post('jurusan'),
						'tahunlulus' => $this->input->post('tahunlulus'),
						'tempatlahir' => $this->input->post('tempatlahir'),
						'tanggallahir' => $this->input->post('tanggallahir'),
						'nik' => $this->input->post('nik'),
						'nokk' => $this->input->post('nokk'),
						'status' => $this->input->post('status'),
						'alamat' => $this->input->post('alamat'),
						'desa' => $this->input->post('desa'),
						'kecamatan' => $this->input->post('kecamatan'),
						'kabupaten' => $this->input->post('kabupaten'),
						'provinsi' => $this->input->post('provinsi'),
						'rt' => $this->input->post('rt'),
						'rw' => $this->input->post('rw'),
						'npwp' => $this->input->post('npwp'),
						'bpjskesehatan' => $this->input->post('bpjskesehatan'),
						'bpjsketenagakerjaan' => $this->input->post('bpjsketenagakerjaan'),
						'phonenumber' => $this->input->post('phonenumber'),
						'email' => $this->input->post('email'),
						'namabank' => $this->input->post('namabank'),
						'norek' => $this->input->post('norek'),
						'terbitstr' => $this->input->post('terbitstr'),
						'str' => $this->input->post('str'),
						'berlakustr' => $this->input->post('berlakustr'),
						'terbitsip' => $this->input->post('terbitsip'),
						'sip' => $this->input->post('sip'),
						'berlakusip' => $this->input->post('berlakusip'),
						'pelatihan' => $this->input->post('pelatihan'),
					];

					
					$this->db->where('id', $this->session->userdata('user_id'));
					$this->db->update('pegawai', $data);
					$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Data Pegawai Berhasil Diedit</div>');
					redirect('pegawai/profil');
				}
		}
	}




}
?>