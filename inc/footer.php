
<!--Footer Content Start-->
<section class="tj-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="links-widget widget">
					<h3>Explore Links</h3>
					<ul class="flinks-list">
						<!-- <li><i class="far fa-folder"></i><a href="franchise.php">Franchise Opportunity</a></li> -->
						<li><i class="far fa-folder"></i><a href="privacy.php">Privacy Policy</a></li>
						<li><i class="far fa-folder"></i><a href="terms.php">Terms and Conditions</a></li>
						<li><i class="far fa-folder"></i><a href="contact.php">Contact Us</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-6">
				<div class="about-widget widget">
					<h3>About SafeRide</h3>
		            <p>Every ride should feel safe, secured and comfy to everyone irrespective of their echelon. SAFERIDE is a transportation company that provides a shielded ride for all passengers at an affordable price.<br>
		            
		                With an economical payment from passengers, SAFERIDE is always
		                on the objective to get all the right...
		                <a href="about.php">Read More</a></p>
					<!--<ul class="fsocial-links">-->
					<!--	<li><a href="http://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>-->
					<!--	<li><a href="http://www.twitter.com/"><i class="fab fa-twitter"></i></a></li>-->
					<!--	<li><a href="http://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>-->
					<!--	<li><a href="http://www.pinterest.com/"><i class="fab fa-pinterest-p"></i></a></li>-->
					<!--	<li><a href="http://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>-->
					<!--</ul>-->
				</div>
			</div>
			<div class="col-md-3">
				<div class="contact-info widget">
					<h3>Contact Info</h3>
					<ul class="contact-box">
						<li>
							<i class="far fa-envelope-open"></i>
							<a href="mailto:primecab@booking.com">
							<span>General information:</span> info@saferide.co.tz</a>
						</li> 
						<!-- <li>
							<i class="far fa-envelope-open"></i>
							<a href="mailto:primecab@booking.com">
							<span>Franchise Desk:</span> franchise@saferide.co.za</a>
						</li>
						<li>
							<i class="far fa-envelope-open"></i>
							<a href="mailto:primecab@booking.com">
							<span>Investors Relationship:</span> investor@saferide.co.za</a>
						</li> -->
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Footer Content End-->
<!--Footer Copyright Start-->
<section class="tj-copyright">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<p>&copy; Copyrights 2021 <a href="index.php">SafeRide Technologies</a>. All Rights Reserved.</p>
			</div>
			<div class="col-md-6 col-sm-6">
				<ul class="payment-icons">
					<li><i class="fab fa-cc-visa"></i></li>
					<li><i class="fab fa-cc-mastercard"></i></li>
					<li><i class="fab fa-cc-paypal"></i></li>
					<li><i class="fab fa-cc-discover"></i></li>
					<li><i class="fab fa-cc-jcb"></i></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!--Footer Copyright End-->
</div>
<!--Wrapper Content End-->
<!-- Js Files Start -->
<script src="js/jquery-1.12.5.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/migrate.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/color-switcher.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/tweetie.js"></script>
<script src="js/custom.js"></script>
<!-- Js Files End -->

<!------For Active Menu------>
<script>
    $(document).ready(function() {
    var url = window.location.href;
    url = url.substring(0, (url.indexOf("#") == -1) ? url.length : url.indexOf("#"));
    url = url.substring(0, (url.indexOf("?") == -1) ? url.length : url.indexOf("?"));
    url = url.substr(url.lastIndexOf("/") + 1);
    if(url == ''){
    url = 'index.php';
    }
    $('.navbar-nav li').each(function(){
    var href = $(this).find('a').attr('href');
    if(url == href){
    $(this).addClass('active');
    }
    });
    });
</script>

</body>
</html>