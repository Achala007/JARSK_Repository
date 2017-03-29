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
$orderId=$_POST["orderid"];

$query1 = "SELECT UserName FROM trackorder WHERE OrderId=$orderId";
$result1=mysqli_query($con,$query1 );
$row1 = mysqli_fetch_array($result1);

echo "OrderId:".$orderId;
echo "<br><br>User Name: ".$row1['UserName'];
echo "<br><br>Status:Shipped<br>";

$tot = 0;



$query = "SELECT Quantity,Name,Price,Total FROM trackorder WHERE OrderId=$orderId";
	
      $result=mysqli_query($con,$query);
	  
	  
               while ($row=mysqli_fetch_array($result))  {

                   echo "<br><tr>";
                   echo "<td>".$row[0]."</td>";
                   echo "<td>".$row[1]."</td>";
                   echo "<td>".$row[2]."</td>";
                   echo "<td>".$row[2]*$row[0]."</td>";
                   echo "</tr>";
                    $tot += ($row[2]*$row[0]);
                   

               }
echo "</table>";
 echo "<h3>".'Total amount to pay  : Rs '.$tot."</h3>";
          ?>

</body>
</html>
