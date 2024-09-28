<?php require('../resources/config.php'); ?>

<?php

if(isset($_POST['submit']))
{
	$cname = $_POST['cname'];
	$number = $_POST['number'];
	$address = $_POST['address'];
	$pincode = $_POST['pincode'];
	$city = $_POST['city'];
	$product = $_POST['product'];
	$model = $_POST['model'];
	$dop = $_POST['dop'];
	$message = $_POST['message'];
	$warranty = $_POST['warranty'];
	$serial_no = $_POST['serial'];
	
	
	$bill = $_FILES["bill"]["name"];
	$tempname = $_FILES["bill"]["tmp_name"];    
	$folder = "admin-panel/assets/img/".$bill;
	move_uploaded_file($tempname, $folder);
	
	$bill2 = $_FILES["bill2"]["name"];
	$tempname = $_FILES["bill2"]["tmp_name"];    
	$folder = "admin-panel/assets/img/".$bill2;
	move_uploaded_file($tempname, $folder);

	$sql = "INSERT INTO `complain_form`(`cname`, `number`, `address`, `pincode`, `city`, `product`, `model`, `dop`, `bill`, `bill2`, `message`, `warranty`, `serial_no`) VALUES ('$cname','$number','$address','$pincode','$city','$product','$model','$dop','$bill','$bill2','$message','$warranty','$serial_no')";

	$result = mysqli_query($link, $sql);
	if($result){
// header("location: complain-form.php");
		echo ("<script LANGUAGE='JavaScript'>
			window.alert('your complaint has been registered successfully');
			window.location.href='complain-form.php';
			</script>");

	}
	else{
		echo "not inserted";
	}
}

?>