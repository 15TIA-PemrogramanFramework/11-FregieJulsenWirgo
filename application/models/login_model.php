<?php
/**
 * 
 */
 class login_model extends CI_Model
 {

 	function login($username, $password)
 	{
 		$this->db->select('username, password, user');
 		$this->db->from('login');
 		$this->db->where('username', $username);
 		$this->db->where('password', $password);
 		$this->db->limit(1);

 		$query = $this->db->get();

 		if($query->num_rows() == 1)
 		{
 			return $query->result();
 		}
 		else
 		{
 			return false;
 		}

 	}
 } 
 ?>