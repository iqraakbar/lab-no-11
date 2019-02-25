<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>
	<div class ="container">
	<h2>Shopping Site</h2>
	<form action="addproduct.php" method="POST">
	
<table class="table">
	<tr>
		<td>Name</td>
		<td>Image</td>
		<td>Price</td>
		<td>View</td>
	</tr>
	<tr>
		<td>PoloShirt</td>
		<td><img src="shirt.png" width="15%"></td>
		<td>1000</td>
		<td><a href="viewproduct.php" class="btn btn-success">View</a></td>
	</tr>
	<input type="hidden" name="name" value="PoloShirt">
	<input type="hidden" name="price" value="1000">
	<tr>
		<td>Quantity</td>
		<td><input type="text" name="qty" class="form-control"></td>
		<td><input type="submit" name="add" value="Add To Cart" class="btn btn-primary"></td>
	</tr>

    
</table>
</form>
</div>
</body>
</html>