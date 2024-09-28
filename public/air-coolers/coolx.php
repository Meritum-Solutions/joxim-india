<?php require('../../resources/config.php'); ?>
<?php 
define("TITLE", "");
define("MDESC", "");
?>


<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>


<?php 

    $id = $_GET['id'];
    $query = "SELECT * FROM `products` WHERE category='air-cooler' and id= $id  ";

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
								  <tbody class="details-fill-body">
								    <tr>
								      <th><img src="<?php echo $path; ?>img/honey-comb.png" alt="Honey Combo Cooling" class="img-fluid icon-img">Honey Combo Cooling</th>
								      <td class="my-td"><?php echo $row['available'];?></td>
								    </tr>
								    <tr>
								      <th><img src="<?php echo $path; ?>img/litre.png" alt="Water Tank" class="img-fluid icon-img">Water Tank</th>
								      <td><?php echo $row['water_value']; ?></td>
								    </tr>
								    <tr>
								      <th><img src="<?php echo $path; ?>img/power.png" alt="Power" class="img-fluid icon-img">Power</th>
								      <td><?php echo $row['power_value']; ?></td>
								    </tr>
								    <tr>
								      <th><img src="<?php echo $path; ?>img/noise.png" alt="Noise" class="img-fluid icon-img">Noise</th>
								      <td><?php echo $row['noise_value']; ?></td>
								    </tr>
								    <tr>
								      <th><img src="<?php echo $path; ?>img/air-flow.png" alt="Air Throw Distance" class="img-fluid icon-img">Air Throw Distance</th>
								      <td><?php echo $row['air_distance_value'] ?></td>
								    </tr>
								    <tr>
								      <th><img src="<?php echo $path; ?>img/dimenstion.png" alt="Dimension" class="img-fluid icon-img">Dimension</th>
								      <td><?php echo $row['dimension_value']; ?></td>
								    </tr>
								  </tbody>
								</table>
							</div>
						</div>
							
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
