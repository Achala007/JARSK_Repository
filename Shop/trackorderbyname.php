<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>
<h1>Order Deatils</h1>

<table>
  <tr>
    <th>Quantity</th>
    <th>Name</th>
    <th>Price</th>
    <th>Total</th>
    
  </tr>
<?php

include("db_connectshopping.php");
$name=$_POST["userName"];


echo "<br><br>User Name: ".$name;
echo "<br><br>Status:Shipped";

$tot = 0;

$query = "SELECT Quantity,Name,Price,Total FROM trackorder WHERE UserName='$name' ";
	
      $result=mysqli_query($con,$query);
	  
	  
               while ($row=mysqli_fetch_array($result))  {

                   echo "<tr>";
                   echo "<td>".$row[0]."</td>";
                   echo "<td>".$row[1]."</td>";
                   echo "<td>".$row[2]."</td>";
                   echo "<td>".$row[3]."</td>";
                   echo "</tr>";
                   
		   $tot += ($row[2]*$row[0]);

               }
echo "</table>";

echo "<h3>".'Total amount to pay  : Rs '.$tot."</h3>";
          


?>

</body>
</html>
