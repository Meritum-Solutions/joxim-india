<?php require('../resources/config.php'); ?>
<?php 
define("TITLE", "");
define("MDESC", "");
?>


<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>


<?php 

// $id = $_GET['id'];

    $id = $_GET['id'];
    $query = "SELECT * FROM `products` WHERE category='geyser' and id= $id  ";

    $result = $link->query($query);

    $row = $result->fetch_assoc();


 ?>

	<div class="main-wrapper">

		<div class="main-cover">
			
			<div class="details-cover section-entry">
				<div class="container details-container">
					<div class="row align-c details-row">
						<div class="offset-md-2 col-md-8 details-col">
							<div class="details-title txtct">
								<h1>
									<?php echo $row['title']; ?>
								</h1>
							</div>
						</div>
						<div class="col-md-6 details-in-col">
							<div class="details-img section-entry-top txtct">
								<img src="<?php echo $path; ?>img/<?php echo $row['img']; ?>" alt="" class="img-fluid">
							</div>
						</div>
						<div class="col-md-6 details-in-col">
							<div class="details-fill section-entry-top">
								<table class="table joxim-table">
								  <tbody>
								  	<tr>
								      <th>Suitable Gas</th>
								      <td><?php echo $row['available']; ?></td>
								    </tr>
								    <tr>
								      <th>Qty</th>
								      <td><?php echo $row['water_value']; ?></td>
								    </tr>
								    <tr>
								      <th>N.Wt</th>
								      <td><?php echo $row['power_value']; ?></td>
								    </tr>
								    <tr>
								      <th>G.Wt</th>
								      <td><?php echo $row['noise_value']; ?></td>
								    </tr>
								  </tbody>
								 </table> 
							</div>
						</div>
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-12 stabilizer-col">
									<div class="stabilizer-details-wrap">
										<p>
											Instant Gas Water Heater
										</p>
									</div>
								</div>
								<div class="col-md-6 salient-sp-btm">
									<div class="">
										<h4>
											<strong>Salient Features</strong>
										</h4>
									</div>
									<div class="stabilizer-details-wrap-side">

										<ul>
											<li>
												<i class="fa-solid fa-circle-arrow-right"></i>Automatic Ignition
											</li>
											<li>
												<i class="fa-solid fa-circle-arrow-right"></i>Protection Against Dry-Burn
											</li>
											<li>
												<i class="fa-solid fa-circle-arrow-right"></i>Can Use In Ultra Low Pressure
											</li>
											<li>
												<i class="fa-solid fa-circle-arrow-right"></i>Anti-Corrosion Gas And Water Value
											</li>
										</ul>
									</div>
								</div>
								<div class="col-md-6 stabilizer-col">
									<div class="stabilizer-details-wrap-side">
										<ul>
											<li>
												<i class="fa-solid fa-circle-arrow-right"></i>About 70% Cost Saving As Compared To Electric Geyser</li>
											<li>
												<i class="fa-solid fa-circle-arrow-right"></i>Heavy Duty Heat Exchanger</li>
											<li>
												<i class="fa-solid fa-circle-arrow-right"></i>Extra Wide Burner</li>
											<li>
												<i class="fa-solid fa-circle-arrow-right"></i>Discharge 6/6.5 Liter Per Minute
											</li>
											
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="enquiry-md mt-5">
								<?php include_once("components/enquiry-model.php"); ?>
							</div>
						</div>	
					</div>
				</div>
			</div>

		</div> <!--  .main-cover -->

	<div> <!--  .main-wrapper -->


<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>
