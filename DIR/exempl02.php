<?php 

$images = scandir("imagens");//retorna um array

//var_dump($images);

$data = array();

foreach($images as $img){
	if(!in_array($img, array(".",".."))){//se encontrar o "." ou o ".." retorna true

		$filename = "imagens" . DIRECTORY_SEPARATOR . $img;
		$info = pathinfo($filename);
		//var_dump($info);

		$info["size"] = filesize($filename);// adicionar o tamanho em bytes

		$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));//quando foi modificado

		$info["url"] = "http:localhost/DIR/" . str_replace("\\", "/", $filename);

		array_push($data, $info);//adicionanado em data o info

	}
}

var_dump($data);


?>