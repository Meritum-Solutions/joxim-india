<?php require('../../resources/config.php'); ?>

<?php 
define("TITLE", "");
define("MDESC", "");
?>

<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

	<div class="main-wrapper">

		<div class="main-cover">
			
			<img src="<?php echo $path; ?>img/products.jpg" alt="" class="img-fluid">

			<div class="products-wel-cover section-entry">
				<div class="container pro-wel-container">
					<div class="row pro-wel-row">
						<div class="offset-md-2 col-md-8">
							<div class="pro-wel-title joxim-line txtct">
								<h1>
									Our <span class="txtbu">Stabilizer</span>
								</h1>
								<p>
									Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Rerum, sint laboriosam ad voluptatem est molestiae veniam saepe sunt.
							</div>
						</div>
						<div class="col-md-6 pro-wel-col">
							<div class="pro-wel-img pro-wrap txtct">
								<img src="<?php echo $path; ?>img/stabilzer.png" alt="" class="img-fluid">
							</div>
						</div>
						<div class="col-md-6 pro-wel-col">
							<div class="pro-wel-rt pro-wrap">
								<h1>
									Digital Voltage Stabilizer
								</h1>
								<p>
									Lorem ipsum dolor, sit amet consectetur, adipisicing elit. Molestiae doloribus eaque ipsa eum hic ratione omnis, eveniet, repudiandae.
								</p>
								<div class="pro-btn">
									<a href="" class="btn hm-wel-btn-o">Konw More</a>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

		</div> <!--  .main-cover -->

	<div> <!--  .main-wrapper -->


<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>
