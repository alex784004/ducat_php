<?php


function writeName()
{
	echo "Php";
}
writeName();
echo " is a server sie scripting language"."<br>";



function writeName2($firstname,$lastname="Singh")
{
	echo $firstname." ".$lastname."<br>";
}
writeName2("My name is varsha");
writeName2("My brother's name is"," gaurav");

?>