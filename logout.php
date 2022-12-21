<?php
	session_start();
	if(isset($_SESSION['fname'])){
	$_SESSION['fname'];
}
session_destroy();
header('location:login.html');
?>