<?php 
/**
* 
*/
class user extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	function index() 
	{
		$data['usera']=$this->user_model->ambil_data_user();
		$this->load->view('user/user_list',$data);
	}

	function tambah_user()
	{
		$data=array(
			'username'=>set_value('username'),
			'password'=>set_value('password'),
			'user'=>set_value('user'),
			'button'=>'Tambah',
			'action'=>site_url('User/tambah_aksi_user')
		);
		$this->load->view('user/user_form',$data);
	}

	function tambah_aksi_user()
	{
		$data=array(
			'username'=>$this->input->post('username'),
			'password'=>$this->input->post('password'),
			'user'=>$this->input->post('user')
		);
		$this->user_model->tambah_data($data);
		redirect(site_url('User'));
	}

	function delete_user($id_user)
	{
		$this->user_model->hapus_data($id_user);
		redirect(site_url('User'));
	}

	function edit_user($id_user)
	{
		$login=($this->user_model->ambil_data_id_user($id_user));
		
		//Mencari Indeks Anggota
		$user=($this->user_model->ambil_data_id_user($login->username));
		$arrUser = $this->user_model->ambil_data_user();
		$indexUser=0; 
		foreach ($arrUser as $key => $value) {
			if($value->user == $user->user){
				break;
			}
			else{
				$indexUser++;
			}
		}

		$nilai=$this->user_model->ambil_data_id_user($id_user);
		$data=array(
			'username'=>set_value('username',$nilai->username),
			'password'=>set_value('password',$nilai->password),
			'user'=>$nilai->user,
			'button'=>'Edit',
			'action'=>site_url('User/edit_aksi_user')
		);
		$this->load->view('user/user_form',$data);
	}

	function edit_aksi_user()
	{
		$data=array(
			'tipe_user'=>$this->input->post('tipe_user'),
			'nama_user'=>$this->input->post('nama_user')
		);
		$id_user=$this->input->post('id_user');
		$this->user_model->edit_data($id_user,$data);
		redirect(site_url('User'),$username);
	}
}
?>