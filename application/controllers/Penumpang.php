<?php 	
/**
* 
*/
class penumpang extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('penumpang_model');
		$this->load->model('penerbangan_model');
	}

	function index() 
	{
		$user = $this->session->userdata('user');
		$username = $this->session->userdata('username');
		if ($user == 'Admin') {
			$data['penumpang']=$this->penumpang_model->ambil_data_penumpang();
		} else {
			$data['penumpang']=$this->penumpang_model->ambil_data_penumpang_user($username);
		}

		$this->load->view('penumpang/penumpang_list',$data);
	}

	function tambah_penumpang($id_penerbangan)
	{
		$data=array(
			'id_penumpang'=>set_value('id_penumpang'),
			'id_penerbangan'=>$id_penerbangan,
			'nama_penumpang'=>set_value('nama_penumpang'),
			'alamat_penumpang'=>set_value('alamat_penumpang'),
			'no_hp_penumpang'=>set_value('no_hp_penumpang'),
			'username'=>set_value('username'),
			'button'=>'Tambah',	
			'action'=>site_url('Penumpang/tambah_aksi_penumpang')
		);
		$this->load->view('penumpang/penumpang_form',$data);
	}

	function tambah_aksi_penumpang()
	{
		$data=array(
			'id_penerbangan'=>$this->input->post('id_penerbangan'),
			'nama_penumpang'=>$this->input->post('nama_penumpang'),
			'alamat_penumpang'=>$this->input->post('alamat_penumpang'),
			'no_hp_penumpang'=>$this->input->post('no_hp_penumpang'),
			'username'=>$this->input->post('username')
		);
		$this->penumpang_model->tambah_data($data);
		redirect(site_url('Penumpang'));
	}

	function delete_penumpang($id_penumpang)
	{
		$this->penumpang_model->hapus_data($id_penumpang);
		redirect(site_url('Penumpang'));
	}

	function edit_penumpang($id_penumpang)
	{
		$penumpang=($this->penumpang_model->ambil_data_id_penumpang($id_penumpang));
		
		//Mencari Indeks Anggota
		$penumpang=($this->penumpang_model->ambil_data_id_penumpang($penumpang->id_penumpang));
		$arrpenumpang = $this->penumpang_model->ambil_data_penumpang();
		$indexpenumpang=0; 
		foreach ($arrpenumpang as $key => $value) {
			if($value->nama_penumpang == $penumpang->nama_penumpang){
				break;
			}
			else{
				$indexpenumpang++;
			}
		}

		$nilai=$this->penumpang_model->ambil_data_id_penumpang($id_penumpang);
		$data=array(
			'nama_penumpang'=>set_value('nama_penumpang',$nilai->nama_penumpang),
			'id_penumpang'=>set_value('id_penumpang',$nilai->id_penumpang),
			'alamat_penumpang'=>set_value('alamat_penumpang',$nilai->alamat_penumpang),
			'no_hp_penumpang'=>set_value('no_hp_penumpang',$nilai->no_hp_penumpang),
			'id_penerbangan'=>set_value('id_penerbangan',$nilai->id_penerbangan),
			'button'=>'Edit',
			'action'=>site_url('Penumpang/edit_aksi_penumpang')
		);
		$this->load->view('penumpang/penumpang_form',$data);
	}

	function edit_aksi_penumpang()
	{
		$data=array(
			'nama_penumpang'=>$this->input->post('nama_penumpang'),
			'alamat_penumpang'=>$this->input->post('alamat_penumpang'),
			'no_hp_penumpang'=>$this->input->post('no_hp_penumpang')
		);
		$id_penumpang=$this->input->post('id_penumpang');
		$this->penumpang_model->edit_data($id_penumpang,$data);
		redirect(site_url('Penumpang'));
	}

	function daftar_penumpang() {
		
	}
}
?>