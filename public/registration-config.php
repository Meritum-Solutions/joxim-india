<?php require('../resources/config.php'); ?>
<?php

if(isset($_POST['submit']))
{
	$cname = $_POST['cname'];
	$number = $_POST['number'];
	$address = $_POST['address'];
	$pincode = $_POST['pincode'];
	$serial_no = $_POST['serial_no'];
	$dop = $_POST['dop'];
	$alt_mobile = $_POST['alt_mobile'];
	$warranty = $_POST['warranty'];
	
	$bill = $_FILES["bill1"]["name"];
	$tempname = $_FILES["bill1"]["tmp_name"];    
	$folder = "admin-panel/assets/img/".$bill;
	move_uploaded_file($tempname, $folder);
	
	$bill2 = $_FILES["bill2"]["name"];
	$tempname = $_FILES["bill2"]["tmp_name"];    
	$folder = "admin-panel/assets/img/".$bill2;
	move_uploaded_file($tempname, $folder);
	

	$sql = "INSERT INTO `registration`(`cname`, `number`, `address`, `pincode`, `serial_no`, `dop`, `alternate_mobile`, `warranty`, `bill1`, `bill2`) VALUES ('$cname','$number','$address','$pincode','$serial_no','$dop','$alt_mobile','$warranty','$bill','$bill2')";

	$result = mysqli_query($link, $sql);

	if($result){

		echo ("<script LANGUAGE='JavaScript'>
			window.alert('successfully Registred');
			window.location.href='registration.php';
			</script>");

	}
	else{
		echo "not inserted";
	}
}

?>