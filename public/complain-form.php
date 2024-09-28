<?php require('../resources/config.php'); ?>

<?php 
define("TITLE", "Complain Form");
define("MDESC", "");
?>

<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

	<div class="main-wrapper">

		<div class="main-cover">
			
			<div class="complain-cover section-entry">
				<div class="container complain-container">
					<div class="row complain-row">
						<div class="col-md-12">
							<div class="complain-title txtct">
								<h1>
									Book Your Complain
								</h1>
							</div>
						</div>
								<?php

										//Check for header injections
										function has_header_injection($str) {
											return preg_match("/[\r\n]/", $str);
										}

										if (isset($_POST['submit'])) {
                                            $cname = trim($_POST['cname']);
                                            $phone = trim($_POST['number']);
                                            $city = trim($_POST['city']);
											$email = trim($_POST['email']);
											$address  = $_POST['address'];
											$pincode = trim($_POST['pincode']);
											$product = trim($_POST['product']);
											$model = trim($_POST['model']);
											$serial = trim($_POST['serial']);
											$dop = trim($_POST['dop']);
											$warranty = trim($_POST['warranty']);
											
											

											//Check to see if $name or $email have header injections
											if (has_header_injection($cname) || has_header_injection($email) || has_header_injection($phone)) {
												die(); //If true kills the script
											}

											if (!$cname || !$phone || !$city || !$email || !$address || !$pincode || !$product || !$model || !$serial || !$dop || !$warranty ) {

												echo '<h4 class="error">All fields required.</h4><a href="registration.php" class="button btn-block">Go back and try again</a>';
												exit;

											}

											// Add the recipient email to variable
											$to = "info@joximindia.com";
								          
											// Create a subject
											$subject = "$cname sent you a message via your Complaint form at " . $company . " website";

											//Construct the message
											$message = "<h2>Query Received</h2>
														<h4>Custome Name:</h4><p>" . $cname ."</p>
														<h4>Email:</h4><p>" . $email ."</p>
														<h4>Phone:</h4><p>" . $phone ."</p>
														<h4>Address:</h4><p>" . $address ."</p> 
														<h4>Pincode:</h4><p>" . $pincode ."</p>
															<h4>Serial No:</h4><p>" . $serial ."</p>	<h4>Model No:</h4><p>" . $model ."</p>
																<h4>Product:</h4><p>" . $product ."</p>
															<h4>Date of Purchase:</h4><p>" . $dop ."</p>	<h4>Warranty:</h4><p>" . $warranty ."</p>";

											$message = wordwrap($message, 72);
											
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
										<h5 style="text-align: center;">Thanks for contacting <?php echo $company; ?>!</h5>
										<p style="text-align: center;">Please allow 24 hours for a response.</p>
										<button type="button" class="c-btn"><a id="mail-msg" href="index.php">Go to Home Page</a></button>
									</div>

									<?php } else { ?> 

						<div class="col-md-12 complain-col">
							<form id="complain" action="complain-form.php" method="post" class="row" enctype="multipart/form-data">
								<div class="form-group my-group col-md-6">
									<fieldset>
										<input placeholder="Customer Name" type="text" name="cname" tabindex="1" required autofocus>
									</fieldset>
								</div>
								<div class="form-group my-group col-md-6">
									<fieldset>
										<input placeholder="Mobile Number" type="text" name="number" tabindex="2" required pattern="[7-9]{1}[0-9]{9}">
									</fieldset>
								</div>
						
								<div class="form-group my-group col-md-6">
									<fieldset>
										<input type="text" name="city" placeholder="City" class="form-control">
									</fieldset>
								</div>
								<div class="form-group my-group col-md-6">
									<fieldset>
										<input placeholder="Address" type="text" tabindex="3" name="address" required>
									</fieldset>
								</div>
									<div class="form-group my-group col-md-6">
									<fieldset>
										<input placeholder="Email" type="email" tabindex="3" name="email" required>
									</fieldset>
								</div>
								<div class="form-group my-group col-md-6">
									<fieldset>
										<input placeholder="Pin Code*" type="number" name="pincode" tabindex="2" required pattern="[7-9]{1}[0-9]{9}">
									</fieldset>
								</div>
								
								<div class="form-group my-group col-md-6">
									<fieldset>
									<select class="custom-select" name="product" onchange="myFunction(this.value)">
										  <option selected disabled>Product</option>
										  <option value="Stabilizer">Stabilizer</option>
										  <option value="Ceiling Fan">Ceiling Fan</option>
										  <option value="Air Cooler">Air Cooler</option>
										</select>
									</fieldset>
								</div>
								<div class="form-group my-group col-md-6">
									<fieldset>
										<select class="custom-select" name="model" id="model">
										  <option>Model</option>
										</select>
									</fieldset>
								</div>
								<div class="form-group my-group col-md-6">
									<fieldset>
										<input placeholder="Serial No" type="text" tabindex="5" name="serial" id="date_timepicker_end" class="form-control date-input" required>
									</fieldset>
								</div>
								<div class="form-group my-group col-md-6">
									<fieldset>
										<input placeholder="Dop" type="date" tabindex="5" name="dop" id="date_timepicker_end" class="form-control date-input" required>
									</fieldset>
								</div>
								<div class="form-group my-group col-md-6">
									<fieldset>
									<select class="custom-select" name="warranty">
										  <option selected disabled>Warranty Status</option>
										  <option value="In Warranty">In Warranty</option>
										<option value="Out Warranty">Out Warranty</option>
										  <option value="AMC">AMC</option>
										</select>
									</fieldset>
								</div>
								<!--<div class="form-group my-group col-md-6">-->
								<!--	<fieldset>-->
								<!--		<label for="img">Bill Upload (option 1):</label>-->
        <!--                             <input type="file" id="img" name="bill" accept="image/*">-->
								<!--	</fieldset>-->
								<!--</div>-->
								<!--<div class="form-group my-group col-md-6">-->
								<!--	<fieldset>-->
								<!--	<label for="img">Bill Upload (option 2):</label>-->
        <!--                             <input type="file" id="img" name="bill2" accept="image/*">-->
								<!--	</fieldset>-->
								<!--</div>-->
								<!--<div class="form-group my-group col-md-6">-->
								<!--	<fieldset>-->
								<!--		<textarea placeholder="problem" class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>-->
								<!--	</fieldset>-->
								<!--</div>-->
								<div class="form-group my-group col-md-6">
									<fieldset>
										<button name="submit" type="submit" id="contact-submit" data-submit="...Sending" class="btn hm-wel-btn-o">Submit</button>
									</fieldset>
								</div>
								
							</form>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>


		</div> <!--  .main-cover -->

	<div> <!--  .main-wrapper -->
	
	
<script>
  	function myFunction(data){
  		const ajaxreq = new XMLHttpRequest();
         ajaxreq.open('GET','http://joximindia.com/getdata.php?selectvalue='+data,'TRUE');
         ajaxreq.send();
         ajaxreq.onreadystatechange = function(){
         	if(ajaxreq.readyState == 4 && ajaxreq.status == 200){
         		document.getElementById('model').innerHTML = ajaxreq.responseText;
         	}
         }
  	}
  </script>

<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>
