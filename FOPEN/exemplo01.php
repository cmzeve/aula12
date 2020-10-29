<?php 

//	$file = fopen ("log.txt","w+");

//	fwrite($file, date("Y-m-d H:i:s"));

	$file = fopen ("log.txt","a+");

	fwrite($file, date("Y-m-d H:i:s")."\r\n");

	fclose($file);




?>