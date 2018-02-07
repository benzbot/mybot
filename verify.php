<?php
$access_token = 'Ss9TX+WXG9191IX/oHJcg7ZvC6+W8fXJCt0mnejjMVHk6OO6/HEN7UQ9Cs3pVITb2L8QU+ye3upQjvaqERK5YV4/mip0ioVM4Db1pYpklrF/0Re+Q7ZTsQpTSJzxXVsI4ali5CJQlLRs9i6dfOsi2QdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>