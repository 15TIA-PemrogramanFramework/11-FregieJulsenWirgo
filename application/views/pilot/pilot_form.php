<?php $this->load->view('templates/header'); ?>
<div class="wrapper">
	<!-- you can use the class main-raised if you want the main area to be as a page with shadows -->
	<div class="main main-raised" style="margin-top: 50px;">
		<div class="container">
			<form action="<?php echo $action; ?>" method="POST">
				<div class="col-sm-12">
					<div class="form-group label-floating">
						<label class="control-label">Nama Pilot</label>
						<input type="text" class="form-control" name="nama_pilot" value="<?php echo $nama_pilot; ?>">
					</div>
					<div class="form-group label-floating">
						<label class="control-label">Alamat</label>
						<input type="text" class="form-control" name="alamat_pilot" value="<?php echo $alamat_pilot; ?>">
					</div>
					<div class="form-group label-floating">
						<label class="control-label">No HP</label>
						<input type="text" class="form-control" name="no_hp_pilot" value="<?php echo $no_hp_pilot; ?>">
					</div>
				</div>
				<input type="hidden" name="id_pilot" value="<?php echo $id_pilot; ?>">
				<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
				<a href="<?php echo site_url('Pilot') ?>" class="btn btn-default">Cancel</a>
			</form>
		</div>
	</div>
</div>
<?php 
$this->load->view('templates/footer');
?>