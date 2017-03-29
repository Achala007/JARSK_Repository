
<!DOCTYPE html>
<html>
<head>
    
	<!--Linking external files-->
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
include("PS4gamesstock.php");//including stock status from DB
?>

<body bgcolor="black" >
<?php
include("PS4gamesstock.php");//including stock status from DB
?>

<body bgcolor="black" >
<nav id="main_menu">
<?php 
	include('../nav.php');
 ?>
<ul>
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
                <div class="panel-heading"><h4>Dead Island</h4></div>
                <div class="panel-body">
                    <span class="tags">
                        <span class="post-tag"><a href="">Rs 2000</a></span>
                    </span>
                    <img src="img/pc-1.jpg" style="width:190px;height:190px;">
                    QTY: <input type="text" name="qty" maxlength="3" size="1" id="id8" class="qty" value="1">
                    <button class="btn btn-primary" onclick="add(8)">Add To Cart</button>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><h4></h4>Call of Duty-Black OPS III</div>
                <div class="panel-body">
                     <span class="tags">
                        <span class="post-tag"><a href="">Rs 2500</a></span>
                     </span>
                    <img src="img/pc-2.jpg" style="width:190px;height:190px;">
                    QTY: <input type="text" name="qty" maxlength="3" size="1" id="id9" value="1" class="qty">
                    <button class="btn btn-primary" onclick="add(9)">Add To Cart</button>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><h4>Metro-Redux</h4></div>
                <div class="panel-body">
                    <span class="tags">
                        <span class="post-tag"><a href="">Rs 10000</a></span>
                    </span>
                    <img src="img/pc-3.jpg" style="width:190px;height:190px;">
                    QTY: <input type="text" name="qty" maxlength="3" size="1" id="id10" value="1" class="qty">
                    <button class="btn btn-primary" onclick="add(10)">Add To Cart</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><h4></h4>Splinter-Cell</div>
                <div class="panel-body">
                    <span class="tags">
                        <span class="post-tag"><a href="">Rs 3000</a></span>
                    </span>
                    <img src="img/pc-4.jpg" style="width:190px;height:190px;">
                    QTY: <input type="text" name="qty" maxlength="3" size="1" id="id11" value="1" class="qty">
                    <button class="btn btn-primary" onclick="add(11)">Add To Cart</button>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><h4></h4>Grand Theft Auto</div>
                <div class="panel-body">
                    <span class="tags">
                        <span class="post-tag"><a href="">Rs 1100</a></span>
                    </span>
                    <img src="img/pc-5.jpg" style="width:190px;height:190px;">
                    QTY: <input type="text" name="qty" maxlength="3" size="1" id="id12" class="qty" value="1">
                    <button class="btn btn-primary" onclick="add(12)">Add To Cart</button>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><h4></h4>Spider Man</div>
                <div class="panel-body">
                    <span class="tags">
                        <span class="post-tag"><a href="">Rs 2400</a></span>
                    </span>
                    <img src="img/pc-6.jpg" style="width:190px;height:190px;">
                    QTY: <input type="text" name="qty" maxlength="3" size="1" id="id13" class="qty" value="1">
                    <button class="btn btn-primary" onclick="add(13)">Add To Cart</button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>