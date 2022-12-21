<?php
$con = new mysqli("localhost", "root", "","cars"); 

    $fname = $_POST["fname"];
    $email= $_POST["email"];
    $phone= $_POST["phone"];
    $id_no= $_POST["id_no"];
	$gender= $_POST["gender"];
	$location= $_POST["location"];

		$query = mysqli_query($con,"insert into register(fname, email, phone, id_no, gender, location) values ('$fname', '$email', '$phone', '$id_no', '$gender', '$location')");
		echo "<script>alert('Registered..!')</script>";
		echo "<script>location.href='login.html'</script>";

?>