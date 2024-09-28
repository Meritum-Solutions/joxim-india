<?php require('../resources/config.php'); ?>
<?php 
define("TITLE", "");
define("MDESC", "");
?>


<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>



     <div class="main-wrapper">

		<div class="main-cover">


		<img src="<?php echo $path; ?>img/joxim-induction-banner.jpg" alt="Air Coolers Banner" class="img-fluid">


		<div class="products-wel-cover section-entry">
				<div class="container pro-wel-container">
					<div class="row pro-wel-row">
						<div class="offset-md-2 col-md-8">
							<div class="pro-wel-title joxim-line txtct">
								<h1>
									Induction <span class="txtbu"></span>
								</h1>
								<p>
									Enhance your kitchen with our modern and stylish induction cooktops. Discover a world of culinary possibilities and elevate your cooking experience with the power of induction.
							</div>
						</div>
						<div class="col-md-6 pro-wel-col">


							<div class="pro-wel-img pro-wrap txtct">
								<img src="<?php echo $path; ?>img/induction-1.png" alt="" class="img-fluid">
							</div>
						</div>
						<div class="col-md-6 pro-wel-col">
								<?php 
								
								$query = "SELECT * FROM products WHERE category = 'induction' ";
	                        $result = $link->query($query);
 	                        while( $row = $result->fetch_assoc() ) {

							 ?>	
							<div class="pro-wel-rt pro-wrap">
								<h1>
									TREND
								</h1>
							             <p>
											<?php echo $row['des']; ?>
										</p>
								<div class="pro-btn">
											<a href="<?php echo $path; ?><?php echo $row['link']; ?>?id=<?php echo $row['id']; ?>" class="btn hm-wel-btn-o">Know More</a>
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