	<footer class="footer">
    	<div class="wrap">
    		<div class="row flex flex-row flex-row--subscribe">
	    		<p class="p--copyright p--copyright-center">&copy;2016 The Pixelry LLC</p>
			</div>
        </div>
    </footer>

	<script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>assets/js/dist/jquery-2.3.3.min.js"><\/script>')</script>

    <script src="<?php echo base_url(); ?>assets/js/dist/the-pixelry.min.js"></script>

    <?php if (ENVIRONMENT == 'prod'): ?>
	    <script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-76287206-1', 'auto');
			ga('send', 'pageview');
		</script>
	<?php endif; ?>