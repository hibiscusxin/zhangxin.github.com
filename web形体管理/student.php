<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<title>student</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/student.css">
</head>
<body>
<?php 
	require_once('connectvars.php');
	$link1=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
	$link1->query("SET NAMES utf8");
	$stu = 'SELECT * FROM students';
	$res = mysqli_query($link1,"set name utf8");
	$res = mysqli_query($link1,$stu);
	if (!$res) {
 			printf("Error: %s\n", mysqli_error($link1));
 			exit();
		}
	$row=mysqli_fetch_array($res);
	mysqli_close($link1);
	?>
	<div class="container">
		<h1>学生信息</h1>
		<table>
			<tr>
	 			<td>id</td>
	 			<td>password</td>
	 			<td>name</td>
	 			<td>sex</td>
	 			<td>major</td>
	 			<td>classId</td>
	 			<td>phone</td>
	 			<td>state</td>
	 			<td>tutorId</td>
	 		</tr>
	 		<?php 
	 			while($row=mysqli_fetch_array($res)){
	 		 ?>
	 		<tr>
	 			<td><?php echo $row['id']; ?></td>
	 			<td><?php echo $row['password']; ?></td>
	 			<td><?php echo $row['name']; ?></td>
	 			<td><?php echo $row['sex']; ?></td>
	 			<td><?php echo $row['major']; ?></td>
	 			<td><?php echo $row['classId']; ?></td>
	 			<td><?php echo $row['phone']; ?></td>
	 			<td><?php echo $row['state']; ?></td>
	 			<td><?php echo $row['tutorId']; ?></td>
	 		</tr>
	 		<?php
	 			}
	 		?>
		</table>
	</div>
	</body>
	</html>