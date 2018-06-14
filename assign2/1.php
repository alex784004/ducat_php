<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script>
var x=0;
function sm()
{ x=x+1;
f1.te.value=x;

if(x==4)
{
	document.image.src="soap-bubble-1958650_960_720.jpg";
}
else if(x==6)
{
document.image.src="Red-Rose.jpeg";
}
else if(x==8)
{
document.image.src="3.jpeg";	
}
else if(x==10)
{
	document.image.src="2.jpg";
}
}

</script>



</head>

<body>
<form action="" name="f1">
<img src="../rok/300px-Bachalpsee_reflection.jpg" name="image" alt="new" onClick="sm()" height="400px" width="600px">
<br>
<input type="textbox" name="te" >
 </form>
</body>
</html>