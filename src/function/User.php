<?php
class User{
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
    //获取数据库连接对象
    public function conn()
    {
        return $this->mysql;
    }
    //获取user表的所有数据
    public function getAll()
    {
        $sql = "select * from user";
        $res = $this->mysql->query($sql);
        $data = array();
        while($row = $res->fetch_assoc())
        {
            $data[]=$row;
        }
        return $data;
    }
    public function getOne($user)
    {
        $sql = "select * from user where username = $user";
        $res = $this->mysql->query($sql);
        $data = array();
        while($row = $res->fetch_assoc())
        {
            $data[]=$row;
        }
        return $data;
    }
    //用户登陆
    public function login($username,$password)
    {
        $query = "SELECT * FROM user WHERE username='$username' AND pass='$password'";
        $result = $this->mysql->query($query);
        if ($result->num_rows > 0){
            return $result->fetch_assoc();
        }
        return false;
    }
    //管理员注册
    public function register($username,$password)
    {
        $query = "SELECT * FROM user WHERE username='$username'";
        $result = $this->mysql->query($query);
        if ($result->num_rows > 0) {
            // 用户名已存在，返回到注册页面
            return "<script>
                        let newPop = document.createElement('div');
                        newPop.className = 'popup warn popBlock';
                        newPop.textContent = '用户存在，无需重复注册';
                        document.body.appendChild(newPop);
                        
                        setTimeout(function (){
                           $('.popup').addClass('remove')
                           setTimeout(function (){
                              $('.popup').removeClass('remove').removeClass('popBlock').removeClass('error')
                           },300)
                        },2000)
                    </script>";

        }
        else {
            // 插入新用户
            $insertQuery = "INSERT INTO user (username, pass,is_admin) VALUES ('$username', '$password',1)";
            if ($this->mysql->query($insertQuery) === TRUE) {
                return "<script>
                            let newPop = document.createElement('div');
                            newPop.className = 'popup succeed popBlock';
                            newPop.textContent = '注册成功！前往登录中';
                            document.body.appendChild(newPop);
                            
                            setTimeout(function (){
                               $('.popup').addClass('remove')
                               setTimeout(function (){
                                  $('.popup').removeClass('remove').removeClass('popBlock').removeClass('succeed')
                                  $('.shape').click()
                               },300)
                            },2000)
                        </script>";
            }
                // 注册失败，返回到注册页面
            return "<script>alert('fail to register!'); window.location.href='./register.php';</script>";
        }
    }
    //修改密码
    public function modifyPass($username,$new_password)
    {
        $sql = "UPDATE user SET pass = '$new_password' WHERE username = '$username'";
        if ($this->mysql->query($sql)) {
            return true;
        }
        return false;
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