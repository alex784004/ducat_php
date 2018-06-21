<!DOCTYPE html>
<html>
<head>
	<title></title>
<?php 

if(isset($_POST["cool"])){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$no=$_POST['no'];
$nom=$_POST['nom'];
$dob=$_POST['dob'];
$ad=$_POST['teak'];
$gender=$_POST['gender'];
$city=$_POST['city'];
$country=$_POST['country'];
 }

 ?>

 </head>
<body>
<table border="1" style="color: #00FFFF;" bgcolor="#000033">
<tr bgcolor="#00FFFF" style="color:#000000">

<th>S.NO.:</th>
<th>First Name</th>
<th>Last Name</th>
<th>Password</th>
<th>Email Address</th>
<th>Mobile No</th>
<th>Address: </th>
<th>DOB:</th>
<th>Gender:</th>
<th>City:</th>
<th>Country:</th>
<th>Action:</th>
</tr>


<tr>

<td>1</td>
<td><?php echo @$fname ?></td>
<td><?php echo @$lname ?></td>
<td><?php echo @$pass  ?></td>
<td><?php echo @$email ?></td>
<td><?php echo @$no    ?></td>
<td><?php echo @$ad    ?></td>
<td><?php echo @$dob   ?></td>
<td><?php echo @$gender?></td>
<td><?php echo @$city  ?></td>
<td><?php echo @$country?></td>
<td><a href="#">edit</a></br>
 <a href="#">delete</a></td>
</tr>
</table>

</body>
</html>