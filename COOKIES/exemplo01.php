<?php

//setcookie("NOME_DO_COOKIE", "Programação Web", time() + 3600);

$data = array(
	"aula"=>"Programação Web"
	);
setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

echo "OK";

?>