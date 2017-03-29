//x box games
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/navigation.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/new.css">
    <link rel="stylesheet" href="css/tag.css">
	<link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/function1.js" type="text/javascript"></script>
    <script src="js/add.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<?php
include("XBoxgamesstock.php");
?>

<body   bgcolor="black">
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

            </ul>
        </nav>


    </div>


    </div>


 <div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><h4>Call of Duty Black OPS</h4></div>
                <div class="panel-body">
                    <span class="tags">
                        <span class="post-tag"><a href="">Rs 2350</a></span>
                    </span>
                    <img src="img/x-1.jpg" style="width:190px;height:190px;">
                    QTY: <input type="text" name="qty" maxlength="3" size="1" id="id2" class="qty" value="1">
                    <button class="btn btn-primary" onclick="add(2)">Add To Cart</button>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><h4></h4>Sniper 2</div>
                <div class="panel-body">
                     <span class="tags">
                        <span class="post-tag"><a href="">Rs 2000</a></span>
                     </span>
                    <img src="img/x-2.jpg" style="width:190px;height:190px;">
                    QTY: <input type="text" name="qty" maxlength="3" size="1" id="id3" value="1" class="qty">
                    <button class="btn btn-primary" onclick="add(3)">Add To Cart</button>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><h4>Splinter Cell Black List</h4></div>
                <div class="panel-body">
                    <span class="tags">
                        <span class="post-tag"><a href="">Rs 2880</a></span>
                    </span>
                    <img src="img/x-3.jpg" style="width:190px;height:190px;">
                    QTY: <input type="text" name="qty" maxlength="3" size="1" id="id4" value="1" class="qty">
                    <button class="btn btn-primary" onclick="add(4)">Add To Cart</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><h4></h4>Game of Thrones</div>
                <div class="panel-body">
                    <span class="tags">
                        <span class="post-tag"><a href="">Rs 2400</a></span>
                    </span>
                    <img src="img/x-4.jpg" style="width:190px;height:190px;">
                    QTY: <input type="text" name="qty" maxlength="3" size="1" id="id5" value="1" class="qty">
                    <button class="btn btn-primary" onclick="add(5)">Add To Cart</button>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><h4></h4>Clash of Titans</div>
                <div class="panel-body">
                    <span class="tags">
                        <span class="post-tag"><a href="">Rs 2000</a></span>
                    </span>
                    <img src="img/x-5.jpg" style="width:190px;height:190px;">
                    QTY: <input type="text" name="qty" maxlength="3" size="1" id="id6" class="qty" value="1">
                    <button class="btn btn-primary" onclick="add(6)">Add To Cart</button>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><h4></h4>The Withcer</div>
                <div class="panel-body">
                    <span class="tags">
                        <span class="post-tag"><a href="">Rs 2500</a></span>
                    </span>
                    <img src="img/x-6.jpg" style="width:190px;height:190px;">
                    QTY: <input type="text" name="qty" maxlength="3" size="1" id="id7" class="qty" value="1">
                    <button class="btn btn-primary" onclick="add(7)">Add To Cart</button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>