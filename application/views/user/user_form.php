<?php $this->load->view('templates/header'); ?>
<body onload="matchIndex()"">
<div class="wrapper">
	<!-- you can use the class main-raised if you want the main area to be as a page with shadows -->
	<div class="main main-raised" style="margin-top: 50px;">
		<div class="container">
			<form action="<?php echo $action; ?>" method="POST">
				<div class="col-sm-12">
					<div class="form-group label-floating">
						<label class="control-label">Username</label>
						<input type="text" class="form-control" name="username" value="<?php echo $username; ?>">
					</div>
					<div class="form-group label-floating">
						<label class="control-label">Password</label>
						<input type="text" class="form-control" name="password" value="<?php echo $password; ?>">
					</div>
					<div class="form-group label-floating">
						<label class="control-label">User</label>
						<select class="form-control select2" name="user" style="width: 100%;">
							<option value="Penumpang" <?php if($user == 'Penumpang') { ?> selected="" <?php } ?>>Penumpang</option>
							<option value="Admin" <?php if($user == 'Admin') { ?> selected="" <?php } ?>>Admin</option>
						</select>
					</div>
				</div>
				<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
				<a href="<?php echo site_url('User') ?>" class="btn btn-default">Cancel</a>
			</form>
		</div>
	</div>
</div>
<script>
	function matchIndex() {
		var indexUser = <?php echo $username; ?>;
		document.getElementById("user").selectedIndex = indexUser;
	}
</script>
<?php 
$this->load->view('templates/footer');
?>