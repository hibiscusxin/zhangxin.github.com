/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2018-06-10 15:15:43
 * @version $Id$
 */

$().ready(function() {
	$("#login_form").validate({
		rules: {
			user: "required",
			password: {
				required: true,
				minlength: 5
			},
		},
		messages: {
			user: "请输入用户名",
			password: {
				required: "请输入密码",
				minlength: jQuery.format("密码不能小于{0}个字 符")
			},
		}
	});
	$("#register_form").validate({
		rules: {
			user: "required",
			password: {
				required: true,
				minlength: 5
			},
			
		},
		messages: {
			user: "请输入姓名",
			password: {
				required: "请输入密码",
				minlength: jQuery.format("密码不能小于{0}个字 符")
			},
		}
	});
});
$(function() {
	$("#register_btn").click(function() {
		$("#register_form").css("display", "block");
		$("#login_form").css("display", "none");
	});
	$("#back_btn").click(function() {
		$("#register_form").css("display", "none");
		$("#login_form").css("display", "block");
	});
});