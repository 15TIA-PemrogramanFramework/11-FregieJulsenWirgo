<?php $this->load->view('templates/header'); ?>
<div class="wrapper">
	<!-- you can use the class main-raised if you want the main area to be as a page with shadows -->
	<div class="main main-raised" style="margin-top: 50px;">
		<div class="container">
			<form action="<?php echo $action; ?>" method="POST">
				<div class="col-sm-12">
					<div class="form-group">
						<label>Tipe Pesawat</label>
						<select class="form-control select2" name="tipe_pesawat" id="tipe_pesawat" style="width: 100%;">
							<?php foreach ($tipe_pesawat as $key => $value) { ?>
							<option value="<?php echo $value->tipe_pesawat; ?>"><?php echo $value->tipe_pesawat;?></option>
							<?php } ?>
						</select>
					</div>

					<div class="form-group">
						<label>Tanggal Berangkat</label>
						<input class="datepicker form-control" type="text" name="tanggal" value="" />
					</div>

					<div class="form-group">
						<label>Dari</label>
						<select class="form-control select2" name="dari" id="dari" style="width: 100%;">
							<option value="Jakarta" <?php if($dari == 'Jakarta') { ?> selected="" <?php } ?>>Jakarta</option>
							<option value="Pekanbaru" <?php if($dari == 'Pekanbaru') { ?> selected="" <?php } ?>>Pekanbaru</option>
							<option value="Medan" <?php if($dari == 'Medan') { ?> selected="" <?php } ?>>Medan</option>
						</select>
					</div>

					<div class="form-group">
						<label>Tujuan</label>
						<select class="form-control select2" name="tujuan" id="tujuan" style="width: 100%;">
							<option value="Jakarta" <?php if($tujuan == 'Jakarta') { ?> selected="" <?php } ?>>Jakarta</option>
							<option value="Pekanbaru" <?php if($tujuan == 'Pekanbaru') { ?> selected="" <?php } ?>>Pekanbaru</option>
							<option value="Medan" <?php if($tujuan == 'Medan') { ?> selected="" <?php } ?>>Medan</option>
						</select>
					</div>

					<div class="form-group">
						<label>Waktu Keberangkatan</label><br>
						<input type="text" id="waktuberangkat" placeholder="" name="waktu_keberangkatan" >
					</div>

					<div class="form-group">
						<label>Status</label><br>
						<select class="form-control select2" name="status" id="status" style="width: 100%;">
							<option value="Dijadwalkan" <?php if($status == 'Dijadwalkan') { ?> selected="" <?php } ?>>Dijadwalkan</option>
							<option value="Mendarat" <?php if($status == 'Mendarat') { ?> selected="" <?php } ?>>Mendarat</option>
							<option value="Ditunda" <?php if($status == 'Ditunda') { ?> selected="" <?php } ?>>Ditunda</option>
						</select>
					</div>

				</div>
						<input type="hidden" name="id_penerbangan" value="<?php echo $id_penerbangan; ?>">
						<button type="submit" class="btn btn-primary" style="margin-top: 20px;"><?php echo $button; ?></button>
						<a href="<?php echo site_url('Penerbangan') ?>" class="btn btn-default" style="margin-top: 20px;">Cancel</a>
					</form>
				</div>
			</div>
		</div>
		<?php 
		$this->load->view('templates/footer');
		?>