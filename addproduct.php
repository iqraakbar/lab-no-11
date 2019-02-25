<?php
 session_start();
if (isset($_POST['add'])){
	$name=$_POST['name'];
	$price=$_POST['price'];
	$quantity=$_POST['qty'];

	$products=[$name,$price,$quantity];
	$_SESSION[$name]=$products;
	header('location:index.php');
	
}
?>