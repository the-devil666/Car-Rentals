<?php

session_start();

$con = new mysqli("localhost", "root", "","cars");
$fname = $_POST['fname'];
$password = $_POST['password'];

$q = "select * from register where fname='$fname' && id_no='$password'";
$res = mysqli_query($con, $q);
$num = mysqli_num_rows($res);

if($num == 1){
	$_SESSION['fname']=$fname;
	header('location:cars.php');
	}
else{
	echo "<script>alert('Username or Password is Incorrect..!')</script>";
	echo "<script>location.href='login.html'</script>";
}
?>
