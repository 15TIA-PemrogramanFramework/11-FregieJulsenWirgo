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
					echo anchor(site_url("pilot/tambah_pilot"),'<i class="fa fa-plus"></i> Tambah Data','class="btn btn-primary"'); }?>
				</div>
			</div>
			<table class="table">
				<thead>
					<tr>
						<th class="text-center">No Pilot</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>No HP</th>
						<?php 
								$user = $this->session->userdata('user');
								if ($user == 'Admin') { ?>
						<th class="text-left">Actions</th>
						<?php } ?>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($pilot as $key => $value) {?>
					<tr>
						<td class="text-center" style="padding: 15px 15px 15px 15px;"><?php echo $key+1; ?></td>
						<td style="padding: 15px 15px 15px 15px;"><?php echo $value->nama_pilot; ?></td>
						<td style="padding: 15px 15px 15px 15px;"><?php echo $value->alamat_pilot; ?></td>
						<td style="padding: 15px 15px 15px 15px;"><?php echo $value->no_hp_pilot; ?></td>
						<td class="td-actions text-left">
							<?php 
								$user = $this->session->userdata('user');
								if ($user == 'Admin') { 
							echo anchor(site_url('Pilot/edit_pilot/'.$value->id_pilot),'<i class="fa fa-edit"></i>', 'class="btn btn-success btn-simple btn-xs">'); 
							 echo anchor(site_url('Pilot/delete_pilot/'.$value->id_pilot),'<i class="fa fa-times"></i>','class="btn btn-danger btn-simple btn-xs"'); }?>
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