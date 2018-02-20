<?php

$html = file_get_contents('http://datachart.500.com/pls/');
print_r($html) ;
//print_r($http_response_header);
//$fp = fopen('http://www.baidu.com', 'r');
//print_r(stream_get_meta_data($fp));
//fclose($fp);


//$data = [
//    'author' => '白菜打下',
//    'mail' => 'info@aiyooyoo.com',
//    'text' => '博主很给力',
//];
//$data = http_build_query($data);
//$opts = [
//    'http' => [
//        'method' => 'POST',
//        'header' => "Content-type:application/x-www-form-urlencoded\r\n".
//            "Content-Length: ".strlen($data)."\r\n".
//            "Cookie: PHPSESSID=13ROTEGFGJDFDFDOGDFGD"."\r\n".
//            "User-Agent: Mozilla/5.0(Windows: U; Windows NT 6.1; zh-CH; rv: 1.9.2.13) Gecko/20101203 Firefox/3.6.13"."\r\n".
//            "Referer:http://aiyooyoo.com/index.php/archives/7/"."\r\n",
//        'content' => $data,
//    ],
//];
//$context = stream_context_create($opts);
//$html = @file_get_contents('http://aiyooyoo.com/index.php/archives/7/comment', false, $context);