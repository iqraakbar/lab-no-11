<?php
session_start();
if (isset($_POST['event'])){
	$name=$_POST['name0'];
	$price=$_POST['name1'];
	$quantity=$_POST['name2'];
	$button=$_POST['event'];

	$products=[$name,$price,$quantity];
	if ($button=='Update') {
		$_SESSION[$name]=$products;
		header('location:viewproduct.php');
		
	}
	else if ($button=='Delete') {
		unset($_SESSION[$name]);
		header('location:viewproduct.php');
	}
	
}
?>