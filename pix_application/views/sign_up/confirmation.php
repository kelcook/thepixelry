<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Confirmation | Code Camps for Girls in Greenville, SC</title>
	<meta name="description" content="Code Camp for Girls in Greenville, SC">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dist/the-pixelry.min.css">
	<script src="<?php echo base_url(); ?>assets/js/dist/vendor/modernizr-2.8.3.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js"></script>
</head>
<body>
	<header class="header header--signup">
		<nav class="nav nav--signup">
		    <ul class="nav__list">
		        <li class="nav__list-item nav__list-item--button"><a class="btn btn--signup" href="<?php echo base_url(); ?>">Home</a></li>
		    </ul>
		</nav>
    </header>
	<main class="main">
	    <section class="section section--signup">
    		<div class="wrap">
		    	<h2 class="section__header section__header--single">Registration &amp; Payment Confirmation</h2>
		    	<div class="row flex flex-row">
		    		<div>
		    			<p>Thank you! <?php echo $c_first_name.' '.$c_last_name; ?> has been successfully registered for The Pixelry Code Camp. We've sent a confirmation email with the information below to <?php echo $p_email; ?>.</p>
		    		</div>
				</div>
		    	<div class="row flex flex-row flex-row--confirmation">
		    		<div>
		    			<h3 class="h3--confirmation">Information About Camp:</h3>
			    		<h4 class="h4--subhead">Location</h4>
			    		<p>Erwin&nbsp;Penland, 125&nbsp;E&nbsp;Broad&nbsp;St, Greenville,&nbsp;SC 29601 <a href="https://goo.gl/maps/v3WrMj5npyp" target="_blank" title="Google Maps: Erwin Penland">(Google Maps)</a></p>
			    		<p>The camp will take place in Building 2 on the 3rd floor. A team member will be outside between 9:30&nbsp;a.m. and 9:45&nbsp;a.m. to provide access to the building.</p>
			    		<p>If you have questions regarding the location, please contact Kelly at (407) 697-7395.</p>
		    		</div>
		    	</div>
		    	<div class="row flex flex-row flex-row--confirmation">
		    		<div>
		    			<h4 class="h4--subhead">CodePen Account</h4>
		    			<p>Please <a href="https://codepen.io/signup/free" target="_blank" title="Create a free CodePen account">create a free CodePen account</a> for your kiddo, and bring the username and password to the camp so she can sign in to her account upon arrival.</p>
		 			</div>
		 		</div>
		 		<?php if($provide_laptop == 1): ?>
			    	<div class="row flex flex-row flex-row--confirmation">
			    		<div>
			    			<h4 class="h4--subhead">Laptops</h4>
			    			<p>Please don't forget the power cord!</p>
			 			</div>
			 		</div>
			 	<?php endif; ?>
		    </div>
	    </section>
    </main>

    <?php echo $footer; ?>

</body>
</html>
