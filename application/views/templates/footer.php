	
</div>	
<footer class="footer">
	    <div class="container">
	        <nav class="pull-left">
	            <ul>
					<li>
						<a href="http://www.creative-tim.com">
							Creative Tim
						</a>
					</li>
					<li>
						<a href="http://presentation.creative-tim.com">
						   About Us
						</a>
					</li>
					<li>
						<a href="http://blog.creative-tim.com">
						   Blog
						</a>
					</li>
					<li>
						<a href="http://www.creative-tim.com/license">
							Licenses
						</a>
					</li>
	            </ul>
	        </nav>
	        <div class="copyright pull-right">
	            &copy; 2016, made with <i class="material-icons">favorite</i> by Creative Tim for a better web.
	        </div>
	    </div>
	</footer>
<script src="<?php echo base_url('assets/') ?>js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets/') ?>js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets/') ?>js/material.min.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="<?php echo base_url('assets/') ?>js/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="<?php echo base_url('assets/') ?>js/bootstrap-datepicker.js" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="<?php echo base_url('assets/') ?>js/material-kit.js" type="text/javascript"></script>
<script src="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"></script>


<script type="text/javascript"
src="<?php echo base_url('assets/') ?>js/bootstrap-datetimepicker.min.js">
</script>
<script type="text/javascript"
src="<?php echo base_url('assets/') ?>js/bootstrap-datetimepicker.pt-BR.js">
</script>

<script>
	var timepicker = new TimePicker('waktuberangkat', {
		lang: 'en',
		theme: 'dark'
	});
	timepicker.on('change', function(evt) {

		var value = (evt.hour || '00') + ':' + (evt.minute || '00');
		evt.element.value = value;

	});
</script>

<script>

	var timepicker = new TimePicker('waktudatang', {
		lang: 'en',
		theme: 'dark'
	});
	timepicker.on('change', function(evt) {

		var value = (evt.hour || '00') + ':' + (evt.minute || '00');
		evt.element.value = value;

	});
</script>

</body>
</html>