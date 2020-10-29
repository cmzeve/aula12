<?php 

$filename = "usuarios.csv";

if (file_exists($filename)){

	$file = fopen($filename, "r");

	$headers = explode(",",fgets($file));// string para array,nas vírgulas

	$data = array();

	while($row = fgets($file)){

		$rowData = explode(",",$row);
		$linha =array();

		for ($i = 0; $i < count($headers); $i++){//conta no headers quantos campos tem

			$linha[$headers[$i]] = $rowData[$i];//$i=0 está pegando a posição exata do headers é p idusuário
		}	//criando um chave chamada idusuário na linha

		array_push($data, $linha);

	}


	fclose($file);

	var_dump($data);

}

?>