<?php

function cry($str,$salt)
{
    return ("ba".base64_decode("c2U2NA==")."_"."encode")(str_rot13($str.$salt));
}

$salt = "newstar";
$valid_code = "114514";#邀请码
$password = cry("ganctf666@",$salt);
$uploadDir = dirname(__FILE__)."/../upload/";
