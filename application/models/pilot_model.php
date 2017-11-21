<?php 
/**
* 
*/
class pilot_model extends CI_model
{
	
	public $nama_table = "pilot";
	public $id = 'id_pilot';
	public $order = "DESC";

	function __construct()
	{
		parent::__construct();
	}

	//untuk mengambil data seluruh mahasiswa
	function ambil_data_pilot() {
		$data['pilot'] = $this->db->order_by($this->id, $this->order);
 		return $this->db->get($this->nama_table)->result();
	}

	function ambil_data_id_pilot($id) {
		$this->db->where($this->id,$id);
		return $this->db->get($this->nama_table)->row();
	}

	function cek_login($username,$password) {
		$this->db->where('nama',$username);
		$this->db->where('prodi',$password);
		return $this->db->get($this->nama_table)->row();
	}

	function tambah_data($data) {
		return $this->db->insert($this->nama_table,$data);
	}

	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		$this->db->delete($this->nama_table);
	}

	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		$this->db->update($this->nama_table,$data);
	}
}
?>