<?php 
/**
* 
*/
class pesawat_model extends CI_model
{
	
	public $nama_table = "pesawat";
	public $id = 'id_pesawat';
	public $order = "DESC";

	function __construct()
	{
		parent::__construct();
	}

	//untuk mengambil data seluruh mahasiswa
	function ambil_data_pesawat() {
		$this->db->distinct();
 		$this->db->select('ps.id_pesawat, ps.tipe_pesawat tipe_pesawat, pi.nama_pilot nama_pilot');
 		$this->db->from('pesawat ps');
 		$this->db->join('pilot pi', 'ps.id_pilot = pi.id_pilot');
 		return $this->db->get($this->nama_table)->result();
	}

	function ambil_data_id($id) {
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