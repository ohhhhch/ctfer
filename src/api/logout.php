<?php
//退出登陆
session_start();

// 清除所有会话变量
$_SESSION = array();

// 销毁会话
session_destroy();

// 重定向到主页
header('Location: ../index.php');
exit();
?>