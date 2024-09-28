<?php require('../resources/config.php'); ?>
<?php 
define("TITLE", "Registration");
define("MDESC", "");
?>

<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

	<div class="main-wrapper">

		<div class="main-cover">
			
			<div class="registration-cover section-entry">
				<div class="container reg-container">
					<div class="row reg-row">
						<div class="col-md-12 reg-col-col">
							<div class="reg-title txtct">
								<h1 class="mb-5">
									Product Registration
								</h1>
							</div>
						</div>
						<?php

										//Check for header injections
										function has_header_injection($str) {
											return preg_match("/[\r\n]/", $str);
										}

										if (isset($_POST['registration'])) {

											$name  = trim($_POST['name']);
											$email = trim($_POST['email']);
											$phone = trim($_POST['phone']);
											$address  = $_POST['address'];
											$pincode = trim($_POST['pincode']);
											$serial = trim($_POST['serial']);
											$dop = trim($_POST['dop']);
											$warranty = trim($_POST['warranty']);
											
											

											//Check to see if $name or $email have header injections
											if (has_header_injection($cname) || has_header_injection($email) || has_header_injection($phone)) {
												die(); //If true kills the script
											}

											if (!$name || !$email || !$phone || !$address || !$pincode || !$serial || !$dop || !$warranty ) {

												echo '<h4 class="error">All fields required.</h4><a href="registration.php" class="button btn-block">Go back and try again</a>';
												exit;

											}

											// Add the recipient email to variable
											$to = "info@joximindia.com";
								          
											// Create a subject
											$subject = "$name sent you a message via your Registration form at " . $company . " website";

											//Construct the message
											$message = "<h2>Query Received</h2>
														<h4>Name:</h4><p>" . $name ."</p>
														<h4>Email:</h4><p>" . $email ."</p>
														<h4>Phone:</h4><p>" . $phone ."</p>
														<h4>Address:</h4><p>" . $address ."</p> 
														<h4>Pincode:</h4><p>" . $pincode ."</p>
															<h4>Serial No:</h4><p>" . $serial ."</p>
															<h4>Date of Purchase:</h4><p>" . $dop ."</p>	<h4>Warranty:</h4><p>" . $warranty ."</p>";

										
											
											// boundary
                                       $boundary = uniqid();

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
										<h5 style="text-align: center;">Thanks for contacting <?php echo $company; ?> </h5>
										<p style="text-align: center;">Please allow 24 hours for a response.</p>
										<div class="response-btn">
										    	<button type="button" class="c-btn"><a id="mail-msg" href="index.php">Go to Home Page</a></button>
										</div>
									
									</div>

									<?php } else { ?> 
					        	<div class="col-md-12 ">
							  	<form action="registration.php" method="POST" class="row" enctype="multipart/form-data">
													<div class="form-group col-md-6">
														<label for="inputName">Customer Name</label>
														<input type="text" class="form-control" id="inputName" name="name" placeholder="Enter Customer Name">
													</div>
													<div class="form-group col-md-6">
														<label for="inputMail"> Email</label>
														<input type="email" class="form-control" id="inputMail" name="email" placeholder="Enter email">
													</div>
													<div class="form-group col-md-6">
														<label for="inputPhone">Mobile Number</label>
														<input type="text" class="form-control" id="inputPhone" name="phone" placeholder="Enter mobile">
													</div>
															<div class="form-group col-md-6">
														<label for="inputPhone">Address</label>
														<input type="text" class="form-control" id="inputPhone" name="address" placeholder="Enter Address">
													</div>
															<div class="form-group col-md-6">
														<label for="inputPhone">Pincode</label>
														<input type="text" class="form-control" id="inputPhone" name="pincode" placeholder="Enter Pincode">
													</div>
															<div class="form-group col-md-6">
														<label for="inputPhone">Product Serial No</label>
														<input type="text" class="form-control" id="inputPhone" name="serial" placeholder="Enter Product Serial No">
													</div>
													<div class="form-group col-md-6">
														<label for="inputPhone">Date of Purchase</label>
														<input type="date" class="form-control" id="inputPhone" name="dop" placeholder="Enter Date of Purchase">
													</div>
															<div class="form-group col-md-6">
														<label for="inputPhone">Choose Warranty</label>
													<select class="custom-select" name="warranty">
										  <option selected value="">Choose Warranty</option>
										  <option value="In Warranty">In Warranty</option>
										  <option value="Out Warranty">Out Warranty</option>
										  <option value="Amc">AMC</option>
										</select>
													</div>
											<!--<div class="form-group col-md-6">-->
											<!--			<label for="img">Bill Upload (option 1):</label>-->
           <!--                          <input type="file" id="img" name="bill1" accept="image/*" class="form-control">-->
											<!--		</div>-->
													<!--<div class="form-group col-md-6">-->
													<!--	<label for="img">Bill Upload (option 2):</label>-->
             <!--                        <input type="file" id="img" name="bill2" accept="image/*" class="form-control">-->
													<!--</div>-->
													
												
													<div class="con-sub ml-3">
														<button type="submit" class="btn hm-wel-btn-o" name="registration">Submit</button>
													</div>
												</form>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>


		</div> <!--  .main-cover -->

	<div> <!--  .main-wrapper -->


<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>
