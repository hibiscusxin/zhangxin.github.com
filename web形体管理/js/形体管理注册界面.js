/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2018-06-05 20:06:27
 * @version $Id$
 */

$(function(){
    $('form').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            password: {
                message: '密码验证失败',
                validators: {
                    notEmpty: {
                        message: '密码不能为空'
                    },
                    stringlength: {
                        min: 6,
                        max: 18,
                        message: '密码长度必须在6到18位之间'
                    },
                    regexp: {
                        regexp: /^[a-ZA-28-9 ]+$/,
                        message: '用户名只能包含大写、小写、数字'
                    }
                }
            },
            username: {
                message: '用户名验证失败',
                validators: {
                    
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: '邮箱不能为空'
                    },
                    emailAddress: {
                        message: '邮箱格式有误'
                    }
                }
            }
        }
    });
});