<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Oo Airlines</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />


	<!-- CSS Files -->
	<link href="<?php echo base_url('assets/') ?>css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('assets/') ?>css/material-kit.css" rel="stylesheet"/>
	<link href="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" media="screen"
     href="<?php echo base_url('assets/') ?>css/bootstrap-datetimepicker.min.css">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="<?php echo base_url('assets/') ?>css/demo.css" rel="stylesheet" />

</head>

<?php $user = $this->session->userdata('user'); ?>
<!-- Main Menu -->
<div id="wrapper">
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand">Oo Airlines</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<?php if ($user == 'Admin') {
						echo menu_admin();
					} elseif ($user == 'Penumpang') {
						echo menu_penumpang();
					} else {
						echo menu();
					} ?>
				</ul>
				<ul class="nav navbar-top-links navbar-right">
					<?php 
					$user = $this->session->userdata('user');
					if ($user == 'Admin' || $user == 'Penumpang') { ?>
					<div class="col-md-3 dropdown">
						<a class="btn btn-simple dropdown-toggle" data-toggle="dropdown" style="color: white">
							<?php $username = $this->session->userdata('username'); 
							echo $username?>
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo site_url('Login/logout'); ?>">Logout</a></li>
						</ul>
					</div>
					<?php 
				}
				elseif ($user != 'Admin' || $user != 'Penumpang') {
					echo anchor(site_url("Login"),'<i class="fa fa-sign-in fa-fw"></i>Sign in','class="btn btn-primary"');}
					?>
				</ul>

			</div>
		</div>
	</nav>
</div>