<!Doctype html>
<html>
<head>
</head>
<body bgcolor="AliceBlue">
	<?php
$servername='localhost';
$user='root';
$password="";
$db="gab";


try{
	$db = mysqli_connect($servername,$user,$password,$db);
}catch(MySqli_Sql_Exception $e){

}

function getPosts()
{
	$posts = array();
	$posts[0]= $_POST['id'];
	$posts[1]= $_POST['lname'];
	$posts[2]= $_POST['fname'];
	$posts[3]= $_POST['oname'];
	$posts[4]= $_POST['age'];
	$posts[5]= $_POST['gender'];
	$posts[6]= $_POST['DOB'];
	$posts[7]= $_POST['nationality'];
	$posts[8]= $_POST['capital'];
	$posts[9]= $_POST['city'];
	$posts[10]= $_POST['status'];
	$posts[11]= $_POST['height'];
	$posts[12]= $_POST['weight'];
	$posts[13]= $_POST['email'];
	$posts[14]= $_POST['contact'];
	return $posts;
}


if(isset($_POST['search']))
{
	$data = getPosts();

	$search_Query = "SELECT * FROM gg WHERE id=$data[0]";

	$search_Result = mysqli_query($db,$search_Query);

	if($search_Result)
	{
		if(mysqli_num_rows($search_Result))
		{
			while($row = mysqli_fetch_array($search_Result));
			{
				$id = $row['id'];
				$lname = $row['lname'];
				$fname = $row['fname'];
				$oname = $row['oname'];
				$age = $row['age'];
				$gender = $row['gender'];
				$DOB = $row['DOB'];
				$nationality = $row['nationality'];
				$capital = $row['capital'];
				$city = $row['city'];
				$status = $row['status'];
				$height = $row['height'];
				$weight = $row['weight'];
				$email = $row['email'];
				$contact = $row['contact'];
			}
		}else{
			echo"no data for this ID";
		}
	}else{
		echo"Result Error";
	}
}
$i++;
			if(isset($_GET['Delete'])){
					$delete_id=$_GET['Delete'];

					mysqli_query($db,"DELETE FROM gg WHERE id = '$delete_id'")
				}
			
				
			
?>


	

<br />
<br />
<h1 align="center"><strong>Form</strong></h1>
 
<form action="del.php" method="post">
	
	<table align="center">
		<tr>
			<td>ID Number:</td>
			<td>
				<input type="number" name="id" placeholder="enter your id number" value="<?php echo $id; ?>">
			</td>
		</tr>
		<tr>
			<td>LastName:</td>
			<td>
				<input type="text" name="lname" placeholder="enter your lastname" value="<?php echo $lname; ?>">
			</td>
		</tr>
		<tr>
			<td>FirstName:</td>
			<td>
				<input type="text" name="fname" placeholder="enter your firstname" value="<?php echo $fname; ?>">
			</td>
		</tr>
		<tr>
			<td>OtherName(s):</td>
			<td>
				<input type="text" name="oname" placeholder="enter your othername(s)" value="<?php echo $oname; ?>">
			</td>
		</tr>
		<tr>
			<td>Gender:</td>
			<td>
				<input type="radio" name="gender" value="<?php echo $gender; ?>">Male
			</td>
			<td>
				<input type="radio" name="gender"  value="<?php echo $gender; ?>">Female
			</td>
			
		</tr>
		<tr>
			<td>DateOfBirth:</td>
			<td>
				<input type="text" name="DOB" placeholder="enter your date of birth" value="<?php echo $DOB; ?>">
			</td>
		</tr>
		<tr>
			<td>Nationality:</td>
			<td>
				<input type="text" name="nationality" placeholder="enter your nationality" value="<?php echo $nationality; ?>">
			</td>
			</tr>
		<tr>
			<td>Age:</td>
			<td>
				<input type="text" name="age" placeholder="enter your age" value="<?php echo $age; ?>">
			</td>
		</tr>
		<tr>
			<td>capital:</td>
			<td>
				<input type="text" name="capital" placeholder="enter your capital" value="<?php echo $capital; ?>">
			</td>
			
		</tr>
		<tr>
			<td>city:</td>
			<td>
				<input type="text" name="city" placeholder="enter your city" value="<?php echo $city; ?>">
			</td>
			
		</tr>
		<tr>
			<td>Marital Status:</td>
			<td>
				<input type="radio" name="status" value="single" value="<?php echo $status; ?>">
			</td>
			<td>
				<input type="radio" name="status" value="married" value="<?php echo $status; ?>">
			</td>
		</tr>
		<tr>
			<td>Height(cm):</td>
			<td>
				<input type="number" name="height" placeholder="enter your height in cm" value="<?php echo $height; ?>"> 
			</td>
		</tr>
		<tr>
			<td>Weight(kg):</td>
			<td>
			<input type="text" name="weight" placeholder="enter your weight in kg" value="<?php echo $weight; ?>">
			</td>
		</tr>
		<tr>
			<td>EmailAddress:</td>
			<td>
				<input type="email" name="email" placeholder="example@example.com" value="<?php echo $email; ?>">
			</td>
		</tr>
		<tr>
			<td>MobileNumber:</td>
			<td>
				<input type="tel" name="contact" placeholder="enter your phone number" value="<?php echo $contact; ?>">
			</td>
		</tr>
		<tr>
			<td></td>
			
				
			<td>
				<input type="submit" name="search" value="search">
			</td>
			
		</tr>
		
	</table>
	
</form>

	
</body>
</html>
