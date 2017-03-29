<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet" type="text/css" href="../css/HomeCss.css">
<script type="text/javascript" src="quiz.js"></script>
		
	<script>

    var m = 2;
    var s = 1;
	var t;
function startTime() {
    s -= 1;
    // add a zero in front of numbers<10
    s = checkTime1(s);
    m -= checkTime2(s);
	Time(m);
    document.getElementById("txt").innerHTML = m + " minutes and " + s + " seconds remaining";
    t = setTimeout(function(){ startTime() }, 1000);
}
function Time(i) {
    if (i == -1 ) {
		alert("Time Out");
		quiz();
    }
}
function checkTime1(i) {
    if (i < 0 ) {
        i = 59;
    }
    return i;
}
function checkTime2(i) {
    var nm = 0;
    if (i == 59) {
        nm = 1;
    }
    return nm;
}
function stopTime(){
	clearInterval(t);
}

</script>

<style>



article {
    margin-left: 170px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
}

p.breakPara {
	margin-bottom: 1.5cm;
}
p.breakPara1 {
	margin-bottom: 10cm;

p.breakP2 {
	margin-bottom: 6cm;
}



</style>
</head>
<body onload="startTime()" bgcolor="black">

<div >
<header>
  <img align="right" src="../image/titlelog.png" width='200' height='41'>
   <h1 align="right">...... </h1>
</header>
<font color="white" size="5px">

<?php 
	include('../nav.php');
 ?>
</div> 
<nav>
  <ul>
  </ul>
</nav>

<article>
	<div>
    <font size="7">     
<div id="txt" align="right" ></div>
</font>
     </div>
	 <form class="qform">
                <table id="aa">
                    <tr>
                        <td>
                            <div class="questions">
                                <div id="qs1" class="qs1">
                                    <span><strong>Question 1 : </strong></span></span> Who won the Asia Cup Cricket Tournament 2010  ?
                                </div><div><p id="answer1"></p></div>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <div>
                        <input type="radio" name="q1"  value="a" checked>
                        <label >1) Brendon McCullam</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q1"  value="b" />
                        <label >2) Chris Gayle</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q1"  value="c" />
                        <label >3) AB De Villiers</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q1"  value="d" />
                        <label >4) Kumar Sangakkara</label>
                    </div>
							<br/>
        </div><br /></td></tr>
        <tr>
            <td>

                <div class="questions">
                    <div id="qs2" class="qs2">
                        <strong>Question 2 : </strong> Who did Serena Williams beat to win 2015 Wimbledon final?
                    </div><div><p id="answer2"></p></div>
            </td>
        </tr>
        <tr>
            <td>
                <div>
                        <input type="radio" name="q2"  value="a" checked>
                        <label>1) Germany</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q2"  value="b" />
                        <label>2) Argentina</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q2"  value="c" />
                        <label>3) France</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q2"  value="d" />
                        <label>4) Russia</label>
                    </div>
                </div><br/><br/>
            </td>
        </tr>
        <tr>
            <td>

                <div class="questions">
                    <div id="qs3" class="qs3">
                        <strong>Question 3 : </strong> The first World Cup for Soccer (Football) was held in which country in 1930?
                    </div><div><p id="answer3"></p></div>
            </td>
        </tr>
        <tr>
            <td>
                <div>
                        <input type="radio" name="q3"  value="a" checked>
                        <label >1) Uruguay</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q3"  value="b" />
                        <label>2) Italy</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q3" value="c" />
                        <label>3)West Germany</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q3" value="d" />
                        <label>4)Brazil</label>
                    </div>
                </div><br/><br/>
            </td>
        </tr>
        <tr>
            <td>

                <div class="questions">
                    <div id="qs4" class="qs4">
                        <strong>Question 4 : </strong>  The game of basketball was created in 1891 by whom?
                    </div><div><p id="answer4"></p></div>
            </td>
        </tr>
        <tr>
            <td>
                <div>
                        <input type="radio" name="q4"  value="a" checked>
                        <label>1) Bangladesh</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q4" value="b" />
                        <label>2) Malaysia</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q4"  value="c" />
                        <label>3)Pakistan</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q4"  value="d" />
                        <label>4) Sri Lanka</label>
                    </div>
                </div><br/><br/>
            </td>
        </tr>
        <tr>
            <td>

                <div class="questions">
                    <div id="qs5" class="qs5">
                        <strong>Question 5 : </strong> Which country will host 2015–Cricket World Cup ?
                    </div><div ><p id="answer5"></p></div>
            </td>
        </tr>
        <tr>
            <td>
                div>
                        <input type="radio" name="q5"  value="a" checked>
                        <label>1) Andre Agassi</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q5" value="b" />
                        <label>2)Goran Ivanisevic</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q5"  value="c" />
                        <label>3)Kei Nishikori</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q5"  value="d" />
                        <label>4)Michael Chang</label>
                    </div>
                </div><br/><br/>
            </td>
        </tr>
        <tr>
            <td>

                <div class="questions">
                    <div id="qs6" class="qs6">
                        <strong>Question 6 : </strong> Which country Won the Foot Ball Throphy which known as "EURO THROPHY" ?
                    </div><div><p id="answer6"></p></div>
            </td>
        </tr>
        <tr>
            <td>
                <div>
                        <input type="radio" name="q6"  value="a" checked>
                        <label>1) Canada</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q6" value="b" />
                        <label>2) Sri Lanka</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q6"  value="c" />
                        <label>3) Zimbabwe</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q6"  value="d" />
                        <label>4) East Africa</label>
                    </div>
                </div><br/><br/>
            </td>
        </tr>
        <tr>
            <td>

                <div class="questions">
                    <div id="qs7" class="qs7">
                        <strong>Question 7 : </strong> The proper name of the Rugby World Cup is?
                    </div><div><p id="answer7"></p></div>
            </td>
        </tr>
        <tr>
            <td>
                <div>
                        <input type="radio" name="q7" value="a" checked>
                        <label>1) 5</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q7" value="b" />
                        <label>2) 1</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q7" value="c" />
                        <label>3) 7</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q7"  value="d" />
                        <label>4) 4</label>
                    </div>
                </div><br/><br/>
            </td>
        </tr>
        <tr>
            <td>

                <div class="questions">
                    <div id="qs8" class="qs8">
                        <strong>Question 8 : </strong> which City and Country will host 2016 olympic games ?
                    </div><div><p id="answer8"></p></div>
            </td>
        </tr>
        <tr>
            <td>
                <div>
                        <input type="radio" name="q8"  value="a" checked>
                        <label>1) 15</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q8" " value="b" />
                        <label>2) 10</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q8" value="c" />
                        <label>3) 11</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q8"  value="d" />
                        <label>4) 8</label>
                    </div>
                </div><br/><br/>
            </td>
        </tr>
        <tr>
            <td>

                <div class="questions">
                    <div id="qs9" class="qs9">
                        <strong>Question 9 : </strong> How many Olympic gold medals does Michael Phelps have now ?
                    </div><div ><p id="answer9"></p></div>
            </td>
        </tr>
        <tr>
            <td>
                <div>
                        <input type="radio" name="q9"  value="a" checked>
                        <label>1) GTA SanAndreas</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q9"  value="b" />
                        <label>2) Counter Strike</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q9" value="c" />
                        <label>3) Most Wanted</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q9" value="d" />
                        <label>4) Pokeman Go</label>
                    </div>
                </div><br/><br/>
            </td>
        </tr>
        <tr>
            <td>

                <div class="questions">
                    <div id="qs10" class="qs10">
                        <strong>Question 10 : </strong> What is the term for a zero score in tennis?
                    </div><div><p id="answer10"></p></div>
            </td>
        </tr>
        <tr>
            <td>
                <div>
                        <input type="radio" name="q10" value="a" checked>
                        <label>1) 1</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q10"  value="b" />
                        <label>2) 5</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q10"  value="c" />
                        <label>3) 4</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q10"  value="d" />
                        <label>4) 3</label>
                    </div>
                </div><br/><br/><br/>
            </td>
</tr></table><!-- <table>
     <tr>
<td> -->
        &nbsp;&nbsp;&nbsp;<input type="button" id="quizSubmit" value="Submit"   onclick="quiz()"> &nbsp;&nbsp;&nbsp;</td><td>
<!--</td></tr>
       </table> -->
        </form>
	<p class = "breakPara1"><p>
</article>

<footer>..........................</footer>

</font>
</body>
</html>