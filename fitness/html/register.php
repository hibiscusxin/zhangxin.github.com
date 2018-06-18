<?php
header("content-type:text/html;charset=utf-8");//设置编码格式
$mysqli=new mysqli('localhost','root','','user');

	if($_POST['uname'] && $_POST['upass'] && $_POST['urepass'] && $_POST['uage'] && $_POST['uheight'] && $_POST['uweight'] && $_POST['usex']){
		$username=$_POST['uname'];
		$userpwd=$_POST['upass'];
		$repwd=$_POST['urepass'];
		$userage=$_POST['uage'];
		$userheight=$_POST['uheight'];
		$userweight=$_POST['uweight'];
		$usersex=$_POST['usex'];
		if($userpwd != $repwd){
			echo "<script>alert('两次密码不一致');location.href='register.html'</script>";
		}
		$result=$mysqli->query("select * from information where name ='".$username."'");
		$num =$result->fetch_row();
		if($num>0){
			echo "<script>alert('用户名已被注册');location.href='register.html'</script>";
		}
		else{
			$insert = $mysqli->query("insert into information(name,password,age,height,weight,sex) values('".$username."','".$userpwd."','".$userage."','".$userheight."','".$userweight."','".$usersex."')");
			if($insert){
				$home_url='login.html';
				header('location:'.$home_url);
			}
			else{
				echo "<script>alert('注册失败');</script>";
			}
		}
	}
?>