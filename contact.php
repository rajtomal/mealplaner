<?php include ('inc/header.php');?>

<!--Inner Banner Section Start-->
<div class="tj-inner-banner" style="background:url('images/inner-banner-1.jpg') top center no-repeat">
	<div class="container">
		<h2>Contact Us</h2>
	</div>
</div>
<!--Inner Banner Section End-->

<!--Breadcrumb Section Start-->
<div class="tj-breadcrumb">
	<div class="container">
		<ul class="breadcrumb-list">
			<li><a href="index.php">Home</a></li>
			<li class="active">Contact Us</li>
		</ul>
	</div>
</div>
<!--Breadcrumb Section End-->

<!--Contact Section Start-->	
<section class="tj-contact-section">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-8">
				<div class="tj-heading-style">
					<h3>Contact Us</h3>
				</div>
				<div class="form-holder">
					<form method="POST" class="tj-contact-form" id="contact-form">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<!--Inner Holder Start-->
								<div class="inner-holder">
									<label for="name">Name</label>
									<input placeholder="Enter Your Name" name="name" type="text" id="name" required>
								</div>
								<!--Inner Holder End-->
							</div>
							<div class="col-md-6 col-sm-6 no-pad">
								<!--Inner Holder Start-->
								<div class="inner-holder">
									<label for="email">Email</label>
									<input placeholder="Enter Your Email" name="email" type="email" id="email">
								</div>
								<!--Inner Holder End-->
							</div>
							<div class="col-md-12 col-sm-12">
								<!--Inner Holder Start-->
								<div class="inner-holder">
									<label for="subject">Subject</label>
									<input placeholder="Your Subject" name="subject" type="text" id="subject">
								</div>
								<!--Inner Holder End-->
							</div>
							<div class="col-md-12 col-sm-12">
								<!--Inner Holder Start-->
								<div class="inner-holder">
									<label for="message">Message</label>
									<textarea name="message" placeholder="Your Message" id="message"></textarea>
								</div>
								<!--Inner Holder End-->
							</div>
							<div class="col-md-12 col-sm-12">
								<div class="inner-holder">
									<button class="btn-submit" type="submit" id="frm_submit_btn">Send Message <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="address-box">
					<div class="add-info">
						<div class="flag">
							<img src="images/flag.png" alt="logo"/>
						</div>
					</div>
					<div class="add-info">
						<span class="icon-mail-envelope-open icomoon"></span>
						<p>
							General information
							<a href="mailto:info@saferide.co.tz">info@saferide.co.tz</a>
						</p>
					</div>
					<!-- <div class="add-info">
						<span class="icon-mail-envelope-open icomoon"></span>
						<p>
							Franchise Desk
							<a href="mailto:franchise@saferide.co.za">franchise@saferide.co.za</a>
						</p>
					</div>
					<div class="add-info">
						<span class="icon-mail-envelope-open icomoon"></span>
						<p>
							Investors Relationship
							<a href="mailto:investor@saferide.co.za">investor@saferide.co.za</a>
						</p>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</section>
<!--Contact Section End-->	

<?php include ('inc/footer.php');?>