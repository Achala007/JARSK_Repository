
<!DOCTYPE html>
<html>
<head>
    
	<!--Linking external files-->
    <link rel="stylesheet" href="css/navigation.css">
	<link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/new.css">
    <link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/common.css">
    <script src="js/function1.js" type="text/javascript"></script>
    <script src="js/add.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body id="body" >
<?php
include("PS4gamesstock.php");//including stock status from DB
?>
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
                <div class="panel-heading"><h4>Famous Second Son</h4></div>
                <div class="panel-body">
                    <span class="tags">
                        <span class="post-tag"><a href="">Rs 1450</a></span>
                    </span>
                    <img src="img/p-1.jpg" style="width:190px;height:190px;">
                    QTY: <input type="text" name="qty" maxlength="3" size="1" id="id20" class="qty" value="1">
                    <button class="btn btn-primary" onclick="add(20)">Add To Cart</button>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><h4></h4>Watch Dogs</div>
                <div class="panel-body">
                     <span class="tags">
                        <span class="post-tag"><a href="">Rs 2300</a></span>
                     </span>
                    <img src="img/p-2.jpg" style="width:190px;height:190px;">
                    QTY: <input type="text" name="qty" maxlength="3" size="1" id="id21" value="1" class="qty">
                    <button class="btn btn-primary" onclick="add(21)">Add To Cart</button>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><h4>Uncharted 4</h4></div>
                <div class="panel-body">
                    <span class="tags">
                        <span class="post-tag"><a href="">Rs 1500</a></span>
                    </span>
                    <img src="img/p-3.jpg" style="width:190px;height:190px;">
                    QTY: <input type="text" name="qty" maxlength="3" size="1" id="id22" value="1" class="qty">
                    <button class="btn btn-primary" onclick="add(22)">Add To Cart</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><h4></h4>BattleField 4</div>
                <div class="panel-body">
                    <span class="tags">
                        <span class="post-tag"><a href="">Rs 2100</a></span>
                    </span>
                    <img src="img/p-4.jpg" style="width:190px;height:190px;">
                    QTY: <input type="text" name="qty" maxlength="3" size="1" id="id23" value="1" class="qty">
                    <button class="btn btn-primary" onclick="add(23)">Add To Cart</button>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><h4></h4>The Witcher Wild Hunt 3</div>
                <div class="panel-body">
                    <span class="tags">
                        <span class="post-tag"><a href="">Rs 3000</a></span>
                    </span>
                    <img src="img/p-5.jpg" style="width:190px;height:190px;">
                    QTY: <input type="text" name="qty" maxlength="3" size="1" id="id24" class="qty" value="1">
                    <button class="btn btn-primary" onclick="add(24)">Add To Cart</button>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><h4></h4>Mortal Combat X</div>
                <div class="panel-body">
                    <span class="tags">
                        <span class="post-tag"><a href="">Rs 2600</a></span>
                    </span>
                    <img src="img/p-6.jpg" style="width:190px;height:190px;">
                    QTY: <input type="text" name="qty" maxlength="3" size="1" id="id25" class="qty" value="1">
                    <button class="btn btn-primary" onclick="add(25)">Add To Cart</button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>