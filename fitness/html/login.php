<?php
// error_reporting(0);
error_reporting(E_ALL^E_NOTICE);
header("content-type:text/html;charset=utf-8");//设置编码格式
session_start();

$mysqli=new mysqli('localhost','root','','user');

// if (isset($_POST["submit"]) && $_POST["submit"]=="login") {
	if($_POST['uname']){
		$user=$_POST['uname'];
		$pwd=$_POST['upass'];
		$result=$mysqli->query("select * from information where name ='".$user."' and 	password = '".$pwd."'");
		$num1 = $result->num_rows;
	
		$num =$result->fetch_row();
		if($num > 0){
			$row=mysqli_fetch_array($result);
			$_SESSION['name'] =$user;
			echo $_SESSION['name'];
		
			$home_url='home.html';
			header('location:'.$home_url);
		} 
		else{
			$home_url='login.html';
			header('location:'.$home_url);
		}
	}
// }
// else{
// 	echo "<script>alert('请输入信息');location.href='login.html'</script>";
// }

// $nm = $_POST["name"];
// $pwd = $_POST["password"];
// $sql = "select password from user where name = '{$nm}'";
// $result = $user->query($sql);//取值
// $attr = $result->fetch_row();//判断
// if($attr[0] == $pwd && !empty($pwd))
// {
// 	echo "登录成功";
// }
// else{
// 	echo "登录失败";
// }


// if($num1){
	// 	$row1 = mysqli_fetch_array($result);
	// 	$_SESSION['uname']=$row1['name'];
	// 	// $_SESSION['password']=$row1['password'];
	// 	// $_SESSION['age']=$row1['age'];
	// 	// $_SESSION[]
	// }
?>

