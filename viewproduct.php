<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>
<div class="container">
	<?php
	session_start();
	echo "<table class='table'>";
	echo "<tr>";
	echo "<td>Sno</td>";
	echo "<td>Name</td>";
	echo "<td>Price</td>";
	echo "<td>Quantity</td>";
	echo "<td>Total Price</td>";
	echo "<td>Update</td>";
	echo "<td>Delete</td>";
	echo "</tr>";
    $sno =0;
   $bill = 0;
    foreach($_SESSION as $product){
       
    	echo "<form action='updateproduct.php' method='post'>";
    	echo "<tr><td>".($sno++)."</td>";
          $p;
          $q;
        foreach($product as $key => $value){
            if($key == 0){
                echo "<td>".$value."</td>";
                echo "<input type='hidden' name='name$key' value='$value'>";
            }
            else if($key == 1){
                echo "<td>".$value."</td>";
                echo "<input type='hidden' name='name$key' value='$value'>";
               $p = $value;

            }
            else if($key == 2){
                echo "<td><input type='text' class='form-control' name='name$key' value='".$value."'></td>";
                $q = $value;
               $bill =($p*$q);
    
        echo "<td>".$bill."</td>";
        echo "<td><input type='submit' name='event' value='Update' class='btn btn-warning'></td>";
        echo "<td><input type='submit' name='event' value='Delete' class='btn btn-danger'></td>";
        echo "</tr>";
        echo "</form>";
        }
    }
    }

    echo "</table>";

    echo "<a href='index.php' class='btn btn-primary'>Purchase More</a>";
?>
	
</div>
</body>
</html>