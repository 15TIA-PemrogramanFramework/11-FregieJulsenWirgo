<?php 
$this->load->view('templates/header');
?>
<div class="wrapper">
	<!-- you can use the class main-raised if you want the main area to be as a page with shadows -->
	<div class="main main-raised" style="margin-top: 50px;">
		<div class="container">

			<div class="row">
				<div class="col-md-6 text-left" style="margin-top: 30px; margin-bottom: 10px;">
					Tanggal : 
					<?php echo tanggal() ?>
				</div>
				<div class="col-md-6 text-right" style="margin-top: 30px; margin-bottom: 10px;">
					<?php 
					$user = $this->session->userdata('user');
					if ($user == 'Admin') { 
						echo anchor(site_url("Penerbangan/tambah_penerbangan"),'<i class="fa fa-plus"></i> Tambah Data','class="btn btn-primary"'); }?>
					</div>
				</div>
				<table class="table">
					<thead>
						<tr>
							<th class="text-center">No Penerbangan</th>
							<th>Tipe Pesawat</th>
							<th>Tanggal</th>
							<th>Dari</th>
							<th>Tujuan</th>
							<th>Waktu Keberangkatan</th>
							<th>Status</th>
							<?php 
							$user = $this->session->userdata('user');
							if ($user == 'Admin' || $user == 'Penumpang') { ?>
							<th class="text-left">Actions</th>
							<?php } ?>
							
							
						</tr>
					</thead>
					<tbody>
						<?php foreach ($penerbangan as $key => $value) {?>
						<tr>
							<td class="text-center">GA<?php echo $value->id_penerbangan; ?></td>
							<td><?php echo $value->tipe_pesawat; ?></td>
							<td><?php echo $value->tanggal; ?></td>
							<td><?php echo $value->dari; ?></td>
							<td><?php echo $value->tujuan; ?></td>
							<td><?php echo $value->waktu_keberangkatan; ?></td>
							<td><?php if ($value->status == "Dijadwalkan") { ?>
								<span class="label label-info">
									<?php } 
									elseif ($value->status == "Mendarat") { ?>
									<span class="label label-success">
										<?php } 
										elseif ($value->status == "Ditunda") { ?>
										<span class="label label-danger">
											<?php } ?>
											<?php echo $value->status; ?> 
										</span>
									</td>
									<td class="td-actions text-left">
										<?php $user = $this->session->userdata('user');
										if ($user == 'Admin') {
											echo anchor(site_url('Penerbangan/edit_penerbangan/'.$value->id_penerbangan),'<i class="fa fa-edit"></i>', 'class="btn btn-success btn-simple btn-xs">');
											echo anchor(site_url('Penerbangan/delete_penerbangan/'.$value->id_penerbangan),'<i class="fa fa-times"></i>','class="btn btn-danger btn-simple btn-xs"');
										} elseif ($user == 'Penumpang') {
											echo anchor(site_url('Penumpang/tambah_penumpang/'.$value->id_penerbangan),'<i class="fa fa-plus"></i>', 'class="btn btn-success btn-simple btn-xs">');
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