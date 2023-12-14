<?php include 'header.php';?>

	<!-- Banner -->
	<div class="banner inner-page contact-banner">
		<div class="banner-content">
			<div class="container">
				<div class="row">
					<div class="banner-text">
						<h1 class="page-title">Free Quote</h1>
						<p class="page-breadcrumb">Home / <span class="current">Get A Quote</span></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End banner -->

	<!-- Contact -->
	<div class="quote-page section-pad">
		<div class="container">
			<div class="row">
				<div class="quote-wrapper row">
					<div class="quote-list col-md-8">
						<div class="quote-group">
							<h3 class="quote-heading">Get an estimate</h3>
							<p>If you need our help, you can get in touch with us and get an estimate. We will ensure your needs are taken care of.</p>
							<form id="quote-request" class="form-quote" action="form/quote-request.php" method="post">
								<div class="form-group row">
									<div class="form-field col-md-6 form-m-bttm">
										<input name="quote-request-name" type="text" placeholder="Name *" class="form-control required">
									</div>
									<div class="form-field col-md-6">
										<input name="quote-request-company" type="text" placeholder="Company" class="form-control">
									</div>
								</div>
								<div class="form-group row">
									<div class="form-field col-md-6 form-m-bttm">
										<input name="quote-request-email" type="email" placeholder="Email *" class="form-control required email">
									</div>
									<div class="form-field col-md-6">
										<input name="quote-request-phone" type="text" placeholder="Phone *" class="form-control required">
									</div>
								</div>
								<h4>Services You Interested</h4>
								<div class="form-group row">
									<ul class="form-field clearfix">
										<li class="col-sm-4"><input type="checkbox" name="quote-request-interest[]" value="Land Transport"> <span> Land Transport</span></li>
										<li class="col-sm-4"><input type="checkbox" name="quote-request-interest[]" value="Warehousing"> <span> Warehousing</span></li>
										<li class="col-sm-4"><input type="checkbox" name="quote-request-interest[]" value="Fast Delivery"> <span> Fast Delivery</span></li>
									</ul>
									<ul class="form-field clearfix">
										<li class="col-sm-4"><input type="checkbox" name="quote-request-interest[]" value="Worldwide Transport"> <span> Worldwide Transport</span></li>
										<li class="col-sm-4"><input type="checkbox" name="quote-request-interest[]" value="Sea Freight"> <span> Sea Freight</span></li>
										<li class="col-sm-4"><input type="checkbox" name="quote-request-interest[]" value="Reliable"> <span> Reliable</span></li>
									</ul>
								</div>
								<div class="form-group row">
									<div class="form-field col-md-6">
										<p>Best Time to Reach</p>
										<select name="quote-request-reach">
											<option value="">Please select</option>
											<option value="09am-12pm">09 AM - 12 PM</option>
											<option value="12pm-03pm">12 PM - 03 PM</option>
											<option value="03pm-06pm">03 PM - 06 PM</option>
										</select>
									</div>
									<div class="form-field col-md-6">
										<p>Hear About Us</p>
										<select name="quote-request-hear">
											<option value="">Please select</option>
											<option value="Friends">Friends</option>
											<option value="Facebook">Facebook</option>
											<option value="Google">Google</option>
											<option value="Collegue">Collegue</option>
											<option value="Others">Others</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<div class="form-field col-md-12">
										<textarea name="quote-request-message" placeholder="Messages *" class="area-from form-control required"></textarea>
									</div>
								</div>
								<input type="text" class="hidden" name="form-anti-honeypot" value="">
								<button type="submit" class="btn solid-btn sb-h">Submit</button>
								<div class="form-results"></div>
							</form>
						</div>
					</div>
					<div class="contact-group col-md-4">
						<div class="contact-group">
							<h3 class="quote-heading">Contact Us</h3>
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
									<span>irene@blueseashipping.com></span>
								</li>
								<li>
									<i class="fa fa-clock-o" aria-hidden="true"></i><span>Sat - Thu: 8AM - 7PM </span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact -->
	<?php include 'footer.php';?>