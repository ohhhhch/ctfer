<?php

class Posts
{
    public $mysql = null;
    public function __construct()
    {
        include dirname(__FILE__)."/../lib/db_connect.php";
        // 创建数据库连接
        $this->mysql = new mysqli($host, $dbname, $password, $database);
        // 检查连接
        if ($this->mysql->connect_error) {
            die("Connection failed: " . $this->mysql->connect_error);
        }
    }
    //添加文章
    public function addPost($title,$content,$author,$imgPath = '')
    {
        $sql = "INSERT INTO  posts(title, content,author,img_path) VALUES ('$title', '$content','$author','$imgPath')";
        if ($this->mysql->query($sql)) {
            return true;
        }
        return false;
    }
    public function getById($id)
    {
        $res = $this->CheckId($id);
        if ($res > 0){
            $query = "select * from posts where id = $id";
            $result = $this->mysql->query($query);
            return $result->fetch_assoc();
        }
        return "<script>alert('您没有权限修改文章'); window.history.go(-2)</script>";
    }
    //更新文章
    public function updatePost($new_title,$new_content,$post_id)
    {
        $res = $this->CheckId($post_id);
        if ($res > 0) {
            $query = "UPDATE posts SET title = '$new_title', content = '$new_content' WHERE id = $post_id";
            $result = $this->mysql->query($query);
            //$re = $result->num_rows;
                return $result;
        }
        return false;
    }
    public function getOne($user)
    {
        $sql = "select * from posts where author = '$user'";
        $res = $this->mysql->query($sql);
        $data = array();
        while($row = $res->fetch_assoc())
        {
            $data[]=$row;
        }
        return $data;
    }
    public function CheckId($id)
    {
        $sql = "select * from posts where id = $id";
        $res = $this->mysql->query($sql);
        return $res ->num_rows;
    }
    //删除文章
    public function removePost($post_id)
    {
        $result = $this->CheckId($post_id);
        if ($result > 0){
            $sql = "DELETE FROM posts WHERE id = $post_id";
            if ($this->mysql->query($sql) === TRUE) {
                // 删除成功后，提示删除成功，跳转到首页
                return "<script>alert('文章删除成功');window.history.go(-1);</script>";
            } else {
                // 删除失败，提示删除失败，显示错误信息
                return "文章删除失败: " . $this->mysql->error;
            }
        }
        return "文章不存在！！！";
    }
    //返回所有文章数据
    public function getAll()
    {
        $sql = "SELECT title, author, update_time, content,img_path FROM posts ORDER BY update_time DESC";
        $result = $this->mysql->query($sql);
        $data = array();
        while($row = $result->fetch_assoc())
        {
            $data[]=$row;
        }
        return $data;
    }
    public function __destruct()
    {
        $this->close();
    }

    public function close()
    {
        mysqli_close($this->mysql);
    }
}