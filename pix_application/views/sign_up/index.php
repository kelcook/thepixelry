<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign Up | Code Camps and Workshops for Girls in Greenville, SC</title>
	<meta name="description" content="Sign Up your kiddo for The Pixelry, code camps and workshops for girls located in Greenville, SC. Our goal is to inspire, educate and empower the next generation of women in technology.">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dist/the-pixelry.min.css">
	<script src="<?php echo base_url(); ?>assets/js/dist/vendor/modernizr-2.8.3.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js"></script>

	<meta property="og:url"         content="https://thepixelry.com" />
	<meta property="og:type"        content="website" />
	<meta property="og:site_name"   content="The Pixelry" />
	<meta property="og:title"       content="The Pixelry | Code Camps and Workshops for Girls in Greenville, SC" />
	<meta property="og:description" content="Our goal is to inspire, educate and empower the next generation of women in technology. The Pixelry offers code camps and workshops for girls in Greenville, SC and is run by a group of professional women who believe in the importance of high quality education." />
	<meta property="og:image"       content="https://thepixelry.com/assets/img/dist/image-social-facebook.jpg" />
</head>
<body>
	<!--[if lt IE 10]>
        <p class="p--browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
	<header class="header header--signup js-header">
		<nav class="nav nav--signup">
		    <ul class="nav__list">
		        <li class="nav__list-item nav__list-item--button"><a class="btn btn--inverse btn--signup" href="<?php echo base_url(); ?>">Home</a></li>
		    </ul>
		</nav>
    </header>
	<main class="main">
	    <section class="section section--signup">
    		<div class="wrap">
    			<h2 class="section__header section__header--signup">Sign Up</h2>
		    	<p class="p--signup">Sign your kiddo up for The&nbsp;Pixelry&rsquo;s Introduction to Web&nbsp;Development workshop on Saturday,&nbsp;September&nbsp;10,&nbsp;2016.</p>
		    	<?php if(validation_errors()): ?>
		    		<p class="p--signup p--required">Oops! Looks like we are missing some info. Please fill in the highlighted fields and submit the form again.</p>
		    	<?php endif; ?>
		    	<form class="form form--signup js-signup-form" name="signup_form" action="/sign-up" method="post">
			    	<?php if(ENVIRONMENT == 'local' || ENVIRONMENT == 'qa'): ?>
			    		<div class="form__row">
			    			<a href="" class="js-populate-form">Populate Form</a>
			    		</div>
			    	<?php endif; ?>
		    		<!-- <div class="form__row">
		    			<div class="form__group">
				    		<label class="form__label" for="workshop">Camp Date<span class="form__label--required">*</span></label>
				    		<select id="workshop" class="form__input form__input--select" name="workshop">
				    			<option value="">Select Date</option>
				    			<option value="1466208000">6/18/2016&nbsp;&nbsp;1:00-5:00 p.m.</option>
				    			<option value="1466812800">6/25/2016&nbsp;&nbsp;1:00-5:00 p.m.</option>
				    		</select>
				    		<p class="form__error js-form-error <?php if(form_error('workshop')): ?>is-active<?php endif; ?>">Please select a camp date.</p>
				    	</div>
			    	</div> -->
		    		<div class="form__row">
		    			<div class="form__group">
				    		<label class="form__label" for="p_first_name">Parent&rsquo;s First Name<span class="form__label--required">*</span></label>
				    		<input id="p_first_name" class="form__input form__input--text" type="text" name="p_first_name" value="<?php echo set_value('p_first_name'); ?>">
				    		<p class="form__error js-form-error <?php if(form_error('p_first_name')): ?>is-active<?php endif; ?>">Please enter your first name.</p>
				    	</div>
				    	<div class="form__group">
				    		<label class="form__label" for="p_last_name">Parent&rsquo;s Last Name<span class="form__label--required">*</span></label>
				    		<input id="p_last_name" class="form__input form__input--text" type="text" name="p_last_name" value="<?php echo set_value('p_last_name'); ?>">
				    		<p class="form__error js-form-error <?php if(form_error('p_last_name')): ?>is-active<?php endif; ?>">Please enter your last name.</p>
				    	</div>
			    	</div>
			    	<div class="form__row">
		    			<div class="form__group">
				    		<label class="form__label" for="p_email">Parent&rsquo;s Email<span class="form__label--required">*</span></label>
				    		<input id="p_email" class="form__input form__input--text" type="text" name="p_email" value="<?php echo set_value('p_email'); ?>">
				    		<p class="form__error js-form-error <?php if(form_error('p_email')): ?>is-active<?php endif; ?>">Please enter a valid email address.</p>
				    	</div>
				    	<div class="form__group">
				    		<label class="form__label" for="p_phone">Parent&rsquo;s Phone Number<span class="form__label--required">*</span></label>
				    		<input id="p_phone" class="form__input form__input--text" type="tel" name="p_phone" maxlength="14" value="<?php echo set_value('p_phone'); ?>" placeholder="xxx-xxx-xxxx">
				    		<p class="form__error js-form-error <?php if(form_error('p_phone')): ?>is-active<?php endif; ?>">Please enter a valid phone number.</p>
				    	</div>
			    	</div>
			    	<div class="form__row">
		    			<div class="form__group">
				    		<label class="form__label" for="address_line_1">Address Line 1<span class="form__label--required">*</span></label>
				    		<input id="address_line_1" class="form__input form__input--text" type="text" name="address_line_1" value="<?php echo set_value('address_line_1'); ?>">
				    		<p class="form__error js-form-error <?php if(form_error('address_line_1')): ?>is-active<?php endif; ?>">Please enter your home address.</p>
				    	</div>
				    	<div class="form__group">
				    		<label class="form__label" for="address_line_2">Address Line 2</label>
				    		<input id="address_line_2" class="form__input form__input--text" type="text" name="address_line_2" value="<?php echo set_value('address_line_2'); ?>">
				    	</div>
			    	</div>
			    	<div class="form__row">
		    			<div class="form__group">
				    		<label class="form__label" for="city">City<span class="form__label--required">*</span></label>
				    		<input id="city" class="form__input form__input--text" type="text" name="city" value="<?php echo set_value('city'); ?>">
				    		<p class="form__error js-form-error <?php if(form_error('city')): ?>is-active<?php endif; ?>">Please enter your city.</p>
				    	</div>
				    	<div class="form__group">
				    		<label class="form__label" for="state">State<span class="form__label--required">*</span></label>
				    		<div class="styled-select">
				    			<?php echo $state_dropdown; ?>
				    		</div>
				    		<p class="form__error js-form-error <?php if(form_error('state')): ?>is-active<?php endif; ?>">Please enter your state.</p>
				    	</div>
				    	<div class="form__group">
				    		<label class="form__label" for="zip_code">Zip Code<span class="form__label--required">*</span></label>
				    		<input id="zip_code" class="form__input form__input--text" type="tel" maxlength="5" name="zip_code" value="<?php echo set_value('zip_code'); ?>">
				    		<p class="form__error js-form-error <?php if(form_error('zip_code')): ?>is-active<?php endif; ?>">Please enter your zip code.</p>
				    	</div>
			    	</div>
			    	<div class="form__row">
		    			<div class="form__group">
				    		<label class="form__label" for="c_first_name">Child&rsquo;s First Name<span class="form__label--required">*</span></label>
				    		<input id="c_first_name" class="form__input form__input--text" type="text" name="c_first_name" value="<?php echo set_value('c_first_name'); ?>">
				    		<p class="form__error js-form-error <?php if(form_error('c_first_name')): ?>is-active<?php endif; ?>">Please enter your child&rsquo;s first name.</p>
				    	</div>
				    	<div class="form__group">
				    		<label class="form__label" for="c_last_name">Child&rsquo;s Last Name<span class="form__label--required">*</span></label>
				    		<input id="c_last_name" class="form__input form__input--text" type="text" name="c_last_name" value="<?php echo set_value('c_last_name'); ?>">
				    		<p class="form__error js-form-error <?php if(form_error('c_last_name')): ?>is-active<?php endif; ?>">Please enter your child&rsquo;s last name.</p>
				    	</div>
			    	</div>
			    	<div class="form__row">
		    			<div class="form__group">
				    		<label class="form__label" for="c_age">Child&rsquo;s Age<span class="form__label--required">*</span></label>
				    		<div class="styled-select">
					    		<select id="c_age" class="form__input form__input--select" name="c_age">
					    			<option value="">Select Age</option>
					    			<option value="9" <?php echo set_select('c_age', '9'); ?>>9</option>
					    			<option value="10" <?php echo set_select('c_age', '10'); ?>>10</option>
					    			<option value="11" <?php echo set_select('c_age', '11'); ?>>11</option>
					    			<option value="12" <?php echo set_select('c_age', '12'); ?>>12</option>
					    		</select>
					    	</div>
				    		<p class="form__error js-form-error <?php if(form_error('c_age')): ?>is-active<?php endif; ?>">Please select your child&rsquo;s age.</p>
				    	</div>
				    	<div class="form__group">
				    		<label class="form__label" for="c_shirt_size">Child&rsquo;s T-shirt Size<span class="form__label--required">*</span></label>
				    		<div class="styled-select">
					    		<select id="c_shirt_size" class="form__input form__input--select" name="c_shirt_size">
					    			<option value="">Select T-shirt Size</option>
					    			<option value="XS" <?php echo set_select('c_shirt_size', 'XS'); ?>>Adult XS</option>
					    			<option value="S" <?php echo set_select('c_shirt_size', 'S'); ?>>Adult S</option>
					    			<option value="M" <?php echo set_select('c_shirt_size', 'M'); ?>>Adult M</option>
					    			<option value="L" <?php echo set_select('c_shirt_size', 'L'); ?>>Adult L</option>
					    			<option value="XL" <?php echo set_select('c_shirt_size', 'XL'); ?>>Adult XL</option>
					    		</select>
					    	</div>
				    		<p class="form__error js-form-error <?php if(form_error('c_shirt_size')): ?>is-active<?php endif; ?>">Please select your child&rsquo;s t-shirt size.</p>
				    	</div>
			    	</div>
			    	<hr>
			    	<div class="form__row">
				    	<div class="form__group">
				    		<p><em>Latptops will be provided, but we understand that your child may prefer to bring a laptop from home. Please let us know if your child prefers to bring a laptop from home.</em></p>
				    		<p class="form__label--faux">My child will bring a laptop.<span class="form__label--required">*</span></p>
				    		<div class="form__wrap--radio">
				    			<label class="form__label" for="provide_laptop_y">
					    			<input id="provide_laptop_y" class="form__input form__input--radio js-provide-laptop" type="radio" name="provide_laptop" value="1" <?php echo set_radio('provide_laptop', '1'); ?>>
					    			<span>Yes <em class="form__message is-hidden js-power-cord">Please bring the power cord too!</em></span>
					    		</label>
				    		</div>
				    		<div class="form__wrap--radio">
				    			<label class="form__label" for="provide_laptop_n">
					    			<input id="provide_laptop_n" class="form__input form__input--radio js-provide-laptop" type="radio" name="provide_laptop" value="0" <?php echo set_radio('provide_laptop', '0'); ?>>
					    			<span>No</span>
					    		</label>
				    		</div>

				    		<p class="form__error js-form-error <?php if(form_error('provide_laptop')): ?>is-active<?php endif; ?>">This field is required.</p>
				    	</div>
			    	</div>
			    	<hr>
			    	<div class="form__row">
				    	<div class="form__group">
				    		<p><em>Refreshments will be provided. If your child has a food allergy or sensitivity, please let us know so we may plan accordingly.</em></p>
				    		<p class="form__label--faux">My child has a food allergy or sensitivity.<span class="form__label--required">*</span></p>
				    		<div class="form__wrap--radio">
				    			<label class="form__label" for="food_allergy_y">
				    				<input id="food_allergy_y" class="form__input form__input--radio js-food-allergy" type="radio" name="food_allergy" value="1" <?php echo set_radio('food_allergy', '1'); ?>>
				    				<span>Yes</span>
				    			</label>
				    		</div>
				    		<div class="form__wrap--radio">
				    			<label class="form__label" for="food_allergy_n">
				    				<input id="food_allergy_n" class="form__input form__input--radio js-food-allergy" type="radio" name="food_allergy" value="0" <?php echo set_radio('food_allergy', '0'); ?>>
				    				<span>No</span>
				    			</label>
				    		</div>
				    		<p class="form__error js-form-error <?php if(form_error('food_allergy')): ?>is-active<?php endif; ?>">This field is required.</p>
				    	</div>
			    	</div>
			    	<div class="form__row">
				    	<div class="form__group <?php if(empty($food_allergy)): ?>form__group--hidden<?php endif; ?> js-food-allergy-explain">
				    		<label class="form__label" for="food_allergy_explain">Please explain:<span class="form__label--required">*</span></label>
				    		<textarea id="food_allergy_explain" class="form__input form__input--textarea" name="food_allergy_explain"><?php echo set_value('food_allergy_explain'); ?></textarea>
				    		<p class="form__error js-form-error <?php if(form_error('food_allergy_explain')): ?>is-active<?php endif; ?>">This field is required.</p>
				    	</div>
				    </div>
			    	<hr>
			    	<div class="form__row">
				    	<div class="form__group">
				    		<input id="waiver_1" class="form__input form__input--checkbox" type="checkbox" name="waiver_1" value="1" <?php echo set_checkbox('waiver_1', '1'); ?>>
				    		<label class="form__label form__label--checkbox" for="waiver_1"><strong>HEALTH SAFETY DURING WORKSHOPS:</strong><span class="form__label--required">*</span> I&nbsp;give my permission for my child to attend The&nbsp;Pixelry’s code workshop. Just in case there is an emergency involving my child, I&nbsp;give permission to the authorized personnel of The Pixelry LLC to provide emergency care through paramedics and a local hospital if needed.</label>
				    		<p class="form__error js-form-error <?php if(form_error('waiver_1')): ?>is-active<?php endif; ?>">This field is required.</p>
				    	</div>
			    	</div>
			    	<div class="form__row">
				    	<div class="form__group">
			    			<input id="waiver_2" class="form__input form__input--checkbox" type="checkbox" name="waiver_2" value="1" <?php echo set_checkbox('waiver_2', '1'); ?>>
			    			<label class="form__label form__label--checkbox" for="waiver_2"><strong>INTERNET USAGE WORKSHOPS:</strong><span class="form__label--required">*</span> I&nbsp;understand that my child will have monitored access to the Internet. The&nbsp;Pixelry will attempt to monitor all usage, but have no control over the information available on the Internet. As my child&rsquo;s legal guardian, I will not hold The&nbsp;Pixelry responsible for any misuse of the Internet by the child and/or participants at the workshop.</label>
				    		<p class="form__error js-form-error <?php if(form_error('waiver_2')): ?>is-active<?php endif; ?>">This field is required.</p>
				    	</div>
			    	</div>
			    	<div class="form__row">
				    	<div class="form__group">
			    			<input id="waiver_3" class="form__input form__input--checkbox" type="checkbox" name="waiver_3" value="1" <?php echo set_checkbox('waiver_3', '1'); ?>>
			    			<label class="form__label form__label--checkbox" for="waiver_3"><strong>SOFTWARE USED DURING WORKSHOPS:</strong><span class="form__label--required">*</span> I&nbsp;understand that my child will be using <a href="http://codepen.io/" target="_blank" title="CodePen">CodePen</a>, Internet based software for coding, during this workshop. I&nbsp;agree to <a href="https://codepen.io/signup/free" target="_blank" title="Create a CodePen account">create a CodePen account</a> for my child and bring the username and password to the workshop so my child can sign in to their account upon arrival.</label>
				    		<p class="form__error js-form-error <?php if(form_error('waiver_3')): ?>is-active<?php endif; ?>">This field is required.</p>
				    	</div>
			    	</div>
			    	<div class="form__row">
				    	<div class="form__group">
				    		<input id="waiver_4" class="form__input form__input--checkbox" type="checkbox" name="waiver_4" value="1" <?php echo set_checkbox('waiver_4', '1'); ?>>
				    		<label class="form__label form__label--checkbox" for="waiver_4"><strong>PHOTOGRAPHY DURING WORKSHOPS:</strong> I&nbsp;understand that the Pixelry may take photos and/or videos during the workshop for educational or marketing purposes, and I&nbsp;grant permission to use photos and/or videos of my child from the workshop session. Such use includes the display, distribution, publication, transmission, or use of photographs, images, and/or video taken of my child for use in materials that include, but may not be limited to, printed materials such as brochures and newsletters, videos, and digital images such as those on The&nbsp;Pixelry website.</label>
				    	</div>
			    	</div>
			    	<hr>
				    <div class="form__row">
				    	<div class="form__group form__group--captcha">
				    		<label class="form__label form__label--captcha">Security Check<span class="form__label--required">*</span></label>
			    			<div class="g-recaptcha" data-sitekey="6LeZvB8TAAAAAMDx6TRkBBgnCF7iSllzGiHbW9WJ"></div>
				    		<p class="form__error js-form-error <?php if(form_error('g-recaptcha-response')): ?>is-active<?php endif; ?>">This field is required.</p>
				    	</div>
			    	</div>
			    	<div class="form__row flex flex-row flex-row--right">
			    		<button type="submit" class="btn">CONTINUE TO PAYMENT</button>
			    	</div>
		    	</form>
		    </div>
	    </section>
    </main>

    <?php echo $footer; ?>

</body>
</html>
