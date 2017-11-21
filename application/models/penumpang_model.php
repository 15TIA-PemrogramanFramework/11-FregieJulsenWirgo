<?php 
/**
* 
*/
class penumpang_model extends CI_model
{
	
	public $nama_table = "penumpang";
	public $id = 'id_penumpang';
	public $order = "DESC";

	function __construct()
	{
		parent::__construct();
	}

	//untuk mengambil data seluruh mahasiswa
	function ambil_data_penumpang() {
		$this->db->distinct();
 		$this->db->select('pe.id_penumpang, pb.id_penerbangan, pe.nama_penumpang, pe.alamat_penumpang, pe.no_hp_penumpang, pe.username');
 		$this->db->from('penumpang pe');
 		$this->db->join('penerbangan pb', 'pe.id_penerbangan = pb.id_penerbangan');
 		$this->db->join('login l', 'pe.username = l.username');
 		return $this->db->get($this->nama_table)->result();
	}

	function ambil_data_penumpang_user($username) {
		$this->db->distinct();
 		$this->db->select('pe.id_penumpang, pb.id_penerbangan, pe.nama_penumpang, pe.alamat_penumpang, pe.no_hp_penumpang, l.username');
 		$this->db->from('penumpang pe');
 		$this->db->join('penerbangan pb', 'pe.id_penerbangan = pb.id_penerbangan');
 		$this->db->join('login l', 'pe.username = l.username');
 		$this->db->where('l.username',$username);
 		return $this->db->get($this->nama_table)->result();
	}

	function ambil_data_id_penumpang($id) {
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