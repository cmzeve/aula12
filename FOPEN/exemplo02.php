<?php 

//CSV

$sql = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

$stmt = $sql->prepare("SELECT * FROM tb_usuarios ORDER BY idusuario");

$stmt->execute();

$usuarios = $stmt->fetchall(PDO::FETCH_ASSOC);

print_r($usuarios);


?>