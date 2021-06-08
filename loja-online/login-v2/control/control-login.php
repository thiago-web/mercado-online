<?php 
if(!$_SESSION['usuario']) {
	header('location:../login-page.php');
	exit();
}
?>