<?php 
/**
* 
*/
class pilot extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('pilot_model');
	}

	function index() 
	{
		$data['pilot']=$this->pilot_model->ambil_data_pilot();
		$this->load->view('pilot/pilot_list',$data);
	}

	function tambah_pilot()
	{
		$data=array(
			'id_pilot'=>set_value('id_pilot'),
			'nama_pilot'=>set_value('nama_pilot'),
			'alamat_pilot'=>set_value('alamat_pilot'),
			'no_hp_pilot'=>set_value('no_hp_pilot'),
			'button'=>'Tambah',
			'action'=>site_url('Pilot/tambah_aksi_pilot')
		);
		$this->load->view('pilot/pilot_form',$data);
	}

	function tambah_aksi_pilot()
	{
		$data=array(
			'nama_pilot'=>$this->input->post('nama_pilot'),
			'alamat_pilot'=>$this->input->post('alamat_pilot'),
			'no_hp_pilot'=>$this->input->post('no_hp_pilot')
		);
		$this->pilot_model->tambah_data($data);
		redirect(site_url('Pilot'));
	}

	function delete_pilot($id_pilot)
	{
		$this->pilot_model->hapus_data($id_pilot);
		redirect(site_url('Pilot'));
	}

	function edit_pilot($id_pilot)
	{
		$nilai=$this->pilot_model->ambil_data_id_pilot($id_pilot);
		$data=array(
			'id_pilot'=>set_value('id_pilot',$nilai->id_pilot),
			'nama_pilot'=>set_value('nama_pilot',$nilai->nama_pilot),
			'alamat_pilot'=>set_value('alamat_pilot',$nilai->alamat_pilot),
			'no_hp_pilot'=>set_value('no_hp_pilot',$nilai->no_hp_pilot),
			'button'=>'Edit',
			'action'=>site_url('Pilot/edit_aksi_pilot')
		);
		$this->load->view('pilot/pilot_form',$data);
	}

	function edit_aksi_pilot()
	{
		$data=array(
			'tipe_pilot'=>$this->input->post('tipe_pilot'),
			'nama_pilot'=>$this->input->post('nama_pilot')
		);
		$id_pilot=$this->input->post('id_pilot');
		$this->pilot_model->edit_data($id_pilot,$data);
		redirect(site_url('Pilot'),$username);
	}
}
?>