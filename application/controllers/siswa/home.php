<?php if ( ! defined('BASEPATH')) exit('No direct script acces allowed');

class Home extends CI_Controller{

		

    public function index(){
      $data['judul']='Selamat Datang Siswa';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar'); 
      $this->load->view('siswa/home',$data);
      $this->load->view('template/footer'); 
    }
    public function nilai(){
      $data['judul']='Nilai Siswa';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar'); 
      $this->load->view('template/footer');
      $this->load->view('siswa/nilai');
    }
    public function pengumuman(){
      $data['judul']='Pengumuman';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar'); 
      $this->load->view('siswa/pengumuman');
    }

    public function statusspp(){
      $data['judul']='Status Spp';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar'); 
      $this->load->view('siswa/statusspp');
    }
    public function jadwal(){
    $data['judul']='Jadwal Siswa';
    $this->load->view('template/header',$data);
    $this->load->view('template/sidebar'); 
    $this->load->view('siswa/jadwal');
		}
		public function listsiswa(){
			$data['siswa']=$this->SiswaModel->getAll();
			// $dataEdit['siswa']=$this->M_siswa->getById();
			
			$this->load->view('template/header');
			$this->load->view('siswa/home', $data);
			$this->load->view('template/sidebar');
			$this->load->view('template/footer'); 
	  }
		

		// public function __construct(){
		// 	parent::__construct();
		// 	$this->load->model('Pengumuman_model');
		// }
	

		// public function pengumuman(){
		// 	$data=array('title' 			=>'Pengumuman Siswa',
		// 							'pengumuman'	=> $this->Pengumuman_model->daftar_pengumuman(),
		// 							'isi' 				=>'home/index_home'
		// 									);
		// 						$this->load->view('siswa/pengumuman');
		// }									
		
}
