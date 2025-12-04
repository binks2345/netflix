<?php
if(isset($_GET['onpage']) && isset($_GET['id']) && isset($_GET['ip'])){
	$currectTime = time();
	$path = "../data/await/".strval($_GET['id']);
	$path_blurry = "../data/await/".strval($_GET['id']).".notfocus";
	$path_waitng = "../data/await/".strval($_GET['id']).".wait";
	if($_GET['onpage'] == "true"){
	if(file_exists($path)){
		$op = fopen($path,'w');
		fwrite($op,$currectTime);
		fclose($op);
		
	}
	if(file_exists($path_blurry)){
		unlink($path_blurry);
	}
	if(file_exists($path_waitng)){
		unlink($path_waitng);
	}
	}else{
		if(isset($_GET['iswaiting'])){
		if(file_exists($path)){
		$op = fopen($path,'w');
		fwrite($op,$currectTime);
		fclose($op);
		
		}
		if(!file_exists($path_waitng)){
		$op = fopen($path_waitng,'w');
		fclose($op);
		}
		
		}
		if(!file_exists($path_blurry)){
		$op = fopen($path_blurry,'w');
		fclose($op);
		}
		
	}
	
	
}

?>