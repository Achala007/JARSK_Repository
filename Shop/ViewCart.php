<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even) {
            background-color: #dddddd;
            .basic-grey {
                margin-left: auto;
                margin-right: auto;
                max-width: 500px;
                background: #F7F7F7;
                padding: 25px 15px 25px 10px;
                font: 12px Georgia, "Times New Roman", Times, serif;
                color: #888;
                text-shadow: 1px 1px 1px #FFF;
                border: 1px solid #E4E4E4;
            }
        }
    </style>
</head>

<body>
    <h2 align="center">Shopping Cart</h2>
    <form method="POST" name="updateTableInfo" action="removeItem.php">
        <table>
            <tr>
                <th>Quantity</th>
                <th>Name</th>
                <th>Price</th>
                <th>Total</th>
                <th>Remove</th>
            </tr>

            <?php
            //connect to the Apache web server
            require 'dbconnect.php';
            //Start the session to pass count variable to the respective php files
            session_start();
            //variable initialization
            $tot=0 ; 
            $count=1 ;
            //Join purchase table and items table
            $query="SELECT purchases.Quantity,items.itemName,items.unitPrice,purchases.prodId FROM purchases INNER JOIN items on items.prodId=purchases.prodId";
            $result=mysqli_query($con,$query);
	    while ($row=mysqli_fetch_array($result))
            { 
              //print shopping cart table
              echo "<tr>"; 
              echo "<td>".$row[0]. "</td>"; 
              echo "<td>".$row[1]. "</td>"; 
              echo "<td>".$row[2]. "</td>"; 
              echo "<td>".$row[2]*$row[0]. "</td>"; echo "<td>". "<input type='checkbox' name='$count' value='".$row[3]. "'/>". "</td>"; echo "</tr>"; $tot +=( $row[2]*$row[0]); $count++; 
              } 
              $count++; 
              echo "<input type='hidden' name='count' value=$count>";
			  echo "</table>";
              //print total price
              echo "<h3 align='right'>". 'Total amount to pay  : '.$tot. "</h3>";
               echo '<input type = "submit" value = "update">'; 
               ?>
    </form>





    <h4>Please enter your details below to complete the purchase</h4>
    <br>
    <br>
    <style>
        .myForm {
            font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
            font-size: 0.8em;
            width: 30em;
            padding: 1em;
            border: 1px solid #ccc;
        }
        .myForm * {
            box-sizing: border-box;
        }
        .myForm fieldset {
            border: none;
            padding: 0;
        }
        .myForm legend,
        .myForm label {
            padding: 0;
            font-weight: bold;
        }
        .myForm label.choice {
            font-size: 0.9em;
            font-weight: normal;
        }
        .myForm label {
            text-align: left;
            display: block;
        }
        .myForm input[type="text"],
        .myForm input[type="tel"],
        .myForm input[type="address"],
        .myForm input[type="date"],
        .myForm select,
        .myForm textarea {
            float: right;
            width: 60%;
            border: 1px solid #ccc;
            font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
            font-size: 0.9em;
            padding: 0.3em;
        }
        .myForm textarea {
            height: 100px;
        }
        .myForm input[type="radio"],
        .myForm input[type="checkbox"] {
            margin-left: 40%;
        }
        .myForm button {
            padding: 1em;
            border-radius: 0.5em;
            background: #eee;
            border: none;
            font-weight: bold;
            margin-left: 40%;
            margin-top: 1.8em;
        }
        .myForm button:hover {
            background: #ccc;
            cursor: pointer;
        }
    </style>

    </head>

    <body>

        <form class="myForm" method="post" action="Updatesqp.php">

            <h3>Billing Information</h3>
            <p>
                <label>Name
                    <input type="text" name="customer_name" required>
                </label>
            </p>

            <p>
                <label>Phone
                    <input type="tel" name="phone_number">
                </label>
            </p>

            <p>
                <label>Address
                    <input type="address" name="address">
                </label>
            </p>

            <fieldset>
                <h3>Shipping Method</h3>
                <p>
                    <label class="choice">
                        <input type="radio" name="Shippingmethod" required value="Free Shipping">Free Shipping</label>
                </p>
                <p>
                    <label class="choice">
                        <input type="radio" name="Shippingmethod" required value="Express Shipping">Express Shipping</label>
                </p>

            </fieldset>

            <fieldset>
                <h3>Payment Method</h3>
                <p>
                    <label class="choice">
                        <input type="radio" name="Paymentmethod" required value="Free Shipping">Credit Card</label>
                </p>
            </fieldset>

            <p>
                <label>Credit Card Type
                    <select id="credit_cart_type" name="credit_cart_type">
                        <option value="" selected="selected">Select One</option>
                        <option value="Master Card">Master Card</option>
                        <option value="Visa">Visa</option>
                    </select>
                </label>
            </p>


            <p>
                <label>Credit Card Number
                    <input type="text" name="credit_card_number">
                </label>
            </p>

            <p>
                <label>Expiry Date
                    <input type="date" name="pickup_time" required>
                </label>
            </p>


            <p>
                <input type="submit" name="submitBtn" value="Proceed Checkout">
            </p>


        </form>
    </body>

</html>