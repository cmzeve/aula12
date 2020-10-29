<?php 

if(isset($_COOKIE["NOME_DO_COOKIE"])){//array super global

	//var_dump($_COOKIE["NOME_DO_COOKIE"]);

	$obj = json_decode($_COOKIE["NOME_DO_COOKIE"]);

	echo $obj->aula;
}

?>