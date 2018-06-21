<?php 
echo "<center> Array assignment</center>";
$a=array("php","java","embedded","android");
sort($a);
print_r($a);
echo "<br>";
$a=array("php","java","embedded","android");
array_unique($a);
print_r($a);
echo "<br>";
$a1=array("a","b","c","d"); 
$a2= array("php","java","embedded","android");
print_r(array_merge($a1,$a2));
echo "<br>";
print_r(array_combine($a1,$a2));
echo "<br>";
print_r(array_diff($a1,$a2));
echo "<br>";
$a=array("php","java","embedded","android");
array_push($a,".net");
print_r($a);
echo "<br>";
unset($a[3]);
print_r($a);
echo "<br>";
  
?>