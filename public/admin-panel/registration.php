<?php 
	
	include_once("registration-config.php");
	include_once(TEMPLATE_BACK . DS . 'header.php');

	// Retrieve values to display
	// if (isset($_GET['edit'])) {

	// 	$id 		= $_GET['edit'];
	// 	$edit_state = true;
	// 	$query 		= "SELECT * FROM carousel WHERE id = $id";
	// 	$result 	= $link -> query($query);
	// 	$row 		= $result -> fetch_assoc();

	// 	$image 		= $row['image'];
	// 	$title 		= $row['title'];
	// 	$caption 	= $row['caption'];
	// 	$priority 	= $row['priority'];
	// }	

?>

	<div class="main-wrapper">

		<div class="container-fluid admin-layout-container">
			<div class="row admin-layout-row">
				<div class="col-md-3 admin-layout-sidenav-cover">
					<?php include_once("inc/admin-sidenav.php"); ?>
				</div> <!--  .col-md-3 admin-layout-sidenav-cover -->
				<div class="col-md-9 admin-layout-body-cover">
					<div class="admin-main-cover">
		
						<div class="admin-form-container">
							<h1 class="text-center admin-title"><?php echo $company; ?> Registration</h1> <!--  .text-center -->

								<h6><?PHP sessionMessage(); ?></h6>					

							
							<div class="admin-table-wrapper">
								<table class="admin-table">
									<thead>
										<tr>
											<th>Customer Name</th>
											<th>Mobile Number</th>
											<th>Address</th>
											<th>Pincode</th>
											<th>Serial Number</th>
											<th>DOP</th>
											<th>Alternate Mobile</th>
											<th>Warranty</th>
											<th>Bill (1)</th>
											<th>Bill (2)</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>

									<?php  

										$query = "SELECT * FROM `registration`";
										$result = $link -> query($query);

										while ( $row = $result -> fetch_assoc() ) {
										
									?>
										<tr>
											<td><?php echo $row['cname']; ?></td>
											<td><?php echo $row['number']; ?></td>
											<td><?php echo $row['address']; ?></td>
											<td><?php echo $row['pincode']; ?></td>
											<td><?php echo $row['serial_no']; ?></td>
											<td><?php echo $row['dop']; ?></td>
											<td><?php echo $row['alternate_mobile']; ?></td>
											<td><?php echo $row['warranty']; ?></td>
										<td><img src="assets/img/<?php echo $row['bill1']; ?>" style="width:100px;height:100px;"/></td>
											<td><img src="assets/img/<?php echo $row['bill2']; ?>" style="width:100px;height:100px;"/></td>
										
											
											<td>
											<!-- 	<a class="btn btn-warning admin-btn" href="carousel.php?edit=<?php //echo $row['id']; ?>">Edit</a> -->
												<a class="btn btn-danger admin-btn admin-delete-btn" href="registration-config.php?del=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure, you want to delete it?')" >Delete</a>
											</td>
										</tr>

									<?php } ?>

									</tbody>
								</table> <!--  .admin-table table table-responsive -->
							</div> <!--  .admin-table-wrapper -->

						</div>
					
					</div>
				</div> <!--  .col-md-9 admin-layout-body-cover -->
			</div> <!--  .row admin-layout-row -->
		</div> <!--  .container-fluid admin-layout-container -->

	</div>

<?php include_once(TEMPLATE_BACK . DS . 'footer.php'); ?>