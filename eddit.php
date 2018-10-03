<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

	$servername='localhost';
	$user='root';
	$password="";
	$db="gab";

	try
	{
		$db = mysqli_connect($servername,$user,$password,$db);
	}	
	catch(MySqli_Sql_Exception $e)
	{

	}	

	if(isset($_GET['edit']))
	{
		$id=$_GET['edit'];
		$res=mysqli_query("SELECT * FROM gg");
		$row = mysqli_fetch_array[$res];
	}

	?>

	<h1 align="center"><strong>Form</strong></h1>
 
<form action="." method="post">
	
	<table align="center">
		<tr>
			<td>LastName:</td>
			<td>
				<input type="text" name="newlname"  value="<?php echo $row[1];?>">
			</td>
		</tr>
		<tr>
			<td>LastName:</td>
			<td>
				<input type="hidden" name="id"  value="<?php echo $row[0];?>">
			</td>
		</tr>
		<tr>
			<td>FirstName:</td>
			<td>
				<input type="text" name="fname" value="<?php echo $row[2];?>" >
			</td>
		</tr>
		<tr>
			<td>OtherName(s):</td>
			<td>
				<input type="text" name="oname" value="<?php echo $row[3];?>">
			</td>
		</tr>
		<tr>
			<td>Age:</td>
			<td>
				<input type="text" name="age" value="<?php echo $row[4];?>">
			</td>
		</tr>
		<tr>
			<td>Gender:</td>
			<td>
				<input type="radio" name="gender" value="<?php echo $row[5];?>">Male
			</td>
			<td>
				<input type="radio" name="gender" value="<?php echo $row[5];?>">Female
			</td>
			
		</tr>
		<tr>
			<td>DateOfBirth:</td>
			<td>
				<input type="text" name="DOB" value="<?php echo $row[6];?>">
			</td>
		</tr>
		<tr>
			<td>Nationality:</td>
			<td>
				<input type="text" name="nationality" value="<?php echo $row[7];?>">
			</td>
			</tr>
		
		<tr>
			<td>capital:</td>
			<td>
				<input type="text" name="capital" value="<?php echo $row[8];?>" >
			</td>
			
		</tr>
		<tr>
			<td>city:</td>
			<td>
				<input type="text" name="city" value="<?php echo $row[9];?>" >
			</td>
			
		</tr>
		<tr>
			<td>Marital Status:</td>
			<td>
				<input type="radio" name="status" value="<?php echo $row[10];?>" >Single
			</td>
			<td>
				<input type="radio" name="status" value="<?php echo $row[10];?>" >Married
			</td>
		</tr>
		<tr>
			<td>Height(cm):</td>
			<td>
				<input type="number" name="height" value="<?php echo $row[11];?>" > 
			</td>
		</tr>
		<tr>
			<td>Weight(kg):</td>
			<td>
			<input type="text" name="weight" value="<?php echo $row[12];?>">
			</td>
		</tr>
		<tr>
			<td>EmailAddress:</td>
			<td>
				<input type="email" name="email" value="<?php echo $row[13];?>">
			</td>
		</tr>
		<tr>
			<td>MobileNumber:</td>
			<td>
				<input type="tel" name="contact" value="<?php echo $row[14];?>"" >
			</td>
		</tr>
		<tr>
			<td></td>
			
				
			<td>
				<input type="submit" name="register" value="Add">
			</td>
			
		</tr>
		
	</table>
	
</form>


</body>
</html>