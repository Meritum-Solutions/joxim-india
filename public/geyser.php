<?php require('../resources/config.php'); ?>
<?php 
define("TITLE", "Best Geyser Brands in India| Water Heater Company- Joxim");
define("MDESC", "Joxim is one of the best geyser brands in India that have proven their worth in performance and appearance. ");
?>


<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

	<div class="main-wrapper">

		<div class="main-cover">
			
			<img src="<?php echo $path; ?>img/geyser-banner.jpg" alt="Geyser banner" class="img-fluid">

			<div class="products-wel-cover section-entry">
				<div class="container pro-wel-container">
					<div class="row pro-row">
						<div class="offset-md-2 col-md-8">
							<div class="pro-wel-title joxim-line txtct">
								<h1>
									Geyser
								</h1>
								<p>
									Welcome the warmth of convenience and comfort in winters with Joxim geysers. We offer a wide range of stylish and durable geysers that are low on your pocket and high in efficiency.
							</div>
						</div>
						<div class="col-md-12">
							<?php 
								
								$query = "SELECT * FROM products WHERE category = 'geyser' ";
	                        $result = $link->query($query);
 	                        while( $row = $result->fetch_assoc() ) {

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
											<a href="<?php echo $path; ?><?php echo $row['link']; ?>?id=<?php echo $row['id']; ?>" class="btn hm-wel-btn-o">Know More</a>
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
