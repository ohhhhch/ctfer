<?php
session_start();
//管理员登陆


if ($_SESSION['username']){
    header("Location: ../index.php");
}else{
    require dirname(__FILE__) . "/../view/admin_login.html";
    require "../function/User.php";
    include "../lib/config.php";
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $username = addslashes($_POST['username']);
        $password = addslashes($_POST['password']);
        $password = base64_encode(str_rot13($password.$salt));
        $user = new User();
        $res = $user->login($username,$password);

        if ($res){
            $is_admin = $res['is_admin'];
            if ($is_admin == 0){
                echo "<script>
                                    let newPop = document.createElement('div');
                                    newPop.className = 'popup warn popBlock';
                                    newPop.textContent = '普通用户请从普通用户登陆界面登陆！';
                                    document.body.appendChild(newPop)
                                    
                                    setTimeout(function (){
                                        window.location.href='../login.php';
                                    },2000)
                      </script>";
            }else{
                $login_successful = TRUE;
                $_SESSION['username'] = $res['username'];
                $_SESSION['password'] = $res['pass'];
                $_SESSION['is_admin'] = 1;
                echo "<script>
                                    let newPop = document.createElement('div');
                                    newPop.className = 'popup succeed popBlock';
                                    newPop.textContent = '登录成功！跳转中';
                                    document.body.appendChild(newPop)
                                    
                                    setTimeout(function (){
                                        window.location.href='../index.php';
                                    },2000)
                      </script>";

            }
        } else {
            echo "<script>
                                    let newPop = document.createElement('div');
                                    newPop.className = 'popup error popBlock';
                                    newPop.textContent = '账号或密码不正确！';
                                    document.body.appendChild(newPop)
                                    setTimeout(function (){
                                       $('.popup').addClass('remove')
                                       setTimeout(function (){
                                          $('.popup').removeClass('remove').removeClass('popBlock').removeClass('error')
                                       },300)
                                    },2000)
                      </script>";
        }
    }

}