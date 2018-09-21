<?php
$access_token = 'RVPWj6aEOnRaw6bo/n8u9+W2Sxb7VQlCJ32AzvkqdHjSbPEIR+6I6btcmbozz4Y8eVx6J2n0guQ4TFAVlf8Ihwudfs3Zw/5SbM81x0NrvRk5IXYpzHFhMkWBtXGZdKqqSV+JSH61mNvU+P89RkraLAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
