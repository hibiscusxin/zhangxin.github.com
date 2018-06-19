<?php
error_reporting(E_ALL^E_NOTICE);
header("content-type:text/html;charset=utf-8");//设置编码格式
session_start();
$mysqli=new mysqli('localhost','root','','user');
if($_POST['uname']&& $_POST['upass']){
	$user=$_POST['uname'];
	$pwd=$_POST['upass'];
			$result=$mysqli->query("select * from information where name ='$user' and 	password = '$pwd'");
	$num = $result->num_rows;
	if($num){
		$row=mysqli_fetch_array($result);
		$_SESSION['name'] =$row['name'];
		$_SESSION['password']=$row['password'];
		$_SESSION['age']=$row['age'];
		$_SESSION['height']=$row['height'];
		$_SESSION['weight']=$row['weight'];
		$_SESSION['sex']=$row['sex'];
		$home_url='home.php';
		header('location:'.$home_url);
	}
	else{
		$home_url='login.html';
		header('location:'.$home_url);
	}
}
else{
	echo "<script>alert('请输入信息');location.href='login.html'</script>";
}
?>