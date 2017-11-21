<?php 
/**
* 
*/
class pesawat extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('pesawat_model');
		$this->load->model('pilot_model');
	}

	function index() 
	{
		$data['pesawat']=$this->pesawat_model->ambil_data_pesawat();
		$this->load->view('pesawat/pesawat_list',$data);
	}

	function tambah_pesawat()
	{
		$data=array(
			'id_pesawat'=>set_value('id_pesawat'),
			'tipe_pesawat'=>set_value('tipe_pesawat'),
			'nama_pilot' => $this->pilot_model->ambil_data_pilot(),
			'button'=>'Tambah',
			'action'=>site_url('Pesawat/tambah_aksi_pesawat')
		);
		$this->load->view('pesawat/pesawat_form',$data);
	}

	function tambah_aksi_pesawat()
	{
		$data=array(
			'tipe_pesawat'=>$this->input->post('tipe_pesawat'),
			'id_pilot'=>$this->input->post('id_pilot')
		);
		$this->pesawat_model->tambah_data($data);
		redirect(site_url('Pesawat'));
	}

	function delete_pesawat($id_pesawat)
	{
		$this->pesawat_model->hapus_data($id_pesawat);
		redirect(site_url('Pesawat'));
	}

	function edit_pesawat($id_pesawat)
	{
		$pesawat=($this->pesawat_model->ambil_data_id($id_pesawat));
		
		//Mencari Indeks Anggota
		$nama_pilot=($this->pilot_model->ambil_data_id_pilot($pesawat->id_pilot));
		$arrPilot = $this->pilot_model->ambil_data_pilot();
		$indexPilot=0; 
		foreach ($arrPilot as $key => $value) {
			if($value->nama_pilot == $nama_pilot->nama_pilot){
				break;
			}
			else{
				$indexPilot++;
			}
		}

		$nilai=$this->pesawat_model->ambil_data_id($id_pesawat);
		$data=array(
			'tipe_pesawat'=>set_value('tipe_pesawat',$nilai->tipe_pesawat),
			'nama_pilot'=>$this->pilot_model->ambil_data_pilot(),
			'id_pilot' => set_value('id_pilot',$indexPilot),
			'id_pesawat'=>set_value('id_pesawat',$nilai->id_pesawat),
			'button'=>'Edit',
			'action'=>site_url('Pesawat/edit_aksi_pesawat')
		);
		$this->load->view('pesawat/pesawat_form',$data);
	}

	function edit_aksi_pesawat()
	{
		$data=array(
			'tipe_pesawat'=>$this->input->post('tipe_pesawat'),
			'nama_pilot'=>$this->input->post('nama_pilot'),
			'id_pilot'=>$this->input->post('id_pilot'),
			'id_pesawat'=>$this->input->post('id_pesawat')
		);
		$id_pesawat=$this->input->post('id_pesawat');
		$this->pesawat_model->edit_data($id_pesawat,$data);
		redirect(site_url('Pesawat'),$username);
	}
}
?>