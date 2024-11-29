<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        form {
            width: 90%;
            max-width: 600px; /* 调整最大宽度 */
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 0 auto; /* 居中显示 */
            box-sizing: border-box;
        }

        input[type="text"], textarea, input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #00cccc;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<?php
// 引入数据库连接文件
include("../function/Posts.php");
session_start();

// 判断用户是否是管理员
if ($_SESSION['is_admin'] == 1) {
    // 如果是管理员，获取文章的id，这里假设通过get方法传递
    $id = $_REQUEST['id'];
    $posts = new Posts();
    $row = $posts->getById($id);
    $post_title = $row['title'];
    $post_content = $row['content'];
    if (gettype($row) === "string"){
        die($row);
    }
    // 显示一个表单，让用户修改文章的标题和内容
    echo "<form action='updateBlog.php' method='post'>";
    echo "<input type='hidden' name='id' value='$id'>"; // 隐藏文章id，用于提交更新
    echo "<label for='title'>标题:</label>";
    echo "<input type='text' name='title' id='title' value='$post_title'>"; // 显示文章原标题，可修改
    echo "<label for='content'>内容:</label>";
    echo "<textarea name='content' id='content'>$post_content</textarea>"; // 显示文章原内容，可修改
    echo "<input type='submit' name='submit' value='更新文章'>"; // 提交按钮，用于更新文章
    echo "</form>";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $post_id = $_POST['id'];
        $title = $_POST['title'];
        $content = $_POST['content'];

        $result2 = $posts->updatePost($title, $content, $post_id);
        if ($result2) {
            echo "<script>alert('文章修改成功'); window.history.go(-1)</script>";
        } else {
            echo "<script>alert('文章修改失败'); window.history.go(-1)</script>";
        }
    }
} else {
    // 如果不是管理员，提示不能修改文章，跳转到首页
    echo "<script>alert('111,您没有权限修改文章'); window.history.go(-1)</script>";
}
?>
</body>
</html>
