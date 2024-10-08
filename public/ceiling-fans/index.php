<?php require('../../resources/config.php'); ?>
<?php 
define("TITLE", "Top Rated Ceiling Fan in India- Joxim India");
define("MDESC", "Joxim is a leading electronics  manufacturer and distributor in India and offers a wide range of top rated ceiling fans with attractive looks at affordable prices.");
?>
<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

	<div class="main-wrapper">

		<div class="main-cover">
			
			<img src="<?php echo $path; ?>img/ceiling-banner.jpg" alt="Ceiling Banner" class="img-fluid">

			<div class="products-wel-cover section-entry">
				<div class="container pro-wel-container">
					<div class="row pro-row">
						<div class="offset-md-2 col-md-8">
							<div class="pro-wel-title joxim-line txtct">
								<h1>
									Ceiling <span class="txtbu">Fans</span>
								</h1>
								<p>
									High speed, safety assured and power optimized ceiling fans of Joxim are the best and most stylish addition for the comfort of your home.
							</div>
						</div>
						<div class="col-md-12">
							<?php 
								
								$query = "SELECT * FROM products WHERE category = 'ceiling-fan' ";
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
											<a href="<?php echo $path; ?>ceiling-fans/<?php echo $row['link']; ?>?id=<?php echo $row['id']; ?>" class="btn hm-wel-btn-o">Know More</a>
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
