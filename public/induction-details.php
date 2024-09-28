<?php require('../resources/config.php'); ?>
<?php 
define("TITLE", "");
define("MDESC", "");
?>


<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>


<?php 

// $id = $_GET['id'];

    $id = $_GET['id'];

    $query = "SELECT * FROM `products` WHERE category='induction' and id= $id  ";

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
								      <th>Power</th>
								      <td><?php echo $row['power']; ?></td>
								    </tr>
								    <tr>
								      <th>Warranty</th>
								      <td><?php echo $row['warranty']; ?></td>
								    </tr>
								    <tr>
								      <th>Appliaction</th>
								      <td><?php echo $row['application']; ?></td>
								    </tr>
								    <tr>
								      <th>Material</th>
								      <td><?php echo $row['material']; ?></td>
								    </tr>
								    <tr>
								      <th>Display</th>
								      <td><?php echo $row['display']; ?></td>
								    </tr>
								    <tr>
								      <th>Body Material</th>
								      <td><?php echo $row['body_material']; ?></td>
								    </tr>
								  </tbody>
								 </table> 
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
