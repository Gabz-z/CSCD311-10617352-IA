<!DOCTYPE html>
<html>
<head>
	<title>update</title>

</head>
<body>
	<?php
$servername='localhost';
$user='root';
$password="";
$db="gab";

try{
	$db = mysqli_connect($servername,$user,$password,$db);
}catch(MySqli_Sql_Exception $e){

}
$sql="SELECT * FROM gg";
$results = mysqli_query($db,$sql);


?>

<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>LastName</th>
				<th>FirstName</th>
				<th>OtherName</th>
				<th>Age</th>
				<th>Gender</th>
				<th>DOB</th>
				<th>Nationality</th>
				<th>Capital</th>
				<th>City</th>
				<th>Status</th>
				<th>Height(cm)</th>
				<th>Weight(kg)</th>
				<th>email</th>
				<th>Contact</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			while ($row = mysqli_fetch_array($results))
			{ 
			    echo"<tr><form action= 'edit.php' method=post>";
				echo"<td><input type=hidden name=id value='".$row['id']"'></td>";
				echo"<td><input type=text name=lname value='".$row['lname']"'></td>";
				echo"<td><input type=text name=fname value='".$row['fname']"'></td>";
				echo"<td><input type=text name=oname value='".$row['oname']"'></td>";
				echo"<td><input type=text name=age value='".$row['age']"'></td>";
				echo"<td><input type=text name=gendervalue='".$row['gender']"'></td>";
				echo"<td><input type=text name=DOB value='".$row['DOB']"'></td>";
				echo"<td><input type=text name=nationality value='".$row['nationality']"'></td>";
				echo"<td><input type=text name=capital value='".$row['capital']"'></td>";
				echo"<td><input type=text name=city value='".$row['city']"'></td>";
				echo"<td><input type=text name=status value='".$row['status']"'></td>";
				echo"<td><input type=text name=height value='".$row['height']"'></td>";
				echo"<td><input type=text name=weight value='".$row['weight']"'></td>";
				echo"<td><input type=text name=email value='".$row['email']"'></td>";
				echo"<td><input type=text name=contact value='".$row['contact']"'></td>";
				echo"<td><input type=submit>";
				echo"</form></tr>";
		} 
		?>


		<?php

		$sql="UPDATE gg SET lname='$_POST[lname]', fname='$_POST[fname]', oname='$_POST[oname]',age='$_POST[age]', gender='$_POST[gender]',DOB='$_POST[DOB]', nationality='$_POST[nationality]',  capital='$_POST[capital]', city='$_POST[city]', status='$_POST[status]', height='$_POST[height]', weight='$_POST[weight]', email='$_POST[email]', contact='$_POST[contact]' WHERE id = '$_POST[id]'";


?>












	

</body>
</html>