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
}catch(MySqli_Sql_Exception $e){

}

	
	if(isset($_POST['register']))
	{

	$id= $_POST['id'];
	$lname=$_POST['lname'];
	$fname=$_POST['fname'];
	$oname=$_POST['oname'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$DOB=$_POST['DOB'];
	$nationality=$_POST['nationality'];
	$capital=$_POST['capital'];
	$city=$_POST['city'];
	$status=$_POST['status'];
	$height=$_POST['height'];
	$weight=$_POST['weight'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];


	$sql = "INSERT INTO gg(id,lname,fname,oname,age,gender,DOB,nationality,capital,city,status,height,weight,email,contact) VALUES ('$id','$lname','$fname','$oname','$age','$gender','$DOB','$nationality','$capital','$city','$status','$height','$weight','$email','$contact')";
		mysqli_query($db,$sql);

	}

	
	




?>

<br />
<br />
<h1 align="center"><strong>Form</strong></h1>
 
<form action="insert.php" method="post">
	
	<table align="center">
		<tr>
			<td>ID Number:</td>
			<td>
				<input type="number" name="id" placeholder="enter your id number" >
			</td>
		</tr>
		<tr>
			<td>LastName:</td>
			<td>
				<input type="text" name="lname" placeholder="enter your lastname" >
			</td>
		</tr>
		<tr>
			<td>FirstName:</td>
			<td>
				<input type="text" name="fname" placeholder="enter your firstname" >
			</td>
		</tr>
		<tr>
			<td>OtherName(s):</td>
			<td>
				<input type="text" name="oname" placeholder="enter your othername(s)">
			</td>
		</tr>
		<tr>
			<td>Age:</td>
			<td>
				<input type="text" name="age" placeholder="enter your age" >
			</td>
		</tr>
		<tr>
			<td>Gender:</td>
			<td>
				<input type="radio" name="gender" value="Male">Male
			</td>
			<td>
				<input type="radio" name="gender" value="Female">Female
			</td>
			
		</tr>
		<tr>
			<td>DateOfBirth:</td>
			<td>
				<input type="text" name="DOB" placeholder="enter your date of birth">
			</td>
		</tr>
		<tr>
			<td>Nationality:</td>
			<td>
				<input type="text" name="nationality" placeholder="enter your nationality">
			</td>
			</tr>
		
		<tr>
			<td>capital:</td>
			<td>
				<input type="text" name="capital" placeholder="enter your capital" >
			</td>
			
		</tr>
		<tr>
			<td>city:</td>
			<td>
				<input type="text" name="city" placeholder="enter your city" >
			</td>
			
		</tr>
		<tr>
			<td>Marital Status:</td>
			<td>
				<input type="radio" name="status" value="single" >Single
			</td>
			<td>
				<input type="radio" name="status" value="married" >Married
			</td>
		</tr>
		<tr>
			<td>Height(cm):</td>
			<td>
				<input type="number" name="height" placeholder="enter your height in cm" > 
			</td>
		</tr>
		<tr>
			<td>Weight(kg):</td>
			<td>
			<input type="text" name="weight" placeholder="enter your weight in kg">
			</td>
		</tr>
		<tr>
			<td>EmailAddress:</td>
			<td>
				<input type="email" name="email" placeholder="example@example.com">
			</td>
		</tr>
		<tr>
			<td>MobileNumber:</td>
			<td>
				<input type="tel" name="contact" placeholder="enter your phone number" >
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