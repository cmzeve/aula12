<?php 
//vai ler o arquivo em disco pode ser um binário = imagem

$filename = "php7.png";

$base64 = base64_encode(file_get_contents($filename));//file retorna binario
// base64_encode  retorna um string formatada em base64

echo "data:image/png;base64,".$base64;



?>