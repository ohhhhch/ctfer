<?php
session_start();
include "../function/Posts.php";

if ($_SESSION['username']){
    $id = $_GET['id'];
    $posts = new Posts();
    $result = $posts->removePost($id);
    echo $result;
}else{
    header("location: ../index.php");
}