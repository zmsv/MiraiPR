<?php
 /* 核心函数：http支持
  * http_get
  * http_post
 */
  function http_get($url)
  {
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    $html = curl_exec($ch);
    curl_close($ch);
    return $html;
  }
  function http_post($url,$data)
  {
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_POST,1);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    $html = curl_exec($ch);
    curl_close($ch);
    return $html;
  }
?>
