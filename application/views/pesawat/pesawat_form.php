<?php $this->load->view('templates/header'); ?>
<body onload="matchIndex()"">
<div class="wrapper">
	<!-- you can use the class main-raised if you want the main area to be as a page with shadows -->
	<div class="main main-raised" style="margin-top: 50px;">
		<div class="container">
			<form action="<?php echo $action; ?>" method="POST">
				<div class="col-sm-12">
					<div class="form-group label-floating">
						<label class="control-label">Tipe Pesawat</label>
						<input type="text" class="form-control" name="tipe_pesawat" value="<?php echo $tipe_pesawat; ?>">
					</div>
				</div>
				<div class="col-sm-12">
					<div class="form-group label-floating">
						<label class="control-label">Pilot</label>
						<select class="form-control select2" name="id_pilot" id="nama_pilot" style="width: 100%;">
							<?php foreach ($nama_pilot as $key => $value) { ?>
							<option value="<?php echo $value->id_pilot; ?>"><?php echo $value->nama_pilot;?></option>
							<?php } ?>
						</select>
					</div>
				</div>
				<input type="hidden" name="id_pesawat" value="<?php echo $id_pesawat; ?>">
				<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
				<a href="<?php echo site_url('Pesawat') ?>" class="btn btn-default">Cancel</a>
			</form>
		</div>
	</div>
</div>
<script>
	function matchIndex() {
		var indexPilot = <?php echo $id_pilot; ?>;
		document.getElementById("nama_pilot").selectedIndex = indexPilot;
	}
</script>
<?php 
$this->load->view('templates/footer');
?>