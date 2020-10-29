<?php 
//vai ler o arquivo em disco pode ser um binário = imagem
//arquivo binário, passar numa url ou enviar para uma api

$filename = "php7.png";// se for jpg altera

$base64 = base64_encode(file_get_contents($filename));//file retorna binario
// base64_encode  retorna um string formatada em base64


$fileinfo = new finfo(FILEINFO_MIME_TYPE);//deixar dinamico, classe interna finfo
$mimetype = $fileinfo->file($filename);//deixar dinamico, metodo file


//echo "data:image/png;base64,".$base64;// se for jpg altera
$base64encode = "data:".$mimetype.";base64,".$base64;

?>

<a href="<?=$base64encode?>" target="_blank">Link para Imagem</a>

<img src="<?=$base64encode?>">