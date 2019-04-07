<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Siswa extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('SiswaModel'); 
  }
	
	public function index()
	{
			$data["siswa"] = $this->M_siswa->getAll();
			$this->load->view("template/header");
			$this->load->view("admin/listsiswa", $data);
			$this->load->view("template/sidebar");
			$this->load->view("template/footer");
			
			
	}
  // public function index(){
  //   $data['siswa'] = $this->SiswaModel->view();
  //   $this->load->view('siswa/index', $data);
  // }
  
  public function tambah(){
    if($this->input->post('submit')){ 
      if($this->SiswaModel->validation("save")){ 
        $this->SiswaModel->save(); 
        redirect('siswa');
      }
    }
    
    $this->load->view('siswa/form_tambah');
  }
	
	// public function edit($id=null)
	// {
	// 		// var_dump($id);
	// 		if (!isset($id)) redirect('c_siswa');

			
	// 		$var = $this->M_siswa;
	// 		$validation = $this->form_validation;
	// 		$validation->set_rules($var->rules());

	// 		if ($validation->run()) {
	// 				$var->update();
	// 		}

	// 		$data["siswa"]=$this->M_siswa->getAll();
	// 		// $this->load->view("template/header");
	// 		$this->load->view("admin/listsiswa", $data);
	// 		// $this->load->view("template/sidebar");
	// 		// $this->load->view("template/footer");

	// 		$data["siswa"] = $var->getById($id);
	// 		if (!$data["siswa"]) show_404();
	// 		$this->load->view("template/header");
	// 		$this->load->view("admin/editsiswa", $data);
	// 		$this->load->view("template/sidebar");
	// 		$this->load->view("template/footer");
	// }

  // public function ubah($nis){
  //   if($this->input->post('submit')){ 
  //     if($this->SiswaModel->validation("update")){ 
  //       $this->SiswaModel->edit($nis); 
  //       redirect('siswa');
  //     }
  //   }
    
  //   $data['siswa'] = $this->SiswaModel->view_by($nis);
  //   $this->load->view('siswa/form_ubah', $data);
  // }
  
  public function hapus($nis){
    $this->SiswaModel->delete($nis); 
    redirect('siswa');
  }
}
