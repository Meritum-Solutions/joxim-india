<?php require('../resources/config.php'); ?>
<?php 
define("TITLE", "");
define("MDESC", "");
?>


<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

<div class="main-wrapper">

	<div class="main-cover">

		<div class="products-wel-cover section-entry">
			<div class="container pro-wel-container">
				<div class="row pro-wel-row">
				<div class="offset-md-2 col-md-8">
					<div class="pro-wel-title joxim-line txtct">
						<h1>
							All <span class="txtbu">Products</span>
						</h1>
						<p>
							We offer a wide range of consumer electronics and home appliances at affordable prices. Our range of coolers, fans, stabilizers, and heaters are value for money and are high on performance and efficiency. Upgrade to a mart living with our home appliances that make your life convenient.
						</p>
					</div>
				</div>
				<div class="col-md-12">
					<div class="all-category row">
						<div class="col-md-12">
							<ul class="nav nav-tabs my-tab-joxim" id="myTab" role="tablist">
								<li class="nav-item">
									<a class="nav-link my-pro-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">All</a>
								</li>	
								<li class="nav-item">
									<a class="nav-link" id="air-coolers-tab" data-toggle="tab" href="#air-coolers" role="tab" aria-controls="air-coolers" aria-selected="false">Air Cooler</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="ceiling-fans-tab" data-toggle="tab" href="#ceiling-fans" role="tab" aria-controls="ceiling-fans" aria-selected="false">Ceiling Fans</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="stabilizer-tab" data-toggle="tab" href="#stabilizer" role="tab" aria-controls="stabilizer" aria-selected="false">Stabilizer</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="gijar-tab" data-toggle="tab" href="#gijar" role="tab" aria-controls="gijar" aria-selected="false">Geyser</a>
								</li>
							
							</ul>
						</div>

						<div class="tab-content" id="myTabContent" class="row">
							<div class="tab-pane fade show active col-md-12" id="all" role="tabpanel" aria-labelledby="all-tab">
								<?php 

								$query = "SELECT * FROM `products` WHERE category = 'air-cooler' ";
								$result = mysqli_query($link, $query);
								while($row = mysqli_fetch_assoc($result)) 
								{

								?>
								<div class="row pro-row">
									<div class="col-md-6 pro-wel-col">
										<div class="pro-wel-img pro-wrap txtct">
											<img src="<?php echo $path; ?>img/<?php echo $row['img']; ?>" alt="" class="img-fluid">
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
												<a href="<?php echo $path; ?>air-coolers/<?php echo $row['link']; ?>?id=<?php echo $row['id']; ?>" class="btn hm-wel-btn-o">Konw More</a>
											</div>
										</div>
									</div>
								</div>
								<?php } ?>

								<?php 

							$query = "SELECT * FROM products WHERE category = 'ceiling-fan' ";
							$result = $link->query($query);
							while( $row = $result->fetch_assoc() ) {

								?>	
								<div class="row pro-row">
									<div class="col-md-6 pro-wel-col">
										<div class="pro-wel-img pro-wrap txtct">
											<img src="<?php echo $path; ?>img/<?php echo $row['img']; ?>" alt="" class="img-fluid">
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
												<a href="<?php echo $path; ?>ceiling-fans/<?php echo $row['link']; ?>?id=<?php echo $row['id']; ?>" class="btn hm-wel-btn-o">Konw More</a>
											</div>
										</div>
									</div>
								</div>
							<?php } ?>

							<?php 
							// $id = $_GET['id'];
							$query = "SELECT * FROM `products` WHERE category='stabilizer'   ";
							$result = $link->query($query);
							while( $row = $result->fetch_assoc() ) {

							?>	
							<div class="row pro-row">
								<div class="col-md-6 pro-wel-col">
									<div class="pro-wel-img pro-wrap txtct">
										<img src="<?php echo $path; ?>img/<?php echo $row['img']; ?>" alt="" class="img-fluid">
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
											<a href="<?php echo $path; ?>stabilizer/<?php echo $row['link']; ?>?id=<?php echo $row['id']; ?>" class="btn hm-wel-btn-o">Konw More</a>
										</div>
									</div>
								</div>
							</div>
							<?php } ?>	

							<?php 
							// $id = $_GET['id'];
							$query = "SELECT * FROM `products` WHERE category='geyser'   ";
							$result = $link->query($query);
							while( $row = $result->fetch_assoc() ) {

							?>	
							<div class="row pro-row">
								<div class="col-md-6 pro-wel-col">
									<div class="pro-wel-img pro-wrap txtct">
										<img src="<?php echo $path; ?>img/<?php echo $row['img']; ?>" alt="<?php $row['alt']; ?>" class="img-fluid">
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
											<a href="<?php echo $path; ?><?php echo $row['link']; ?>?id=<?php echo $row['id']; ?>" class="btn hm-wel-btn-o">Konw More</a>
										</div>
									</div>
								</div>
							</div>
							<?php } ?>	
							<?php 
							// $id = $_GET['id'];
							$query = "SELECT * FROM `products` WHERE category='mixer'   ";
							$result = $link->query($query);
							while( $row = $result->fetch_assoc() ) {

							?>	
							<div class="row pro-row">
								<div class="col-md-6 pro-wel-col">
									<div class="pro-wel-img pro-wrap txtct">
										<img src="<?php echo $path; ?>img/<?php echo $row['img']; ?>" alt="<?php $row['alt']; ?>" class="img-fluid">
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
											<a href="<?php echo $path; ?><?php echo $row['link']; ?>?id=<?php echo $row['id']; ?>" class="btn hm-wel-btn-o">Konw More</a>
										</div>
									</div>
								</div>
							</div>
							<?php } ?>	

							</div>	
							<div class="tab-pane fade col-md-12" id="air-coolers" role="tabpanel" aria-labelledby="air-coolers-tab"><h1>
								<?php 

								$query = "SELECT * FROM `products` WHERE category = 'air-cooler' ";
								$result = mysqli_query($link, $query);
								while($row = mysqli_fetch_assoc($result)) 
								{

								?>
								<div class="row pro-row">
									<div class="col-md-6 pro-wel-col">
										<div class="pro-wel-img pro-wrap txtct">
											<img src="<?php echo $path; ?>img/<?php echo $row['img']; ?>" alt="" class="img-fluid">
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
												<a href="<?php echo $path; ?>air-coolers/<?php echo $row['link']; ?>?id=<?php echo $row['id']; ?>" class="btn hm-wel-btn-o">Konw More</a>
											</div>
										</div>
									</div>
								</div>
								<?php } ?>
							</h1>
						</div>
						<div class="tab-pane fade col-md-12" id="ceiling-fans" role="tabpanel" aria-labelledby="ceiling-fans-tab">
							<?php 

							$query = "SELECT * FROM products WHERE category = 'ceiling-fan' ";
							$result = $link->query($query);
							while( $row = $result->fetch_assoc() ) {

								?>	
								<div class="row pro-row">
									<div class="col-md-6 pro-wel-col">
										<div class="pro-wel-img pro-wrap txtct">
											<img src="<?php echo $path; ?>img/<?php echo $row['img']; ?>" alt="" class="img-fluid">
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
												<a href="<?php echo $path; ?>ceiling-fans/<?php echo $row['link']; ?>?id=<?php echo $row['id']; ?>" class="btn hm-wel-btn-o">Konw More</a>
											</div>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
						<div class="tab-pane fade col-md-12" id="stabilizer" role="tabpanel" aria-labelledby="stabilizer-tab">
							<?php 
							// $id = $_GET['id'];
							$query = "SELECT * FROM `products` WHERE category='stabilizer'   ";
							$result = $link->query($query);
							while( $row = $result->fetch_assoc() ) {

							?>	
							<div class="row pro-row">
								<div class="col-md-6 pro-wel-col">
									<div class="pro-wel-img pro-wrap txtct">
										<img src="<?php echo $path; ?>img/<?php echo $row['img']; ?>" alt="" class="img-fluid">
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
											<a href="<?php echo $path; ?>stabilizer/<?php echo $row['link']; ?>?id=<?php echo $row['id']; ?>" class="btn hm-wel-btn-o">Konw More</a>
										</div>
									</div>
								</div>
							</div>
							<?php } ?>	
						</div>
						<div class="tab-pane fade col-md-12" id="gijar" role="tabpanel" aria-labelledby="gijar-tab">
							<?php 
							// $id = $_GET['id'];
							$query = "SELECT * FROM `products` WHERE category='geyser'   ";
							$result = $link->query($query);
							while( $row = $result->fetch_assoc() ) {

							?>	
							<div class="row pro-row">
								<div class="col-md-6 pro-wel-col">
									<div class="pro-wel-img pro-wrap txtct">
										<img src="<?php echo $path; ?>img/<?php echo $row['img']; ?>" alt="<?php $row['alt']; ?>" class="img-fluid">
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
											<a href="<?php echo $path; ?><?php echo $row['link']; ?>?id=<?php echo $row['id']; ?>" class="btn hm-wel-btn-o">Konw More</a>
										</div>
									</div>
								</div>
							</div>
							<?php } ?>	
						</div>
						<div class="tab-pane fade col-md-12" id="mixer" role="tabpanel" aria-labelledby="mixer-tab">
							<?php 
							// $id = $_GET['id'];
							$query = "SELECT * FROM `products` WHERE category='mixer'   ";
							$result = $link->query($query);
							while( $row = $result->fetch_assoc() ) {

							?>	
							<div class="row pro-row">
								<div class="col-md-6 pro-wel-col">
									<div class="pro-wel-img pro-wrap txtct">
										<img src="<?php echo $path; ?>img/<?php echo $row['img']; ?>" alt="<?php $row['alt']; ?>" class="img-fluid">
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
											<a href="<?php echo $path; ?><?php echo $row['link']; ?>?id=<?php echo $row['id']; ?>" class="btn hm-wel-btn-o">Konw More</a>
										</div>
									</div>
								</div>
							</div>
							<?php } ?>	
						</div>
						<div class="tab-pane fade col-md-12" id="induction" role="tabpanel" aria-labelledby="induction-tab">
							<?php 
							// $id = $_GET['id'];
							$query = "SELECT * FROM `products` WHERE category='induction'   ";
							$result = $link->query($query);
							while( $row = $result->fetch_assoc() ) {

							?>	
							<div class="row pro-row">
								<div class="col-md-6 pro-wel-col">
									<div class="pro-wel-img pro-wrap txtct">
										<img src="<?php echo $path; ?>img/<?php echo $row['img']; ?>" alt="<?php $row['alt']; ?>" class="img-fluid">
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
											<a href="<?php echo $path; ?><?php echo $row['link']; ?>?id=<?php echo $row['id']; ?>" class="btn hm-wel-btn-o">Konw More</a>
										</div>
									</div>
								</div>
							</div>
							<?php } ?>	
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div> <!--  .main-cover -->

<div> <!--  .main-wrapper -->


	<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>
