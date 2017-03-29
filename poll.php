<!-- Loads the poll data into the main page-->
<?php
//get content of textfile
$filename = "poll_result.txt";
	if (!file_exists($filename)){
		$fp = fopen($filename,"w");
		fputs($fp, "0||0");
		fclose($fp);
	}
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$yes = $array[0];
$no = $array[1];
?>

<!-- check weather user has login so username session is there-->
<?php 
  if(isset($_SESSION["user_name"])):
  
  ?>
<!-- check weather user has already voted so Poll session is there-->
<?php 
//securing the connection to database.
include("Pro.php");
$userName = $_SESSION["user_name"];
$selectionQuery = "SELECT * FROM poll WHERE UsersUN = '$userName'";
$executeQuery = mysqli_query($con,$selectionQuery);
$row = mysqli_fetch_array($executeQuery);

  if($row['UsersUN'] == ""):
  ?>
  
<?php     
	$deadline = "2016-08-25";
	//get current date
	$todays_date = date("Y-m-d");

	//convert both dates to date data type
	$today = strtotime($todays_date);
	$expiration_date = strtotime($deadline);

if ($expiration_date >= $today):
?>
<h3 >Do you like JARSK.com ?</h3>
<form>
Yes:
<input type="radio" name="vote" value="0" onclick="getVote(this.value)">
<br>No:
<input type="radio" name="vote" value="1" onclick="getVote(this.value)">

</font>

<?php
	//display poll options if deadline is not expired
	 else:
?>

<h2>Result:</h2>
<table>
<tr>
<td>Yes:</td>
<td>
<img src="image/silver.jpg"
width='<?php echo (100*round($yes/($no+$yes),2)); ?>'
height='20'>
<?php echo(100*round($yes/($no+$yes),2)); ?>%
</td>
</tr>
<tr>
<td>No:</td>
<td>
<img src="image/silver.jpg"
width='<?php echo(100*round($no/($no+$yes),2)); ?>'
height='20'>
<?php echo(100*round($no/($no+$yes),2)); ?>%
</td>
</tr>
</table>

<?php
	endif
?>

<?php
	//Display poll ;
	 else:
?>

<h2>Result:</h2>
<table>
<tr>
<td>Yes:</td>
<td>
<img src="image/silver.jpg"
width='<?php echo (100*round($yes/($no+$yes),2)); ?>'
height='20'>
<?php echo(100*round($yes/($no+$yes),2)); ?>%
</td>
</tr>
<tr>
<td>No:</td>
<td>
<img src="image/silver.jpg"
width='<?php echo(100*round($no/($no+$yes),2)); ?>'
height='20'>
<?php echo(100*round($no/($no+$yes),2)); ?>%
</td>
</tr>
</table>


<?php
	endif
?>

<?php
	//Display poll ;
	 else:
?>

<h2>Result:</h2>
<table>
<tr>
<td>Yes:</td>
<td>
<img src="image/silver.jpg"
width='<?php echo (100*round($yes/($no+$yes),2)); ?>'
height='20'>
<?php echo(100*round($yes/($no+$yes),2)); ?>%
</td>
</tr>
<tr>
<td>No:</td>
<td>
<img src="image/silver.jpg"
width='<?php echo(100*round($no/($no+$yes),2)); ?>'
height='20'>
<?php echo(100*round($no/($no+$yes),2)); ?>%
</td>
</tr>
</table>


<?php
	endif
?>