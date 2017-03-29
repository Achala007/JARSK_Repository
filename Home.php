<html>
<head>
<link rel="stylesheet" type="text/css" href="WelStyle.css">
<script>
var s = 6;
function checkTime() {
	s -= 1;
    time(s);
    var t = setTimeout(function(){ checkTime() }, 1000);
}
function time(i) {
	if(i== -1){
		window.open("Main.php","_self");
	}
}
</script>
</head>
<body background="image/bgimage.jpg" onload="checkTime()">
<div class="container">
  <img src="poko1.png" alt="Norway" class = "imagePoko">
</div>

<div class="container">
	<img src="ripple.svg" class = "loader">
</div>



<div class="relative">;
  <div class="absolute">.</div>
</div>

</body
</html>