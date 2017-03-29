//accesories
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/navigation.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/new.css">
    <link rel="stylesheet" href="css/tag.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/function1.js" type="text/javascript"></script>
    <script src="js/add.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 
</head>
<?php
include("Gammingaccesoriesstock.php");
?>

<body   bgcolor="black">
<?php 
	include('../nav.php');
 ?>
</div>
<nav id="main_menu">
<ul>
  <li><a href="eShop 2.0/rate.html">About us</a></li>
  <li class ="navig" style="float:right"><a href="ViewCart1.php">View Cart </a></li>
</ul>
</nav>

    <div class="navi">
        <nav class="vertical">
            <ul>

               
                <li><a href='PCgames.php'>Pc Games</a></li>
                <li><a href='XBoxgames.php'>Xbox Games</a></li>
                <li><a href='PS4games.php'>ps4 Games</a></li>
                <li><a href='Gammingaccesories.php'>Gamming accesories</a></li>
            </ul>
        </nav>


    </div>


    <div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><h4>Gaming mouse</h4></div>
                <div class="panel-body">
                    <span class="tags">
                        <span class="post-tag"><a href="">Rs 2100</a></span>
                    </span>
                    <img src="img/1.jpg" style="width:190px;height:190px;">
                    QTY: <input type="text" name="qty" maxlength="3" size="1" id="id14" class="qty" value="1">
                    <button class="btn btn-primary" onclick="add(14)">Add To Cart</button>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><h4></h4>Headphone</div>
                <div class="panel-body">
                     <span class="tags">
                        <span class="post-tag"><a href="">Rs 8000</a></span>
                     </span>
                    <img src="img/2.jpg" style="width:190px;height:190px;">
                    QTY: <input type="text" name="qty" maxlength="3" size="1" id="id15" value="1" class="qty">
                    <button class="btn btn-primary" onclick="add(15)">Add To Cart</button>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><h4>Gaming Set</h4></div>
                <div class="panel-body">
                    <span class="tags">
                        <span class="post-tag"><a href="">Rs 21000</a></span>
                    </span>
                    <img src="img/3.jpg" style="width:190px;height:190px;">
                    QTY: <input type="text" name="qty" maxlength="3" size="1" id="id16" value="1" class="qty">
                    <button class="btn btn-primary" onclick="add(16)">Add To Cart</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><h4></h4>Xbox mouse</div>
                <div class="panel-body">
                    <span class="tags">
                        <span class="post-tag"><a href="">Rs 5000</a></span>
                    </span>
                    <img src="img/4.jpg" style="width:190px;height:190px;">
                    QTY: <input type="text" name="qty" maxlength="3" size="1" id="id17" value="1" class="qty">
                    <button class="btn btn-primary" onclick="add(17)">Add To Cart</button>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><h4></h4>Joy stick</div>
                <div class="panel-body">
                    <span class="tags">
                        <span class="post-tag"><a href="">Rs 8000</a></span>
                    </span>
                    <img src="img/5.jpg" style="width:190px;height:190px;">
                    QTY: <input type="text" name="qty" maxlength="3" size="1" id="id18" class="qty" value="1">
                    <button class="btn btn-primary" onclick="add(18)">Add To Cart</button>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><h4></h4>Gaming Keyboard</div>
                <div class="panel-body">
                    <span class="tags">
                        <span class="post-tag"><a href="">Rs 3600</a></span>
                    </span>
                    <img src="img/6.jpg" style="width:190px;height:190px;">
                    QTY: <input type="text" name="qty" maxlength="3" size="1" id="id19" class="qty" value="1">
                    <button class="btn btn-primary" onclick="add(19)">Add To Cart</button>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>
