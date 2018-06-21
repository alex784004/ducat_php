<!doctype html>
<html>
<head>
<meta charset="utf-8">

<script>

function ok()
{    
var email=document.getElementById('email');

var format=/^([A-Za-z0-9.\_\-])+(@)+(([A-Za-z0-9])+\.)+([A-Za-z]{2,3})+$/;

	
	if(f1.fname.value=="" )
	{
		alert("first name cannot be left blanked");
		f1.fname.focus();
	}
	else if(f1.lname.value=="")
	{
		alert("last name cannot be left blanked");
		f1.lname.focus();
	}
 	else if(f1.email.value=="")
	{
		alert("email cannot be left blanked");
		f1.email.focus();
	}
	else if(f1.no.value=="")
	{
		alert(" mobile number cannot be blanked");
		f1.no.focus();
	}
	else if(f1.no.value.length!=10)
	{
		alert("please enter a correct mobile number");
		f1.no.focus();
	}
	else if(f1.nom.value=="")
	{
		alert("phone number cannot be blanked");
		f1.nom.focus();
	}
   
	else if(f1.state.value=="")
	{
		alert("state cannot be blanked");
		f1.state.focus();
	}
	else if(f1.country.value=="")
	{
		alert("country cannot be blanked");
	f1.country.focus();
	}
	else if(f1.dob.value=="")
	{
		alert("dob cannot be blanked");
		f1.dob.focus();
	}

/*	else if(f1.gender.value=="")
	{
		alert("gender cannot be blanked");
	}
	*/
else if(f1.gender[0].checked==false && f1.gender[1].checked==false)
{
	alert("gender field cannot be left blank");
	//gender[0] will be male
	//gender[1] will be female
}
    else if(f1.pass.value=="" || f1.cpass.value=="")
	{ 
		alert("value of pass and cpass cannot be blanked");
	}
	else if(f1.pass.value!=f1.cpass.value)
	{
		alert("password and confirm password should be same");
		f1.pass.value="";
		f1.cpass.value="";
		f1.pass.focus();
	}
	else if(f1.city.selectedIndex==0)
	{
		alert("select an of the city"); 
	}
	

	else if(!format.test(email.value))
	{
		alert("email id format is not cool");
	}



	else if(f1.term.checked==false)
	{
		alert("agree to the terms and conditions");
	}
	/*var email=document.getElementById('email');
	var format=/^([A-Za-z0-9.\_\-])+\@(([A-Za-z0-9])+\.)+([A-Za-z]{3,3})+$/;
	else if(!format.test(email.value))
	{
 		alert("email is wrong");
	}
	
	

varsha@yahoo.co.in
var format=/^([A-Za-z0-9.\_\-])+\@(([A-Za-z0-9])+\.)+(([A-Za-z]{2,2})+\.)+([A-Za-z]{2,2})+$/;
http://www.yahoo.com
/^(https:|http:)+(\/\/)+(www)+(\.)+([A-Za-z0-9.\_\-])+(([A-Za-z]{2,2})+\.)+([A-Za-z]{2,2})+$/;



*/ 

}


</script>
<title>Untitled Document</title>
</head>

<body>
<center>
<fieldset><form name="f1" action="3.php" method="post">
<table cellpadding="4">
<tr>
<td colspan="4" bgcolor="#FF0000" align="center">
Regsiter here
</td>
</tr>
<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>First Name:<font color="#FF0000">*</font></td>
<td> <input type="text" name="fname" placeholder="enter name"></td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>
<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Last Name:<font color="#FF0000">*</font></td>
<td><input type="text" name="lname" placeholder="enter name"></td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>
<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Email id:<font color="#FF0000">*</font></td>
<td><input type="text" name="email" id="email" placeholder="enter name"></td>
<td></td>
</tr>
<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Password:<font color="#FF0000">*</font></td>
<td><input type="password" name="pass" placeholder="enter password"></td>
<td></td>
</tr>
<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Confirm Password:<font color="#FF0000">*</font></td>
<td><input type="password" name="cpass" placeholder="enter password"></td>
<td></td>
</tr>

<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Mobile No:<font color="#FF0000">*</font></td>
<td><input type="number" name="no" placeholder="enter number"></td>
<td></td>
</tr>


<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Phone No:<font color="#FF0000">*</font></td>
<td><input type="number" name="nom" placeholder="enter number"></td>
<td></td>
</tr>

<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td >Address:<font color="#FF0000">*</font></td>
<td colspan="2"><textarea name="teak" rows="3" cols="8" name="teak"></textarea></td>
</tr>
<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td >Date of Birth:<font color="#FF0000">*</font></td>
<td colspan="2"><input type="date" name="dob" >
</td>
</tr>

<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td> Gender:<font color="#FF0000">*</font></td>
<td colspan="2"><input type="radio" name="gender" value="male">male
<input type="radio" name="gender" value="female">female

</td>
</tr>

<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>city:<font color="#FF0000">*</font></td>
<td><select name="city">
	<option value="">city</option>
	<option value="delhi">delhi</option>
    <option value="mumbai">mumbai</option>
</select>
</select><option val></option></td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>

<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>state:<font color="#FF0000">*</font></td>
<td><input type="text" name="state" placeholder="enter name"></td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>

<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Country:<font color="#FF0000">*</font></td>
<td><input type="text" name="country" placeholder="enter name"></td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>


<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Upload iamge:<font color="#FF0000">*</font></td>
<td><input type="file" name="name" value="browse.."></td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>


<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Status:<font color="#FF0000">*</font></td>
<td colspan="2"><input type="radio" name="active">active
<input type="radio" name="inactive">inactive</td>

</tr>
<tr>
<td>
</td>
<td colspan="3">
<input type="checkbox" name="term"> I agree to the terms and coditions
</td>
</tr>
<tr>
<td>
</td>
<td  align="right" colspan="1">
<input type="submit" value="register" name="cool" onClick="ok()">  
</td>

<td  align="left"  colspan="2">
&nbsp;
 &nbsp; <input type="button" value="reset" onClick="reset()">
</td>
</tr>
</table></form>
</fieldset>
</center>
</body>

</html>
