<!DOCTYPE html>
<html>
<head>
	<title></title>
<?php  
if(isset($_POST["sub"]))
{
	$name=$_POST['naam'];
	$email=$_POST['email'];
	$abbr=$_POST['abbr'];
	$zip=$_POST['zip'];
	$phone=$_POST['phone'];
	

	if($name=="")
	{
		$na="required 2-75 <br>&nbsp;&nbsp;&nbsp;&nbsp; characters";
	}
if($email=="")
	{
		$ema="invalid email";
	}
if ($abbr=="") {  $abb="invalid state <br> &nbsp;&nbsp;&nbsp;&nbsp;abbreviation";
	
}     

if ($zip=="") {
	$zi="invalid zipcode";
}
if ($phone=="") {
	$pho="use format: <br> &nbsp;&nbsp;&nbsp;&nbsp;xxx-xxx-xxxx";
}


}



?>


<style type="text/css">
body
{
	padding-top: 50px;
}
input[type=text]{
		  
		  border: 2px solid #f2f2f2;
		    	border-style: inset;

}


.no{
	color: blue;
}
</style>



</head>
<body>

<form name="j1" method="POST" action="">

<center>
<h3>Form Validation</h3> 
<table  >
	<tr><td>
Name:</td><td><input type="text" class="dv" name="naam"></td><td>&nbsp;&nbsp;&nbsp;&nbsp;
	<font color="red"><?php echo @$na ?></font>
	
</td></tr>

<tr><td>
Email:</td><td><input type="text" class="dv" name="email"></td><td>&nbsp;&nbsp;&nbsp;&nbsp;
	<font color="red"><?php echo @$ema ?></font>

</td></tr>
<tr><td>
State Abbr:</td><td><input type="text" class="dv"  name="abbr"></td><td>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<font color="red"><?php echo @$abb ?></font>

</td></tr>
<tr><td>
Zip (5 digit):</td><td><input type="text" class="dv"  name="zip"></td><td>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<font color="red"><?php echo @$zi ?></font>

</td></tr>
<tr><td>
Phone:</td><td><input type="text" class="dv" name="phone"></td><td>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<font color="red"><?php echo @$pho ?></font>


	</td></tr>
	<tr><td></td><td>
<input type="submit" name="sub" value="Submit"></td><td>
</td></tr><tr><td>&nbsp;</td><td></td><td></td></tr>
<tr>
<td></td>
	<td colspan="2">



<center><a href="1.php" class="no">Reload Page</a></center>
</td></tr>
</table>
</center>

</form>









</body>
</html>