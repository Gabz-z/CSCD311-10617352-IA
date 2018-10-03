<!DOCTYPE html>

<html>
<head>
	<title>ViewTable</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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

$results = mysqli_query($db,"SELECT * FROM gg");

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
			<?php while ($row = mysqli_fetch_array($results)){ ?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['lname']; ?></td>
				<td><?php echo $row['fname']; ?></td>
				<td><?php echo $row['oname']; ?></td>
				<td><?php echo $row['age']; ?></td>
				<td><?php echo $row['gender']; ?></td>
				<td><?php echo $row['DOB']; ?></td>
				<td><?php echo $row['nationality']; ?></td>
				<td><?php echo $row['capital']; ?></td>
				<td><?php echo $row['city']; ?></td>
				<td><?php echo $row['status']; ?></td>
				<td><?php echo $row['height']; ?></td>
				<td><?php echo $row['weight']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['contact']; ?></td>
				<td>
					<a onclick="return confirm('Change data?')"class="edit_btn" href='eddit.php?edit=$row[0];'>edit</a>
				</td>
				<td>
					<a onclick="return confirm('Delete data?')" class="dlt_btn" href="del.php?Delete=<?php echo $row['id']; ?>">Delete</a>
				</td>
			</tr>
			<?php } ?>
		
			
		</tbody>
	</table>



</body>
</html>