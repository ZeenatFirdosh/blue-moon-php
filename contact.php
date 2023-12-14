<?php 
include 'header.php';
?>

	<!-- Banner -->
	<div class="banner inner-page contact-banner">
		<div class="banner-content">
			<div class="container">
				<div class="row">
					<div class="banner-text">
						<h1 class="page-title">Contact Us</h1>
						<p class="page-breadcrumb">Home / <span class="current">Contact Us</span></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End banner -->

	<!-- Contact -->
	<div class="contact section-pad">
		<div class="container">
			<div class="row">
				<div class="contact-wrapper row">
					<div class="contact-group col-md-6">
						<div class="contact-group">
							<h3 class="contact-heading">Contact Us</h3>
							<p>If you have questions or need help, please get in touch with us via email or telephone. </p>
							<ul class="contact-list">
								<li>
									<i class="fa fa-map" aria-hidden="true"></i>
									<span>Blue Sea Shipping Agency LLC.
Al Jawarah Building, Suite # 208
Khalid Bin Waleed Road, 
Bank Street, 
P.O. Box 51527, Dubai (UAE)
</span>
								</li>
								<li>
									<i class="fa fa-phone" aria-hidden="true"></i>
									<span>00971 4 3528438</span>
								</li>
								<li>
									<i class="fa fa-envelope" aria-hidden="true"></i>
									<span>irene@blueseashipping.com</span>
								</li>
								<li>
									<i class="fa fa-clock-o" aria-hidden="true"></i><span>Sat - Thu: 8AM - 7PM </span>
								</li>
							</ul>
						</div>
					</div>
					<div class="message col-md-6">
						<div class="message-group">
							<h3 class="contact-heading">send us a message</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor.</p>
							<form id="contact-us" class="form-message" action="form/contact.php" method="post">
								<div class="form-results"></div>
								<div class="form-group row">
									<div class="form-field col-md-6 form-m-bttm">
										<input name="contact-name" type="text" placeholder="Name *" class="form-control required">
									</div>
									<div class="form-field col-md-6">
										<input name="contact-email" type="email" placeholder="Email *" class="form-control required email">
									</div>
								</div>
								<div class="form-group row">
									<div class="form-field col-md-6 form-m-bttm">
										<input name="contact-phone" type="text" placeholder="Phone" class="form-control">
									</div>
									<div class="form-field col-md-6">
										<input name="contact-service" type="text" placeholder="Interest of Service" class="form-control">
									</div>
								</div>
								<div class="form-group row">
									<div class="form-field col-md-12">
										<textarea name="contact-message" placeholder="Messages *" class="area-from form-control required"></textarea>
									</div>
								</div>
								<input type="text" class="hidden" name="form-anti-honeypot" value="">
								<button type="submit" class="btn solid-btn sb-h">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact -->

	<!-- Map -->
	<div class="map-holder contact-page hidden">
		<div id="gmap"></div>
	</div>
	<!-- End map -->
	<?php 
	include 'footer.php';
	?>