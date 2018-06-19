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
		<link href="../css/manage.css" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<ul id="myTab" class="nav nav-tabs">
				<li class="active">
					<a href="#home" data-toggle="tab">饮食建议
					</a>
				</li>
				<li>
					<a href="#sport" data-toggle="tab">运动建议</a>
				</li>
			</ul>
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane fade in active" id="home">
					<div class="col-xs-12"><img style="width:100%;height:150px;" src="../img/food.jpg">
					</div>
					<div class="col-xs-12" id="title">均衡营养</div>
					<div class="col-xs-12">维持适宜的体重应该饮食不过量，食物种类多样丰富，粗心搭配，建议可以多搭配粗粮食用，维持血糖的平稳。</div>
					<div class="col-xs-12" id="title">合理选择食物</div>
					<div class="col-xs-12">多选低脂肪，低糖分的食物，多吃蔬菜及每天吃水果，餐前可先喝汤或半杯水可增加饱腹感，维持体重时，应该注意食物的选择。</div>
					<div class="col-xs-12" id="title">注意餐次及定时定量</div>
					<div class="col-xs-12">切记不可跳餐，以免下餐饥不择食，在不自觉间进食太多食物，两顿正餐应相隔5-6小时，中间（3-4小时）可加小食，小食应以低脂食物为主，例如饼干、水果、脱脂奶等。</div>
					
					<div class="manage">
						<div class="col-xs-12">
							<button class="button" onclick="window.location.href='diet.html'">开始我的体重管理</button>
						</div>
					</div>
					<div class="col-xs-12" id="space"></div>
				</div>
				<div class="tab-pane fade" id="sport">
					<div class="col-xs-12"><img style="width:100%;height:150px;" src="../img/sport.jpg">
						<div class="col-xs-12" id="title">运动类型</div>
						<div class="col-xs-12">建议可以保持每周3次左右的有氧运动，比如游泳、慢跑、踩单车等，对身材要求比较高的可以适当加入力量训练，以便能塑造更完美的体型。</div>
						<div class="col-xs-12" id="title">运动时间</div>
						<div class="col-xs-12">有氧运动建议在三餐前进行比较合适，并且时间需持续30分钟以上；确定每天运动的时间，逐渐养成运动的习惯。</div>
					</div>
					<div class="manage">
						<div class="col-xs-12">
							<button class="button" onclick="window.location.href='diet.html'">开始我的体重管理</button>
						</div>
					</div>
				</div>
				<div class="bottom">
					<div id="bottom_icon">
						<div class="col-xs-3">
							<button class="icon"><i class="fa fa-home" onclick="window.location.href='home.php'"></i></button>
						</div>
						<div class="col-xs-3">
							<button class="icon"><i class="fa fa-suitcase" onclick="window.location.href='analyse.php'"></i></button>
						</div>
						<div class="col-xs-3">
							<button class="icon"><i class="fa fa-wrench" style="color: orange"onclick="window.location.href='manage.php'"></i></button>
						</div>
						<div class="col-xs-3">
							<button class="icon"><i class="fa fa-user" onclick="window.location.href='center.php'"></i></button>
						</div>
					</div>
					<div id="bottom2_text">
						<div class="col-xs-3">
							<button class="icon" onclick="window.location.href='home.php'">首页</button>
						</div>
						<div class="col-xs-3">
							<button class="icon" onclick="window.location.href='analyse.php'">健康分析</button>
						</div>
						<div class="col-xs-3">
							<button class="icon" style="color: orange" onclick="window.location.href='manage.php'">健康管理</button>
						</div>
						<div class="col-xs-3">
							<button class="icon" onclick="window.location.href='center.php'">个人中心</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>