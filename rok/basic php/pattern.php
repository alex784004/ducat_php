<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.dol{
			font-size: 30px;
		}
	</style>
</head>
<body>
<div class="dol">
<?php

for ($i=1; $i <=5 ; $i++) {
for($j=1;$j<=$i;$j++) 
{
	echo "* ";
}
echo "<br>";
}

echo "<br>";echo "<br>";

  for ($i=1; $i <=5 ; $i++) {
for($j=5;$j>=$i;$j--) 
{
	echo "* ";
}
echo "<br>";
}

echo "<br>";echo "<br>";

  for ($i=1; $i <=5 ; $i++) {
for($j=4;$j>=$i;$j--) 
{
	echo "&nbsp;&nbsp;";
}

for($k=1; $k<=$i; $k++) { 
	echo "*";
}


echo "<br>";
}

echo "<br>";echo "<br>";

  for ($i=1; $i <=5 ; $i++) {


  	for($j=5;$j>=$i;$j--) 
{
	echo "&nbsp;&nbsp;";
}
for($j=1;$j<=(($i-1)*2)+1;$j++) 
{
	echo "*";
}
echo "<br>";
}
 
echo "<br>";echo "<br>";



 for ($i=5; $i>=1 ; $i--) {
 	for($j=5;$j>$i;$j--) 
{
	echo "&nbsp;&nbsp;";
}
for($j=1;$j<=(($i-1)*2)+1;$j++) 
{
	echo "*";
}
echo "<br>";
}




?>
</div>










</body>
</html>

