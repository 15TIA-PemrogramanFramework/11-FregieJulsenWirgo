<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
	function menu_admin()
	{
		return '<li><a href="'.site_url('Penerbangan').'">Penerbangan</a></li>
        		<li><a href="'.site_url('Pesawat').'">Pesawat</a></li>
        		<li><a href="'.site_url('Pilot').'">Pilot</a></li>
        		<li><a href="'.site_url('Penumpang').'">Penumpang</a></li>
        		<li><a href="'.site_url('User').'">User</a></li>
        		';
	}

	function menu()
	{
		return '<li><a href="'.site_url('Penerbangan').'">Penerbangan</a></li>
        		';
	}

	function menu_penumpang()
	{
		return '<li><a href="'.site_url('Penerbangan').'">Penerbangan</a></li>
        		<li><a href="'.site_url('Pesawat').'">Pesawat</a></li>
        		<li><a href="'.site_url('Pilot').'">Pilot</a></li>
        		<li><a href="'.site_url('Penumpang').'">Penumpang</a></li>
        		';
	}