<?php
$str="Hello, I would like to lose weight.";
$st=explode(" ",$str);
foreach($st as $key => $value) {
	$j=1;
echo $key+$j.")";
echo $value;

echo "<br>";
}


$str="Hello cmc";
$a=convert_uuencode($str);
echo $a."<br>";
convert_uudecode($a);
echo $str."<br>";
$str="welcome to cms noida";
print(ucfirst($str));
echo "<br>";

strtolower($str);
print($str);  

$str="cmcnoida";
$st=str_split($str);

echo "<br>";
echo implode(".",$st);
$str="varsha@cmcnoida.com";
echo "<br>";
print(substr($str,7));
echo "<br>";
print(substr($str,7, 8));




?>