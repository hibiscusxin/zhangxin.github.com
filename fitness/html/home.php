<?php
error_reporting(E_ALL^E_NOTICE);
header("content-type:text/html;charset=utf-8");//设置编码格式
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>形体管理</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<link href="../css/home.css" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<div class="information" id="information_data">
				
				<div class="col-xs-12" style="color: orange;font-size:40px;font-weight: bold;">
					<?php
						echo $_SESSION['weight'];
						echo "kg";
					?>
				</div>
				<div class="col-xs-12" style="font-size: 20px;">当前体重</div>
			</div>
			
			<div class="phase">
				<div class="col-xs-6" id="phase">第1阶段</div>
				<div class="col-xs-6" id="phase">第2阶段</div>
				<div class="col-xs-12">1、两个阶段塑型，每个阶段为14天。</div>
				<div class="col-xs-12">2、您需要经历两个阶段，想要有更好看的身材，一定要坚持第二阶段！</div>
			</div>
			<div class="manage">
				<div class="col-xs-12">
					<button class="button" onclick="window.location.href='diet.html'">开始我的体重管理</button>
				</div>
			</div>
			<div class="bottom">
				<div id="bottom_icon">
					<div class="col-xs-3">
						<button class="icon"><i class="fa fa-home" style="color: orange" onclick="window.location.href='home.php'"></i></button>
					</div>
					<div class="col-xs-3">
						<button class="icon"><i class="fa fa-suitcase" onclick="window.location.href='analyse.php'"></i></button>
					</div>
					<div class="col-xs-3">
						<button class="icon" onclick="window.location.href='manage.php'"><i class="fa fa-wrench"></i></button>
					</div>
					<div class="col-xs-3">
						<button class="icon"><i class="fa fa-user" onclick="window.location.href='center.php'"></i></button>
					</div>
				</div>
				<div id="bottom_text">
					<div class="col-xs-3">
						<button class="icon" style="color: orange" onclick="window.location.href='home.php'">首页</button>
					</div>
					<div class="col-xs-3">
						<button class="icon" onclick="window.location.href='analyse.php'">健康分析</button>
					</div>
					<div class="col-xs-3">
						<button class="icon" onclick="window.location.href='manage.php'">健康管理</button>
					</div>
					<div class="col-xs-3">
						<button class="icon" onclick="window.location.href='center.php'">个人中心</button>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>