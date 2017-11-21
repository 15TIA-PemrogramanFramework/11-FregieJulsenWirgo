<?php 
/**
* 
*/
class penerbangan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('penerbangan_model');
		$this->load->model('pesawat_model');
	}

	function index() 
	{
		$data['penerbangan']=$this->penerbangan_model->ambil_data_penerbangan();
		$this->load->view('penerbangan/penerbangan_list',$data);
	}
	function tambah_penerbangan()
	{
		$data=array(
			'id_penerbangan'=>set_value('id_penerbangan'),
			'tipe_pesawat'=>$this->pesawat_model->ambil_data_pesawat(),
			'tanggal'=>set_value('tanggal'),
			'dari'=>set_value('dari'),
			'tujuan'=>set_value('tujuan'),
			'waktu_keberangkatan'=>set_value('waktu_keberangkatan'),
			'status'=>set_value('status'),
			'button'=>'Tambah',
			'action'=>site_url('Penerbangan/tambah_aksi_penerbangan')
		);
		$this->load->view('penerbangan/penerbangan_form',$data);
	}

	function tambah_aksi_penerbangan()
	{
		$data=array(
			'id_pesawat'=>$this->input->post('id_pesawat'),
			'tanggal'=>$this->input->post('tanggal'),
			'dari'=>$this->input->post('dari'),
			'tujuan'=>$this->input->post('tujuan'),
			'waktu_keberangkatan'=>$this->input->post('waktu_keberangkatan'),
			'status'=>$this->input->post('status')
		);
		$this->penerbangan_model->tambah_data($data);
		redirect(site_url('Penerbangan'));
	}

	function delete_penerbangan($id_penerbangan)
	{
		$this->penerbangan_model->hapus_data($id_penerbangan);
		redirect(site_url('Penerbangan'));
	}

	function edit_penerbangan($id_penerbangan)
	{
		$penerbangan=($this->penerbangan_model->ambil_data_id_penerbangan($id_penerbangan));
		
		//Mencari Indeks Anggota
		$tipe_pesawat=($this->pesawat_model->ambil_data_id($penerbangan->id_pesawat));
		$arrpesawat = $this->pesawat_model->ambil_data_pesawat();
		$indexpesawat=0; 
		foreach ($arrpesawat as $key => $value) {
			if($value->tipe_pesawat == $tipe_pesawat->tipe_pesawat){
				break;
			}
			else{
				$indexpesawat++;
			}
		}


		$nilai=$this->penerbangan_model->ambil_data_id_penerbangan($id_penerbangan);
		$data=array(
			'tipe_pesawat'=>$this->pesawat_model->ambil_data_pesawat(),
			'id_penerbangan'=>set_value('id_penerbangan',$nilai->id_penerbangan),
			'tanggal'=>set_value('tanggal',$nilai->tanggal),
			'id_pesawat' => set_value('id_pesawat',$indexpesawat),
			'dari'=>set_value('dari',$nilai->dari),
			'tujuan'=>set_value('tujuan',$nilai->tujuan),
			'waktu_keberangkatan'=>set_value('waktu_keberangkatan',$nilai->waktu_keberangkatan),
			'status'=>set_value('status',$nilai->status),
			'button'=>'Edit',
			'action'=>site_url('Penerbangan/edit_aksi_penerbangan')
		);
		$this->load->view('penerbangan/penerbangan_form',$data);
	}

	function edit_aksi_penerbangan()
	{
		$data=array(
			'id_pesawat'=>$this->input->post('id_pesawat'),
			'tanggal'=>$this->input->post('tanggal'),
			'dari'=>$this->input->post('dari'),
			'tujuan'=>$this->input->post('tujuan'),
			'waktu_keberangkatan'=>$this->input->post('waktu_keberangkatan'),
			'status'=>$this->input->post('status')
		);
		$id_penerbangan=$this->input->post('id_penerbangan');
		$this->penerbangan_model->edit_data($id_penerbangan,$data);
		redirect(site_url('Penerbangan'));
	}
}
?>