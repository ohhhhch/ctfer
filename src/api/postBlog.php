<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');
include('../function/Posts.php');
include('../function/FILE.php');

if ($_SESSION['username']){
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        require "./view/post_blog.html";
    }else if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        /**
         * $xmlData = file_get_contents('php://input');
         * $xmlObject = simplexml_load_string($xmlData);
         * $arrayData = json_decode(json_encode($xmlObject), true);
         */
        $title = $_POST['title'];
        $content = $_POST['content'];
        $author = $_SESSION['username'];
        $path = '';
        if ($_FILES['file']['name']) {
            if ($_SESSION['is_admin'] == 1) {
                $filename = $_FILES['file']['name'];
                $file = new FILE();
                $result = $file->upload($filename);
                if ($result) {
                    echo "<script>alert('图片上传成功!');</script>";
                    $path = $file->show();
                }else{
                    echo "<script>alert('failed!');</script>";
                }
            } else {
                echo ("<script>alert('you not admin!!!不能上传图片');window.history.go(-1)</script>");
            }
        }
        $post = new Posts();
        if (is_null($title)){
            echo "<script>alert('标题不能为空')</script>";
        }else {
            $res = $post->addPost($title, $content, $author, $path);
            if ($res) {
                echo "<script>alert('文章发表成功！！！');window.history.go(-1);</script>";
            } else {
                echo "<script>alert('文章发表失败，请联系管理员')</script>";
            }
        }
    }else{
        echo "请求方式有误！！";
    }

}else{
    header("location: ./login.php");
}
