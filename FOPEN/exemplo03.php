<?php 

//CSV

$sql = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

$stmt = $sql->prepare("SELECT * FROM tb_usuarios ORDER BY idusuario");

$stmt->execute();

$usuarios = $stmt->fetchall(PDO::FETCH_ASSOC);

$headers = array();// array para armazenar os nomes das colunas

foreach ($usuarios[0] as $key => $value) {
	array_push($headers, ucfirst($key));
}

//echo implode(",", $headers);

$file = fopen("usuarios.csv","w+");

fwrite($file,implode(",", $headers)."\r\n");// tranforms um arrayem string (escreve o nome dos campos)

foreach ($usuarios as $row) {//para cada linha do BD
	
	$data = array();

		foreach ($row as $key => $value) {// nos campos

			array_push($data,$value);
		}

		fwrite($file,implode(",", $data)."\r\n");
}

fclose($file);



?>