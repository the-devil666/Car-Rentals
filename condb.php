<?php
$con = new mysqli("localhost", "root", "","cars"); 

if(isset($_POST['submit'])){
 $name = $_POST["name"];
    $email= $_POST["email"];
    $subject= $_POST["subject"];
    $message= $_POST["message"];

echo "$email";
	if($firstname !=''||$email !=''||$text !=''||$phone !=''){
		$query = mysqli_query($con,"insert into contact(name, email, subject, message) values ('$name', '$email', '$subject', '$message')");
		echo "<script>alert('email sent..!')</script>";
		echo "<script>location.href='contact.html'</script>";
		
	}
}
?>