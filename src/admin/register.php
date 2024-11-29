<?php
session_start();

include('../lib/config.php');
// 获取用户输入
$username = $_POST['username'];

$invite_code = $_POST['invite_code'];

$request_method = $_SERVER['REQUEST_METHOD'];
if ($request_method === 'GET') {
    require "../view/admin_register.html";
}else{
    require "../function/User.php";
    require "../view/admin_register.html";
    if ($invite_code == $valid_code) {//管理员注册
        $user = new User();
        $res = $user->register($username, $password);
        echo $res;
    } else {
        echo "<script>
                let newPop = document.createElement('div');
                newPop.className = 'popup error popBlock';
                newPop.textContent = '请填写有效的邀请码！';
                document.body.appendChild(newPop);
                
                setTimeout(function (){
                   $('.popup').addClass('remove')
                   setTimeout(function (){
                      $('.popup').removeClass('remove').removeClass('popBlock').removeClass('error')
                   },300)
                },2000)
              </script>";
    }
}