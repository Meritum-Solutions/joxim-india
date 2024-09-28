<?php require('../resources/config.php'); ?>
<?php 
define("TITLE", "Contact Us");
define("MDESC", "");
?>

<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

	<div class="main-wrapper">

		<div class="main-cover">
			
			<div class="page-banner-wrap">
				<img src="<?php echo $path; ?>img/contact-us.jpg" alt="Contact Us Banner" class="img-fluid" />
			</div> <!--  .about-banner-wrap -->

			<div class="contact-wrapper section-entry">
				<div class="container">
					<div class="contact-inner-wrapper">
						<div class="row align-c contact-row">
							<div class="col-md-12">
								<div class="contact-title joxim-line txtct">
									<h1>
										Get In <span class="txtbu">Touch</span>
									</h1>
									<p>
										Wish to know more about our products or want to purchase some? Fill in the form and send a us your details.
									</p>
								</div>
							</div>
							<div class="col-md-12 contact-box contact-col" >
								<div class="contact-form-wrap">
							<?php

										//Check for header injections
										function has_header_injection($str) {
											return preg_match("/[\r\n]/", $str);
										}

										if (isset($_POST['contact_submit'])) {

											$name  = trim($_POST['name']);
											$email = trim($_POST['email']);
											$phone = trim($_POST['phone']);
											$msg   = $_POST['message'];

											//Check to see if $name or $email have header injections
											if (has_header_injection($name) || has_header_injection($email) || has_header_injection($phone)) {
												die(); //If true kills the script
											}

											if (!$name || !$email || !$phone || !$msg) {

												echo '<h4 class="error">All fields required.</h4><a href="contact.php" class="button btn-block">Go back and try again</a>';
												exit;

											}

											// Add the recipient email to variable
											$to = "info@joximindia.com";

											// Create a subject
											$subject = "$name sent you a message via your contact form at " . $company . " website";

											//Construct the message
											$message = "<h2>Query Received</h2>
														<h4>Name:</h4><p>" . $name ."</p>
														<h4>Email:</h4><p>" . $email ."</p>
														<h4>Phone:</h4><p>" . $phone ."</p>
														<h4>Message:</h4><p>" . $msg ."</p>";

											$message = wordwrap($message, 72);

											// Set the mail headers into a variable
											$headers  = "MIME-Version: 1.0" . "\r\n";
											$headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
											$headers .= "From: " . $name . "<" . $email . ">" . "\r\n";
											$headers .= "X-Priority: 1" . "\r\n";
											$headers .= "X-MSMail-Priority: High" . "\r\n\r\n";

											mail($to, $subject, $message, $headers);

										
									?>

									<!-- Show success message after mail has been sent -->
									<div class="alert alert-primary col-lg-12"  id="mail-msg-alert" role="alert">
										<h5 style="text-align: center;">Thanks for contacting <?php echo $company; ?></h5>
										<p style="text-align: center;">Please allow 24 hours for a response.</p>
										<button type="button" class="btn btn-primary"><a id="mail-msg" href="<?php echo $path; ?>index">Go to Home Page</a></button>
									</div>

									<?php } else { ?> 

									<div class="contact-form-inner-wrap">
										<div class="row">
											<div class="col-md-12">

												<form action="contact-us.php" method="POST" class="row">
													<div class="form-group col-md-4">
														<label for="inputName">Your Name</label>
														<input type="text" class="form-control" id="inputName" name="name" placeholder="Enter your name">
													</div>
													<div class="form-group col-md-4">
														<label for="inputMail">Your Email</label>
														<input type="email" class="form-control" id="inputMail" name="email" placeholder="Enter email">
													</div>
													<div class="form-group col-md-4">
														<label for="inputPhone">Mobile Number</label>
														<input type="text" class="form-control" id="inputPhone" name="phone" placeholder="Enter your mobile">
													</div>
													<div class="form-group col-md-12">
														<label for="inputMsg">Your Message</label>
														<textarea class="form-control" id="inputMsg" name="message" rows="5"></textarea>
													</div>
													<div class="con-sub ml-3">
														<button type="submit" class="btn hm-wel-btn-o" name="contact_submit">Submit</button>
													</div>
												</form>
											</div> <!--  .col-md-10 -->
										</div> <!--  .row -->

									</div> <!--  .contact-form-inner-wrap -->
                                         <?php }?>
								

								</div> <!--  .contact-form-wrap -->
							</div> <!--  .col-md-8 contact-box -->
							
							
						</div> <!--  .row contact-row -->
					</div> <!--  .contact-inner-wrapper -->
				</div> <!--  .container -->
			</div> <!--  .contact-wrapper -->

			<div class="joxim-contact-cover section-entry">
			 	<div class="joxim-contact-title hm-joxim-title txtct">
			 		<div class="contact-title joxim-line txtct">
			 			<h1>
			 				Quick <span class="txtbu">Support</span>
			 			</h1>
			 			<p>
			 				We are just a click away for all your worries and queries!
			 			</p>
			 		</div>
			 	</div>
		 	<div class="container joxim-contact-container">
		 		<div class="row joxim-contact-row">
		 			<div class="col-md-4 joxim-contact-col">
		 				<div class="joxim-contact-wrap hm-joxim-title txtct" data-aos="fade-up" data-aos-dalay="100">
		 					<div class="joxim-contact-icon">
		 						<i class="fas fa-map-marker-alt"></i>
		 					</div>
		 					<h4>
		 						Visit our office
		 					</h4>
		 					<p>
		 					Joxim India
		 					South Ex Part 2, South Extension,
		 					New Delhi 110049, India
		 					</p>
		 				</div>
		 			</div>
		 			<div class="col-md-4 joxim-contact-col">
		 				<div class="joxim-contact-wrap hm-joxim-title txtct" data-aos="fade-up" data-aos-dalay="200">
		 					<div class="joxim-contact-icon">
		 						<i class="fas fa-envelope"></i>
		 					</div>
		 					<h4>
		 						Email Id
		 					</h4>
		 					<p>
		 						<a href="mailto:info@joximindia.com">info@joximindia.com</a>
		 					</p>
		 				</div>
		 			</div>
		 			<div class="col-md-4 joxim-contact-col">
		 				<div class="joxim-contact-wrap hm-joxim-title txtct" data-aos="fade-up" data-aos-dalay="300">
		 					<div class="joxim-contact-icon">
		 						<i class="fas fa-phone"></i>
		 					</div>
		 					<h4>
		 						Call Us
		 					</h4>
		 					<p>
		 						<a href="tel:011-41005893">011-41005893</a>
		 					</p>
		 				</div>
		 			</div>
		 			<div class="col-md-12 contact-col">
		 				<div class="contact-map-wrap">
		 					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.0051291728373!2d77.21590341440566!3d28.569608693678312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce25d85710e1f%3A0x480cbab011c4d66b!2sJoxim%20India!5e0!3m2!1sen!2sin!4v1656408589201!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		 				</div>
		 			</div>
		 		</div>
		 	</div>
		 </div>

		</div> <!--  .main-cover -->	

	<div> <!--  .main-wrapper -->

<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>