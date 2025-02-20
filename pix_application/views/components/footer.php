	<footer class="footer">
    	<div class="wrap">
    		<div class="row flex flex-row flex-row--subscribe">
				<div id="mc_embed_signup">
					<form action="//thepixelry.us13.list-manage.com/subscribe/post?u=7f7791f7b93a0b89fe00b53d1&amp;id=df6084f913" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					    <div id="mc_embed_signup_scroll">
						<label for="mce-EMAIL">Subscribe to our mailing list</label>
						<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
					    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_7f7791f7b93a0b89fe00b53d1_df6084f913" tabindex="-1" value=""></div>
					    <input type="submit" value="SUBSCRIBE" name="subscribe" id="mc-embedded-subscribe" class="btn btn--inverse btn--subscribe">
					    </div>
					</form>
				</div>
    			<div>
	    			<p class="p--copyright">&copy;<?= date("Y") ?> The Pixelry LLC</p>
	    		</div>
			</div>
        </div>
    </footer>

	<script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>assets/js/dist/jquery-2.3.3.min.js"><\/script>')</script>

    <script src="/assets/js/dist/the-pixelry.min.js"></script>

    <?php if(ENVIRONMENT == 'local' || ENVIRONMENT == 'qa'): ?>
		<script src="<?php echo base_url(); ?>assets/js/populate-form.js"></script>
	<?php endif; ?>

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