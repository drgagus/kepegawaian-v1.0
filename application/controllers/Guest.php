<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('guest_model');
	}
	
	public function index()
	{
		if ($this->session->userdata('posisi') != 'guest'){
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Anda Harus Login Dahulu</div>');
			redirect('auth');
		}else{
			$data['user']= $this->db->get_where('pegawai', ['id'=>$this->session->userdata('user_id')])->row_array();
			if (date('Y-m-d') <= $data['user']['expired']){
				$data['title'] = "KEPEGAWAIAN";
				$data['pegawai']= $this->guest_model->getPegawai();
				$data['hakakses']= $this->guest_model->getHakAksesGuest();
				$this->load->view('templates/header_guest',$data);
				$this->load->view('guest/index',$data);
				$this->load->view('templates/footer',$data);
			}else{
				$this->session->unset_userdata('posisi');
				$this->session->unset_userdata('user_id');
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Guest telah expired. Silahkan hubungi admin.</div>');
				redirect('auth');
			}
		}
		
	}

	public function convert_excel()
	{
		$data['title'] = "KEPEGAWAIAN PUSKESMAS KELARIK";
		$data['pegawai']= $this->guest_model->getPegawai();
		$data['hakakses']= $this->guest_model->getHakAksesGuest();
		$this->load->view('guest/convert_excel',$data);
   }

   public function convert_pdf()
   {
		$data['pegawai']= $this->guest_model->getPegawai();
		$data['hakakses']= $this->guest_model->getHakAksesGuest();
		$this->load->library('pdf');
		$this->pdf->setPaper('legal', 'landscape');
		$this->pdf->filename = "Kepegawaian Puskesmas Kelarik.pdf";
		$this->pdf->load_view('guest/convert_pdf', $data);
	}


}
?>