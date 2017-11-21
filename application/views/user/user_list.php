<?php 
$this->load->view('templates/header');
?>
<div class="wrapper">
	<!-- you can use the class main-raised if you want the main area to be as a page with shadows -->
	<div class="main main-raised" style="margin-top: 50px;">
		<div class="container">

			<div class="row">
				<div class="col-md-12 text-right" style="margin-top: 30px; margin-bottom: 10px;">
					<?php 
					 
					$user = $this->session->userdata('user');
					if ($user == 'Admin') { 
					echo anchor(site_url("user/tambah_user"),'<i class="fa fa-plus"></i> Tambah User','class="btn btn-primary"'); }?>
				</div>
			</div>
			<table class="table">
				<thead>
					<tr>
						<th class="text-center">Username</th>
						<th>Password</th>
						<th>User</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($usera as $key => $value) {?>
					<tr>
						<td class="text-center"><?php echo $value->username; ?></td>
						<td><?php echo $value->password; ?></td>
						<td><?php echo $value->user; ?></td>
								<td class="td-actions text-left">
									<?php
										
										echo anchor(site_url('User/delete_user/'.$value->username),'<i class="fa fa-times"></i>','class="btn btn-danger btn-simple btn-xs"');
									 ?>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>

				</div>
			</div>
		</div>

		<?php 
		$this->load->view('templates/footer');
		?>