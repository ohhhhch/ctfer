<?php
session_start();
include "../function/User.php";

if ($_SESSION['username']){
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require "./view/changePassword.html";
    }else{
        $username = $_POST['username'];
        $old_password = $_POST['old_pass'];
        $new_password = $_POST['new_pass'];
        $confirm_password = $_POST['confirm_pass'];
        if ($old_password === $_SESSION['password']) {
            if ($new_password === $confirm_password) {
                $user = new User();
                $result = $user->modifyPass($username,$new_password);
                if ($result) {
                    echo "<script>alert('密码修改成功！！！');window.history.go(-1);</script>";
                } else {
                    echo "<script>alert('未知错误，密码修改失败');window.history.go(-1);</script>";
                }
            } else {
                die("<script>alert('两次输入的新密码不一致');window.history.go(-1);</script>");
            }
        } else {
            die("<script>alert('原密码校验不通过');window.history.go(-1);</script>");
        }
    }
}else{
    header("location:../index.php");
}
