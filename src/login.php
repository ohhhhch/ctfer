<?php
session_start();

if ($_SESSION['username']){
    header("Location: index.php");
}else{
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        require dirname(__FILE__) . "/view/login.html";
    }else{
        require "function/User.php";
        require dirname(__FILE__) . "/view/login.html";
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = new User();
        $res = $user->login($username,$password);
        if ($res){
            $is_admin = $res['is_admin'];
            if ($is_admin == 1){
                echo "<script>
                        let newPop = document.createElement('div');
                        newPop.className = 'popup warn popBlock';
                        newPop.textContent = '管理员请从管理员登陆界面登陆！';
                        document.body.appendChild(newPop)
                        
                        setTimeout(function (){
                           $('.popup').addClass('remove')
                           setTimeout(function (){
                              $('.popup').removeClass('remove').removeClass('popBlock').removeClass('warn')
                              window.location.href='./admin/login.php';
                           },300)
                        },2000)
                      </script>";

            }else{
                $login_successful=TRUE;
                $_SESSION['username'] = $res['username'];
                $_SESSION['password'] = $res['pass'];
                $_SESSION['$is_admin'] = 0;
                echo "<script>
                                    let newPop = document.createElement('div');
                                    newPop.className = 'popup succeed popBlock';
                                    newPop.textContent = '登录成功！跳转中';
                                    document.body.appendChild(newPop)
                                    
                                    setTimeout(function (){
                                        window.location.href='index.php';
                                    },2000)
                      </script>";
            }
        }else{
            echo "<script>
                        let newPop = document.createElement('div');
                        newPop.className = 'popup error popBlock';
                        newPop.textContent = '账号或密码错误！';
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