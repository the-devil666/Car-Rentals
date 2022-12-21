<?php
$con = new mysqli("localhost", "root", "","cars"); 

    $name = $_POST["name"];
    $email= $_POST["email"];
    $phone= $_POST["phone"];
    $location= $_POST["location"];
	$destination= $_POST["destination"];
	$date= $_POST["date"];

		$query = mysqli_query($con,"insert into book(name, email, phone, location, destination, date) values ('$name', '$email', '$phone', '$location', '$destination', '$date')");
		echo "<script>alert('booked..!')</script>";
		echo "<script>location.href='cars.php'</script>";

?>