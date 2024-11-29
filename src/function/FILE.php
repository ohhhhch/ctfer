<?php

class FILE
{
    public $file;
    public $filename;
    public $sandbox;
    public $dirName;
    public function __construct()
    {
        include dirname(__FILE__)."/../lib/config.php";
        $this->sandbox = md5($_SERVER['REMOTE_ADDR']);
        $this->dirName = $uploadDir.$this->sandbox."/";
        if (!file_exists($this->dirName)){
            mkdir($this->dirName);
            chdir($this->dirName);
        }
        $this->file = $_FILES['file'];
        $this->check($this->file);
    }
    public function upload($filename)
    {
        $this->filename = $filename;
        if (move_uploaded_file($_FILES['file']['tmp_name'], $this->dirName.$this->filename)) {
            return true;
        } else {
            return false;
        }
    }
    public function show()
    {
        return "./upload/".$this->sandbox."/".$this->filename;
    }
    public function check($file)
    {
        if (preg_match("/\//i", $file['name'])){
            throw new Error("hacker!");
        }
        $num = substr_count($file['name'], ".");
        /*if ($num != 1){
            throw new Error("hacker!!");
        }*/
        if ($file['size'] > 2000000){
            throw new Error("The file is too large!!!");
        }
    }


}