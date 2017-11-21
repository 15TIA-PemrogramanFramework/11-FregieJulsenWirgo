<?php 
$this->load->view('templates/header');
?>
<div class="wrapper">
	<!-- you can use the class main-raised if you want the main area to be as a page with shadows -->
	<div class="main main-raised" style="margin-top: 50px;">
		<div class="container">
			<table class="table" style="margin-top: 30px;">
				<thead>
					<tr>
						<th class="text-center">No Penumpang</th>
						<th>No Penerbangan</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>No HP</th>
						<?php $user = $this->session->userdata('user');
							if ($user == 'Admin') { ?>
						<th>Username</th>
							<?php } ?>
						<th class="text-left">Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($penumpang as $key => $value) {?>
					<tr>
						<td class="text-center"><?php echo $key+1; ?></td>
						<td>GA<?php echo $value->id_penerbangan; ?></td>
						<td><?php echo $value->nama_penumpang; ?></td>
						<td><?php echo $value->alamat_penumpang; ?></td>
						<td><?php echo $value->no_hp_penumpang; ?></td>
						<?php $user = $this->session->userdata('user');
							if ($user == 'Admin') { ?>
						<td><?php echo $value->username; ?></td>
						<?php } ?>
						<td class="td-actions text-left">
							<?php $user = $this->session->userdata('user');
							if ($user == 'Admin') {
							 echo anchor(site_url('Penumpang/delete_penumpang/'.$value->id_penumpang),'<i class="fa fa-times"></i>','class="btn btn-danger btn-simple btn-xs"');
							} elseif ($user == 'Penumpang') {
								echo anchor(site_url('Penumpang/edit_penumpang/'.$value->id_penumpang),'<i class="fa fa-edit"></i>', 'class="btn btn-success btn-simple btn-xs">'); 
							} ?>
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