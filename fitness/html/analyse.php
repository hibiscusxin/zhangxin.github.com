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
		<link href="../css/analyse.css" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<div class="information" id="information_data">
				<div class="col-xs-4" style="color: orange">
					<?php
					echo $_SESSION['age'];
					echo "岁";
					?>
				</div>
				<div class="col-xs-4" style="color: orange">
					<?php
					echo $_SESSION['weight'];
					echo "kg";
					?>
				</div>
				<div class="col-xs-4" style="color: orange">
					<?php
					echo $_SESSION['height'];
					echo "cm";
					?>
				</div>
			</div>
			<div class="information" id="information_text">
				<div class="col-xs-4">年龄</div>
				<div class="col-xs-4">体重</div>
				<div class="col-xs-4">身高</div>
			</div>
			<div class="BMI">
				<div class="level">
					<div class="col-xs-2"></div>
					<div class="col-xs-7">您的--<span id="BMI" style="color: orange">BMI
						<?php
						$BMI=$_SESSION['weight']/($_SESSION['height']*$_SESSION['height'])*10000;
						echo round($BMI,1);
						?>
					</span>
				</div>
				<div class="col-xs-3">
					<button class="icon" onclick="window.location.href='BMI.php'"><i class="fa fa-question-circle" style="color: orange"></i></button>
				</div>
			</div>
			<div class="introduction">BMI:身体质量指数（BMI）是目前国际上常量的衡量人体胖瘦程度以及是否是否健康的一个标准</div>
			<div class="calculation">BMI计算公式：体重（kg）/（身高（m）*身高（m））</div>
			<div class="standard">根据您的BMI值，参照下图，来判断自己的胖瘦程度</div>
		</div>
		<div class="space"></div>
		<div class="status">
			<div class="col-xs-3" id="thinnish"></div>
			<div class="col-xs-3" id="normal"></div>
			<div class="col-xs-3" id="chubby"></div>
			<div class="col-xs-3" id="obesity"></div>
		</div>
		<div class="status" id="status_text">
			<div class="col-xs-3">偏瘦</div>
			<div class="col-xs-3">正常</div>
			<div class="col-xs-3">偏胖</div>
			<div class="col-xs-3">肥胖</div>
		</div>
		<div class="status" id="status_data">
			<div class="col-xs-3">0~18.5</div>
			<div class="col-xs-3">18.5~23.9</div>
			<div class="col-xs-3">24~27.9</div>
			<div class="col-xs-3">>=28</div>
		</div>
		<div class="bottom">
			<div id="bottom_icon">
				<div class="col-xs-3">
					<button class="icon" onclick="window.location.href='home.php'"><i class="fa fa-home"></i></button>
				</div>
				<div class="col-xs-3">
					<button class="icon" onclick="window.location.href='analyse.php'"><i class="fa fa-suitcase" style="color: orange"></i></button>
				</div>
				<div class="col-xs-3">
					<button class="icon" onclick="window.location.href='manage.php'"><i class="fa fa-wrench"></i></button>
				</div>
				<div class="col-xs-3">
					<button class="icon" onclick="window.location.href='center.php'"><i class="fa fa-user"></i></button>
				</div>
			</div>
			<div id="bottom_text">
				<div class="col-xs-3">
					<button class="icon"onclick="window.location.href='home.php'">首页</button>
				</div>
				<div class="col-xs-3">
					<button class="icon" style="color: orange" onclick="window.location.href='analyse.php'">健康分析</button>
				</div>
				<div class="col-xs-3">
					<button class="icon" onclick="window.location.href='manage.php'">健康管理</button>
				</div>
				<div class="col-xs-3">
					<button class="icon" onclick="window.location.href='center.php'">个人中心</button>
				</div>
			</div>
		</div>
	</body>
</html>