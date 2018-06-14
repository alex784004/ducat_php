<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <meta  http-equiv="refresh"  content="80; url=guess.php">
	  <style type="text/css">
	  	#px{
	  		font-size: 20px;
	  	}

#demo{
	color: red;
}

	  </style>


	  <script type="text/javascript">
	 
	  	function vok()
	  	{
	var y=rok.num.value;
	 
	  		var x="";
	  if(y=="")
	  {
	  	x="blank";
	  }
	  else if(y<=4)
	  {
	  	x="very low number";
	  }
	  else if(y<=6)
	  {
	  	x="low";
	  }
	  
	  else if(y==7)
	  {
	  	x="correct";
	  }

	  else if(y<=10)
	  {
	  	x="high";
	  }
	  else if(y>10)
	  {
	  	x="very high";
	  }
	  	document.getElementById("demo").innerHTML = x;
	  	
	  	}
	  	function cls()
{
	document.getElementById("px").innerHTML ="The Entered value is ";
}

	  </script>
</head>
<body><fieldset><form name="rok">
<center><h1>Guess game</h1>
	please guess a number: <input type="number" name="num"><input type="button" value="Give Hint"  name="give" onclick="vok(); cls();"><br>
<span id="px"></span> <span id="demo"></span>

</center></form>
</fieldset>
</body>
</html>