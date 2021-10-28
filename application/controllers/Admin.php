<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('admin_model');

	}
	
	public function index()
	{
		if ($this->session->userdata('posisi') != 'admin'){
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Anda Harus Login Dahulu</div>');
			redirect('auth');
		}else{
				$data['title'] = "KEPEGAWAIAN";
				$data['pegawai']= $this->admin_model->getPegawai();
				$data['user']= $this->db->get_where('pegawai', ['id'=>$this->session->userdata('user_id')])->row_array();
				$this->load->view('templates/header',$data);
				$this->load->view('admin/index',$data);
				$this->load->view('templates/footer',$data);
		}
		
	}
	
	public function guest()
	{
		if ($this->session->userdata('posisi') != 'admin'){
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Anda Harus Login Dahulu</div>');
			redirect('auth');
		}else{
				$data['title'] = "KEPEGAWAIAN";
				$data['pegawai']= $this->admin_model->getPegawai();
				$data['hakakses']= $this->admin_model->getHakAksesGuest();
				$data['user']= $this->db->get_where('pegawai', ['id'=>$this->session->userdata('user_id')])->row_array();
				$this->load->view('templates/header',$data);
				$this->load->view('admin/guest',$data);
				$this->load->view('templates/footer',$data);
		}
		
	}
	
	public function guestset()
	{
		if ($this->session->userdata('posisi') != 'admin'){
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Anda Harus Login Dahulu</div>');
			redirect('auth');
		}else{
			$data['title'] = 'KEPEGAWAIAN';
			$data['hakakses']= $this->admin_model->getGuest();
			$data['user']= $this->db->get_where('pegawai', ['id'=>$this->session->userdata('user_id')])->row_array();
			$this->form_validation->set_rules('hakakses', 'hakakses', 'required',[
				'required'=>'harus diisi'
			]);

				if ($this->form_validation->run()==false){
					$this->load->view('templates/header', $data);
					$this->load->view('admin/guestset', $data);
					$this->load->view('templates/footer',$data);
				}else{
					if ($this->input->post('password')){
						$guestpassword = $this->input->post('password');
						$expired =  $this->input->post('expired') ;
						$this->admin_model->GuestPasswordExpired($guestpassword, $expired);
						$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Password Dan Tanggal Expired Akun Guest Berhasil Diubah.</div>');
						redirect('admin/guest');
					}else{
						$expired =  $this->input->post('expired') ;
						$this->admin_model->GuestExpired($expired);
						$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Tanggal Expired Akun Guest Berhasil Diubah.</div>');
						redirect('admin/guest');
					}
					
				}
		}
		
	}
	
	public function show($id)
	{
		if ($this->session->userdata('posisi') != 'admin'){
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Anda Harus Login Dahulu</div>');
			redirect('auth');
		}else{
			$this->admin_model->show($id);
			redirect('admin/guest');
		}
	}
	
	public function hide($id)
	{
		if ($this->session->userdata('posisi') != 'admin'){
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Anda Harus Login Dahulu</div>');
			redirect('auth');
		}else{
			$this->admin_model->hide($id);
			redirect('admin/guest');
		}
	}
	
	public function open($id)
	{
		if ($this->session->userdata('posisi') != 'admin'){
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Anda Harus Login Dahulu</div>');
			redirect('auth');
		}else{
			$this->admin_model->open($id);
			$nama = $this->admin_model->getNama($id);
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Portal '.$nama['nama'].' Telah Dibuka</div>');
			redirect('admin/account/'.$id);
		}
	}
	
	public function close($id)
	{
		if ($this->session->userdata('posisi') != 'admin'){
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Anda Harus Login Dahulu</div>');
			redirect('auth');
		}else{
			$this->admin_model->close($id);
			$nama = $this->admin_model->getNama($id);
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Portal '.$nama['nama'].' Telah Ditutup</div>');
			redirect('admin/account/'.$id);
		}
	}

	public function file($id)
	{
		if ($id == 1 or $id == 2){
			redirect('admin');
		}

		if ($this->session->userdata('posisi') != 'admin'){
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Anda Harus Login Dahulu</div>');
			redirect('auth');
		}else{
				$data['title'] = "KEPEGAWAIAN";
				$data['user']= $this->db->get_where('pegawai', ['id'=>$this->session->userdata('user_id')])->row_array();
				$data['pegawai'] = $this->admin_model->getPegawaiById($id);
				$data['files']=$this->admin_model->getFiles($data['pegawai']['id']);
				$this->load->view('templates/header',$data);
				$this->load->view('admin/file',$data);
				$this->load->view('templates/footer',$data);
		}
		
	}

	public function add()
	{
		if ($this->session->userdata('posisi') != 'admin'){
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Anda Harus Login Dahulu</div>');
			redirect('auth');
			}else{

			$data['title'] = "KEPEGAWAIAN";
			$data['pegawai']= $this->admin_model->getPegawai();
			$data['user']= $this->db->get_where('pegawai', ['id'=>$this->session->userdata('user_id')])->row_array();
			
				$this->form_validation->set_rules('nourut', 'Nourut', 'required|integer|trim',[
					'required'=>'Nomor urut harus diisi',
					'integer'=>'Isi dengan angka'
					]);
				$this->form_validation->set_rules('nama', 'Nama', 'required|trim',[
					'required'=>'Nama Lengkap harus diisi'
					]);
				$this->form_validation->set_rules('jeniskelamin', 'Jeniskelamin', 'required|trim',[
					'required'=>'Jenis kelamin harus diisi'
					]);
				$this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim',[
					'required'=>'Jabatan harus diisi'
					]);
				$this->form_validation->set_rules('statuskepegawaian', 'Statuskepegawaian', 'required|trim',[
					'required'=>'Status kepegawaian harus diisi'
					]);
				
				if ($this->form_validation->run()==false){
						$this->load->view('templates/header',$data);
						$this->load->view('admin/add',$data);
						$this->load->view('templates/footer',$data);
				}else{

					$upload_image = $_FILES['image']['name'];

					if ($upload_image){
						$config['upload_path'] = './assets/img/profil/';
						$config['allowed_types'] = 'jpg|png';
						$config['max_size']     = '2048';

						$this->load->library('upload', $config);

						if ($this->upload->do_upload('image'))
		                {
		                	$image = $this->upload->data('file_name');

		                    $data = [
										'nourut' => $this->input->post('nourut'),
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
										'image' => $image,
										'username' => 'kelarik',
										'password' => '$2y$10$tOcsrWZiSrpoSE0lfSU1rOX2zSNjCXwNoc8ExXIRIJcD1VGigF.iy',
										'position' => 'pegawai',
										'portal' => 0
									];
							$this->db->insert('pegawai',$data);
							$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Data Pegawai Berhasil Ditambahkan</div>');
							redirect('admin');
		                }
		                else
		                {
		                   echo $this->upload->display_errors();
		                }

					}
		                $data = [
						'nourut' => $this->input->post('nourut'),
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
						'image' => 'default.jpg',
						'username' => 'kelarik',
						'password' => '$2y$10$tOcsrWZiSrpoSE0lfSU1rOX2zSNjCXwNoc8ExXIRIJcD1VGigF.iy',
						'position' => 'pegawai',
						'portal' => 0
					];
					$this->db->insert('pegawai',$data);
					$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Data Pegawai Berhasil Ditambahkan</div>');
					redirect('admin');
				}
			}
	}

	public function detail($id)
	{
		if ($id == 1 or $id == 2){
			redirect('admin');
		}
		if ($this->session->userdata('posisi') != 'admin'){
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Anda Harus Login Dahulu</div>');
			redirect('auth');
		}else{
			$data['title'] = "KEPEGAWAIAN";
			$data['pegawai'] = $this->admin_model->getPegawaiById($id);
			$data['user']= $this->db->get_where('pegawai', ['id'=>$this->session->userdata('user_id')])->row_array();
			$this->load->view('templates/header',$data);
			$this->load->view('admin/detail',$data);
			$this->load->view('templates/footer',$data);
		}
	}
	
	public function account($id)
	{
		if ($id == 1 or $id == 2){
			redirect('admin');
		}
		if ($this->session->userdata('posisi') != 'admin'){
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Anda Harus Login Dahulu</div>');
			redirect('auth');
		}else{
			$data['title'] = "KEPEGAWAIAN";
			$data['pegawai'] = $this->admin_model->getPegawaiById($id);
			$data['user']= $this->db->get_where('pegawai', ['id'=>$this->session->userdata('user_id')])->row_array();
			$this->load->view('templates/header',$data);
			$this->load->view('admin/akun',$data);
			$this->load->view('templates/footer',$data);
		}
	}

	public function reset($id)
	{
		if ($id == 1 or $id == 2){
			redirect('admin');
		}
		
		if ($this->session->userdata('posisi') != 'admin'){
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Anda Harus Login Dahulu</div>');
			redirect('auth');
		}else{
			$this->admin_model->resetAccount($id);
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Password telah di reset</div>');
			redirect('admin/account/'.$id);
		}
	}

	public function edit($id)
	{
		if ($id == 1 or $id == 2){
			redirect('admin');
		}

		if ($this->session->userdata('posisi') != 'admin'){
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Anda Harus Login Dahulu</div>');
			redirect('auth');
		}else{
			$data['title'] = "KEPEGAWAIAN";
			$data['pegawai'] = $this->admin_model->getPegawaiById($id);
			$data['user']= $this->db->get_where('pegawai', ['id'=>$this->session->userdata('user_id')])->row_array();
			
			$this->form_validation->set_rules('nourut', 'Nourut', 'required|integer|trim',[
					'required'=>'Nomor urut harus diisi',
					'integer'=>'Isi dengan angka'
					]);
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
						$this->load->view('templates/header',$data);
						$this->load->view('admin/edit',$data);
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
									'nourut' => $this->input->post('nourut'),
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

								
								$this->db->where('id', $id);
								$this->db->update('pegawai', $data);
								$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Data Pegawai Berhasil Diedit</div>');
								redirect('admin/detail/'.$id);
		                }
		                else
		                {
		                   echo $this->upload->display_errors();
		                }

					}

		                $data = [
						'nourut' => $this->input->post('nourut'),
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

					
					$this->db->where('id', $id);
					$this->db->update('pegawai', $data);
					$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Data Pegawai Berhasil Diedit</div>');
					redirect('admin/detail/'.$id);
				}
		}
	}

	public function delete($id)
	{
		if ($id == 1 or $id == 2){
			redirect('admin');
		}

		if ($this->session->userdata('posisi') != 'admin'){
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Anda Harus Login Dahulu</div>');
			redirect('auth');
		}else{
			$data['pegawai'] = $this->admin_model->getPegawaiById($id);
			$image = $data['pegawai']['image'];
		        if ($image != 'default.jpg'){
		            unlink (FCPATH.'assets/img/profil/'.$image);
		        }
			$this->admin_model->delPegawaiById($id);
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Data berhasil Dihapus.</div>');
			redirect('admin');
		}
	}

	public function login()
	{
		if ($this->session->userdata('posisi') == 'kepegawaian'){
			redirect('admin');
			}else{

		$this->form_validation->set_rules('username', 'Username', 'required|trim',[
			'required'=>'Username belum diisi'
			]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim', [
			'required'=>'Password belum diisi'
			]);

		if ($this->form_validation->run() == false){
			$data['title'] = "KEPEGAWAIAN";
			$this->load->view('admin/login',$data);
		}else{
					$username = $this->input->post('username');
					$password = $this->input->post('password');
					$user = $this->db->get_where('user',['username'=> $username])->row_array();
					if($user){
							if (password_verify($password, $user['password'])){
								$data = [
										'nama' => $user['name'],
										'posisi' => $user['position']
								];
								$this->session->set_userdata($data);
								$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Anda Telah Berhasil Login. Selamat Datang di Bagian Kepegawaian.</div>');
								redirect('admin');
								
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
		if ($this->session->userdata('posisi') != 'admin'){
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Anda Harus Login Dahulu</div>');
			redirect('auth');
		}else{
			$this->session->unset_userdata('posisi');
			$this->session->unset_userdata('nama');
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Anda Telah Berhasil Keluar</div>');
			redirect('auth');
		}
	}

	public function password()
	{
		if ($this->session->userdata('posisi') != 'admin'){
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Anda Harus Login Dahulu</div>');
			redirect('auth');
		}else{
			$data['title'] = 'KEPEGAWAIAN';
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
				$this->load->view('admin/password', $data);
				$this->load->view('templates/footer',$data);
			}else{
				$current_password = $data['user']['password'];
				$old_password = $this->input->post('old_password');
				$new_password = $this->input->post('new_password1');
					if (!password_verify($old_password,$current_password)){
						$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Lama Salah!</div>');
						redirect('admin/password');
					}else{
								if (password_verify($new_password,$current_password)){
								$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Baru Tidak Boleh Sama Dengan Password Lama!</div>');
								redirect('admin/password');
								}else{
									$this->admin_model->changePassword($data['user']['position'],$new_password);
									$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Password Berhasil Diubah</div>');
								redirect('admin/password');

								}
					}

			}
		}
		
	}

	public function hakakses()
	{
		if ($this->session->userdata('posisi') != 'admin'){
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Anda Harus Login Dahulu</div>');
			redirect('auth');
		}else{
			$data['title'] = 'KEPEGAWAIAN';
			$data['hakakses']= $this->admin_model->getHakAksesGuest();
			$data['user']= $this->db->get_where('pegawai', ['id'=>$this->session->userdata('user_id')])->row_array();
			$this->form_validation->set_rules('hakakses', 'hakakses', 'required',[
				'required'=>'harus diisi'
			]);

				if ($this->form_validation->run()==false){
					$this->load->view('templates/header', $data);
					$this->load->view('admin/hakakses', $data);
					$this->load->view('templates/footer',$data);
				}else{
					$data = [
						'nip' => $this->input->post('nip'),
						'pangkat' => $this->input->post('pangkat'),
						'jeniskelamin' => $this->input->post('jeniskelamin'),
						'jabatan' => $this->input->post('jabatan'),
						'unitkerja' => $this->input->post('unitkerja'),
						'pendidikan' => $this->input->post('pendidikan'),
						'lahir' => $this->input->post('lahir'),
						'nik' => $this->input->post('nik'),
						'nokk' => $this->input->post('nokk'),
						'status' => $this->input->post('status'),
						'alamat' => $this->input->post('alamat'),
						'npwp' => $this->input->post('npwp'),
						'bpjs' => $this->input->post('bpjs'),
						'kontak' => $this->input->post('kontak'),
						'bank' => $this->input->post('bank'),
						'str' => $this->input->post('str'),
						'sip' => $this->input->post('sip'),
						'pelatihan' => $this->input->post('pelatihan')
					];

					$this->db->where('id', 1);
					$this->db->update('guest', $data);
					$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Hak Akses Guest Berhasil Diubah</div>');
					redirect('admin/guest');
				}
		}
		
	}

	public function convert_excel()
	{
		$data['title'] = "KEPEGAWAIAN PUSKESMAS KELARIK";
		$data['pegawai']= $this->admin_model->getPegawaiGuest();
		$data['hakakses']= $this->admin_model->getHakAksesGuest();
		$this->load->view('guest/convert_excel',$data);
   }

	public function convert_pdf()
   {
		$data['pegawai']= $this->admin_model->getPegawaiGuest();
		$data['hakakses']= $this->admin_model->getHakAksesGuest();
		$this->load->library('pdf');
		// $customPaper = array(0,0,1000,360);
		// $this->pdf->set_paper($customPaper);
		
		$this->pdf->setPaper('legal', 'landscape');
		$this->pdf->filename = "Kepegawaian Puskesmas Kelarik.pdf";
		$this->pdf->load_view('guest/convert_pdf', $data);
	}

}
?>