<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index(){
		$data['tamu'] = $this->Mbukutamu->tampil_data()->result();
		$this->load->view('index', $data);
	}
	public function tambah_data(){
		$this->load->view('tambah_data');
	}
	public function proses_tambahdata(){
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$aktifitas = $this->input->post('aktifitas');

		$data = array(
			'nama' => $nama,
			'email' => $email,
			'aktifitas' => $aktifitas,
			'check_in' => date('Y:m:d H:i:s')
			);
			$this->Mbukutamu->proses_tambahdata($data, 'tbl_bukutamu');
			redirect('Main');

		
	}
	public function delete($id_bukutamu){
		$where = array('id_bukutamu' => $id_bukutamu);
		$this->Mbukutamu->delete_data($where, 'tbl_bukutamu');
		redirect('Main');
	}
	public function edit($id_bukutamu){
		$where = array('id_bukutamu' => $id_bukutamu);
		$data['user'] =$this->Mbukutamu->edit_data($where, 'tbl_bukutamu')->result();
		$this->load->view('edit',$data);
	}

	public function proses_editdata(){
		$id_bukutamu = $this->input->post('id_bukutamu');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$aktifitas = $this->input->post('aktifitas');

		$data = array('id_bukutamu' => $id_bukutamu,
					  'nama' => $nama,
					  'email' => $email,
					  'aktifitas' => $aktifitas
		);
		$where = array('id_bukutamu' => $id_bukutamu);
		$this->Mbukutamu->query_update($where, $data,'tbl_bukutamu');
		redirect('Main');
	}

}
