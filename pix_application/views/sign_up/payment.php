<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Payment | Code Camps for Girls in Greenville, SC</title>
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
		    	<h2 class="section__header section__header--single">Payment</h2>
		    	<p class="p--signup">Thanks for signing your kiddo up for The Pixelry Code Camp!<br>To complete the sign up process and reserve her spot, click the button below to submit your payment.</p>
		    	<div class="row flex flex-row flex-row--center">
		    		<div>
		    			<?php
		    				require_once('./vendor/autoload.php');

							$stripe = array(
								"secret_key"      => STRIPE_SECRET_KEY,
								"publishable_key" => STRIPE_PUBLISHABLE_KEY
							);

							\Stripe\Stripe::setApiKey($stripe['secret_key']);
						?>
		    			<form action="/sign-up/payment/<?php echo $id; ?>" method="POST">
				    		<script
								src="https://checkout.stripe.com/checkout.js" class="stripe-button"
								data-key="<?php echo STRIPE_PUBLISHABLE_KEY; ?>"
								data-amount="10000"
								data-name="The Pixelry LLC"
								data-allow-remember-me="false"
								data-label="Submit Your Payment"
								data-image="/assets/img/dist/logo-stripe.jpg"
								data-locale="auto">
							</script>
						</form>
		    		</div>
				</div>
		    </div>
	    </section>
    </main>

    <?php echo $footer; ?>

</body>
</html>
