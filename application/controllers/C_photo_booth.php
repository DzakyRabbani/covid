	<?php 

class C_photo_booth extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('status') !="login") {
			redirect(base_url("Auth"));
		}
		$this->load->library(array('form_validation','session'));

		$this->load->model('M_versi');
	}
	
	public function index()
	{
		$data['background'] = $this->M_photo_booth->getdata('tbl_background');
		$data['sum'] = $this->M_photo_booth->get_sum();
		$data['sumif'] = $this->M_photo_booth->kategori();

		$this->load->view('photo_booth/template/header');
		$this->load->view('photo_booth/template/sidebar');
		$this->load->view('photo_booth/v_photo_booth',$data);
		$this->load->view('photo_booth/template/footer');
	}
	public function insert_action()
	{
		$update = '1';
		$name   =  $this->input->post('name');
		$status =  $this->input->post('status');


		$data = array(
				'name' 		  => $name,
				'update'	  => $update,
				'status'	  => $status,
			);
		$save = $this->db->insert('tbl_background',$data);
		
		// buat nambahin versi 
		$get_versi = $this->M_versi->getdata('tbl_version');
		$versi = $get_versi->versi + 1;
		$data_versi = array(
			'versi' 		=> $versi,
			
		);
		$save_versi = $this->M_versi->insertdata($data_versi);
		// end buat nambahin versi 
		
		if ($save) {
			$alert = '<div class="alert alert-success"><strong>Insert Data Complate</strong></div>';
			$this->session->set_flashdata('message',$alert);
		redirect('C_photo_booth/index');
		}
	}


	public function delete($id)
	{
		$where = array('background_id' => $id);
		$data   = $this->db->get_where('tbl_background',$where)->row_array(); 
		
		$hapus = $this->M_photo_booth->deletedata($where,'tbl_background');

		// buat nambahin versi 
		$get_versi = $this->M_versi->getdata('tbl_version');
		$versi = $get_versi->versi + 1;
		$data_versi = array(
			'versi' 		=> $versi,
			
		);
		$save_versi = $this->M_versi->insertdata($data_versi);
		// end buat nambahin versi 

		redirect('C_photo_booth/index');
	}


	public function edit($id)
	{
		$where = array('background_id' => $id);
		$data['background'] = $this->M_photo_booth->editdata($where,'tbl_background')->result();

		$this->load->view('photo_booth/template/header');
		$this->load->view('photo_booth/template/sidebar');
		$this->load->view('photo_booth/edit_photo_booth',$data);
		$this->load->view('photo_booth/template/footer');		
	}
	public function update()
	{
		$update = '1';
		$background_id = $this->input->post('background_id');
		$name 		   = $this->input->post('name');
		$status		   = $this->input->post('status');
			$where = array('background_id' => $background_id);
	
			$button   = $this->db->get_where('tbl_background',$where)->row_array(); 	



			$background   = $this->db->get_where('tbl_background',$where)->row_array(); 	
		
			

			
		$data = array(
			'name'			=> $name,
			'status'		=> $status,
			
			);
		
		$where = array(
			'background_id' => $background_id 
			);
		$this->M_photo_booth->updatedata('tbl_background',$data,$where);

		// buat nambahin versi 
	//	$get_versi = $this->M_versi->getdata('tbl_version');
	//	$versi = $get_versi->versi + 1;
	//	$data_versi = array(
	//		'versi' 		=> $versi,
			
	//	);
	//	$save_versi = $this->M_versi->insertdata($data_versi);
		// end buat nambahin versi 


		redirect('C_photo_booth/index');
	}

	public function getdata_ya()
	{
		//$data['background'] = $this->M_photo_booth->getdata_ya();
		$data['count'] = $this->M_photo_booth->get_count();
	//json_encode($data);
	//die();

		$this->load->view('photo_booth/template/header');
		$this->load->view('photo_booth/template/sidebar');
		$this->load->view('photo_booth/v_photo_booth',$data);
		$this->load->view('photo_booth/template/footer');
	
	}



}
 ?>