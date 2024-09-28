<?php require('../../resources/config.php'); ?>
<?php 
define("TITLE", "Best Air Cooler in India");
define("MDESC", "Get best air coolers in India here at Joxim with higher performance guarantee and of course at affordable prices.");
?>

<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

	<div class="main-wrapper">

		<div class="main-cover">
			
			<img src="<?php echo $path; ?>img/air-cooler-banner.jpg" alt="Air Coolers Banner" class="img-fluid">

			<div class="products-wel-cover section-entry">
				<div class="container pro-wel-container">
					<div class="row pro-wel-row">
						<div class="offset-md-2 col-md-8">
							<div class="pro-wel-title joxim-line txtct">
								<h1>
									Air <span class="txtbu">Coolers</span>
								</h1>
								<p>
									Enjoy a cool summer with the amazing range of highly efficient coolers with Insta Cooling facility, Noise and Odour free, Power Optimized and innovatively stylish designs from Joxim. Say yes to unbridled comfort!
								</p>
							</div>
						</div>
						<div class="col-md-12">
							
							<?php 

							$query = "SELECT * FROM `products` WHERE category='air-cooler' ";
							$result = mysqli_query($link, $query);
							while($row = mysqli_fetch_assoc($result)) 
							{

							 ?>

							<div class="row pro-row">

								<div class="col-md-6 pro-wel-col">
									<div class="pro-wel-img pro-wrap txtct">
										<img src="<?php echo $path; ?>img/<?php echo $row['img']; ?>" alt="<?php echo $row['alt']; ?>" class="img-fluid">
									</div>
								</div>
								<div class="col-md-6 pro-wel-col pro-wel-col-text">
									<div class="pro-wel-rt pro-wrap">
										<h1>
											<?php echo $row['title']; ?>
										</h1>
										<p>
											<?php echo $row['des']; ?>
										</p>
										<div class="pro-btn">
											<a href="<?php echo $path; ?>air-coolers/<?php echo $row['link']; ?>?id=<?php echo $row['id']; ?>" class="btn hm-wel-btn-o">Know More</a>
										</div>
									</div>
								</div>
							</div>

							<?php } ?>
							
						</div>

						

					</div>
				</div>
			</div>

		</div> <!--  .main-cover -->

	<div> <!--  .main-wrapper -->


<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>
