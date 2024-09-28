<?php require('../../resources/config.php'); ?>
<?php 
define("TITLE", "");
define("MDESC", "");
?>


<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>


<?php 

// $id = $_GET['id'];

    $id = $_GET['id'];
    $query = "SELECT * FROM `products` WHERE category='stabilizer' and id= $id  ";

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
								<img src="<?php echo $path; ?>img/<?php echo $row['img']; ?>" alt="<?php echo $row['alt']; ?>" class="img-fluid">
							</div>
						</div>
						<div class="col-md-6 details-in-col">
							<div class="details-fill section-entry-top">
								<table class="table joxim-table">
								  <tbody>
								  	<tr>
								      <th>Model No</th>
								      <td><?php echo $row['available']; ?></td>
								    </tr>
								    <tr>
								      <th>Capacity</th>
								      <td><?php echo $row['water_value']; ?></td>
								    </tr>
								    <tr>
								      <th>Working Range</th>
								      <td><?php echo $row['power_value']; ?></td>
								    </tr>
								    <tr>
								      <th>Application</th>
								      <td><?php echo $row['noise_value']; ?></td>
								    </tr>
								    <tr>
								      <th>Warranty</th>
								      <td><?php echo $row['air_distance_value'] ?></td>
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
											Turn the safety up and turn the maintenance down. Because and we understand your needs.
										</p>
										<p>
											Joxim delivers superior value for money, by using advanced technology for your every day solution also build from durable superior component and equipped with advanced technologicals because your air contion are precious and we understand your needs.
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
												<i class="fa-solid fa-circle-arrow-right"></i>Smart Delay
											</li>
											<li>
												<i class="fa-solid fa-circle-arrow-right"></i>Negative Temperature Co-effcient 
											</li>
											<li>
												<i class="fa-solid fa-circle-arrow-right"></i>Microprocessor Technology
											</li>
											<li>
												<i class="fa-solid fa-circle-arrow-right"></i>Wall Mounted
											</li>
										</ul>
									</div>
								</div>
								<div class="col-md-6 stabilizer-col">
									<div class="stabilizer-details-wrap-side">
										<ul>
											<li>
												<i class="fa-solid fa-circle-arrow-right"></i>Digital Display </li>
											<li>
												<i class="fa-solid fa-circle-arrow-right"></i>High Low Cut</li>
											<li>
												<i class="fa-solid fa-circle-arrow-right"></i>Reverse Count Down Timer </li>
											<li>
												<i class="fa-solid fa-circle-arrow-right"></i>3 Years Warranty</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="enquiry-md mt-5">
								<?php include_once("../components/enquiry-model.php"); ?>
							</div>
						</div>	
					</div>
				</div>
			</div>

		</div> <!--  .main-cover -->

	<div> <!--  .main-wrapper -->


<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>
