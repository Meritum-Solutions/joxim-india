 <?php
if(isset($_POST['submit']))
{

$to = "info@joximindia.com";


$subject = "WEBSITE ENQUIRY";

// compose headers
$headers .= "X-Mailer: PHP/".phpversion();

// compose message
$message = "First Name:".$_POST['name']."\n\n";
$message .= "Mobile:" .$_POST['phone']."\n\n";
$message .= "Email:" .$_POST['email']."\n\n";

// send email
if(mail($to, $subject, $message, $headers))
{
 echo "<script>alert('Successfull Send Massage')
window.location='index.php'</script>";

}
else{
     echo "<script>alert('try again');</script>";
}
}

?>