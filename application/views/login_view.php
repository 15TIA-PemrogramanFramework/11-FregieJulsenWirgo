<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Garuda Indonesia</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />


	<!-- CSS Files -->
	<link href="<?php echo base_url('assets/') ?>css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('assets/') ?>css/material-kit.css" rel="stylesheet"/>
	<link href="<?php echo base_url('assets/') ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet"/>
	<link href="<?php echo base_url('assets/') ?>css/bootstrap-datetimepicker.css" rel="stylesheet"/>

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="<?php echo base_url('assets/') ?>css/demo.css" rel="stylesheet" />

</head>

			<div class="container">
				<div style="margin-top: 200px">
				<div class="row">
					<div class="col-md-4 col-md-offset-4">
						<div class="card card-signup">
							<form class="form" method="POST" action="">
								
								<div class="header header-primary text-center">
									<h4>Login</h4>
								</div>
								<div class="content">

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">face</i>
										</span>
										<input type="text" class="form-control" placeholder="Username..." name="username" id="username" required>
									</div>

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
										<input type="password" placeholder="Password..." class="form-control" name="password" id="password" required />
									</div>
								</div>
								<div class="footer text-center">
									<input type="submit" value="Get Started" class="btn btn-simple btn-primary btn-lg">
								</div>
							</form>
						</div>

					</div>
				</div>
				</div>
			</div>