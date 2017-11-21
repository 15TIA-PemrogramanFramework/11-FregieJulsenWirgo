<?php 
/**
* 
*/
class penerbangan_model extends CI_model
{
	
	public $nama_table = "penerbangan";
	public $id = 'id_penerbangan';
	public $order = "DESC";

	function __construct()
	{
		parent::__construct();
	}

	//untuk mengambil data seluruh mahasiswa
	function ambil_data_penerbangan() {
		$this->db->distinct();
 		$this->db->select('pb.id_penerbangan, ps.tipe_pesawat tipe_pesawat, pb.tanggal tanggal, pb.dari dari, pb.tujuan, pb.waktu_keberangkatan, pb.status');
 		$this->db->from('penerbangan pb');
 		$this->db->join('pesawat ps', 'ps.id_pesawat = pb.id_pesawat');
 		return $this->db->get($this->nama_table)->result();
	}

	function ambil_data_id_penerbangan($id) {
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