<?php
header("content-type:text/html;charset=utf-8");//设置编码格式
include_once("mysql.php");//引入数据库连接文件

if($_POST['uname']){
	$user=$_POST['uname'];
	$pwd=$_POST['upass'];
	// $sql="select * from user where name ='".$user."' and password = '".$pwd."'";
	$result=$mysqli->query("select * from information where name ='".$user."' and password = '".$pwd."'");
	$num =$result->fetch_row();
	if($num > 0){
		echo "<script>location.href='center.html'</script>";
	} 
	else{
		echo "<script>location.href='login.html'</script>";
	}
}

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
?>