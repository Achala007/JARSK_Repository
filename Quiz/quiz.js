var marks=0;
var correct=0;
var submission = false;
//var flag = false;

//function to display answer and calculate marks
function quiz() {

	//get choosen answes
	var a1=document.querySelector('input[name=q1]:checked').value;
	var a2=document.querySelector('input[name=q2]:checked').value;
	var a3=document.querySelector('input[name=q3]:checked').value;
	var a4=document.querySelector('input[name=q4]:checked').value;
	var a5=document.querySelector('input[name=q5]:checked').value;
	var a6=document.querySelector('input[name=q6]:checked').value;
	var a7=document.querySelector('input[name=q7]:checked').value;
	var a8=document.querySelector('input[name=q8]:checked').value;
	var a9=document.querySelector('input[name=q9]:checked').value;
	var a10=document.querySelector('input[name=q10]:checked').value;
	marks = 0;
	correct = 0;
	//checks answers
	if(a1=="b"){
		document.getElementById('qs1').style.backgroundColor = "#00b33c";

		marks += 2;
		correct++;
	}else{
		document.getElementById('qs1').style.backgroundColor = "#ff5c33";

		marks -= 1;
	}
	if(a2=="a"){
		document.getElementById('qs2').style.backgroundColor = "#00b33c";
		marks += 2;
		correct++;
	}else{
		document.getElementById('qs2').style.backgroundColor = "#ff5c33";
		marks -= 1;
	}
	if(a3=="c"){
		document.getElementById('qs3').style.backgroundColor = "#00b33c";
		marks += 2;
		correct++;
	}else{
		document.getElementById('qs3').style.backgroundColor = "#ff5c33";
		marks -= 1;
	}
	if(a4=="b"){
		document.getElementById('qs4').style.backgroundColor = "#00b33c";
		marks += 2;
		correct++;
	}else{
		document.getElementById('qs4').style.backgroundColor = "#ff5c33";
		marks -= 1;
	}
	if(a5=="c"){
		document.getElementById('qs5').style.backgroundColor = "#00b33c";
		marks += 2;
		correct++;
	}else{
		document.getElementById('qs5').style.backgroundColor = "#ff5c33";
	}
	if(a6=="a"){
		document.getElementById('qs6').style.backgroundColor = "#00b33c";
		marks += 2;
		correct++;
	}else{
		document.getElementById('qs6').style.backgroundColor = "#ff5c33";
		marks -= 1;
	}
	if(a7=="c"){
		document.getElementById('qs7').style.backgroundColor = "#00b33c";
		marks += 2;
		correct++;
	}else{
		document.getElementById('qs7').style.backgroundColor = "#ff5c33";
		marks -= 1;
	}
	if(a8=="a"){
		document.getElementById('qs8').style.backgroundColor = "#00b33c";
		marks += 2;
		correct++;
	}else{
		document.getElementById('qs8').style.backgroundColor = "#ff5c33";
		marks -= 1;
	}
	if(a9=="b"){
		document.getElementById('qs9').style.backgroundColor = "#00b33c";
		marks += 2;
		correct++;
	}else{
		document.getElementById('qs9').style.backgroundColor = "#ff5c33";
		marks -= 1;
	}
	if(a10=="a"){
		document.getElementById('qs10').style.backgroundColor = "#00b33c";
		marks += 2;
		correct++;
	}else{
		document.getElementById('q10').style.backgroundColor = "#ff5c33";
		marks -= 1;


	}
	stopTime();
}

