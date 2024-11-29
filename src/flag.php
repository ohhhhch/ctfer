<?php
//不会告诉你，真正的flag是需要请求172.18.0.2的flag.php来获取的
$allowedIp = '127.0.0.1';
$allowedUserAgentPattern = '/Firefox/i';

// 获取X-FORWARD-FOR请求头
$xForwardedFor = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : '';
$UA = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT']:'';


// 检查IP是否在允许的列表中
if(preg_match($allowedUserAgentPattern, $UA)) {
    if (strpos($xForwardedFor, $allowedIp) !== false) {

        $req = $_GET['request'];
        echo "<h1>利用?request参数来发起请求吧！！！</h1>";
        $ch = curl_init($req);

        $response = curl_exec($ch);

        // 检查CURL是否成功
        if ($response === false) {
            echo 'CURL请求失败: ' . curl_error($ch);
        } else {
            echo 'CURL请求成功: ' . $response;
        }

        // 关闭CURL句柄
        curl_close($ch);
    } else {
        echo '我不接受来自外部的IP';
    }
}
else{
    echo "不是Firefox的我不用";

}
