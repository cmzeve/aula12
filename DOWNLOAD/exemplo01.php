<?php

$link ="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png";

$content = file_get_contents($link);

//var_dump($content);// testar antes de prosseguir

$parse = parse_url($link);

//var_dump($parse); //interessa o path

$basename = basename($parse["path"]); //pegamos o path

$file = fopen($basename,"w+");//criar o arquivo no disco do servidor

// se qusier mudar o nome troca o $basename no fopen

fwrite($file, $content);//passamos o conteúdo binário

fclose($file);

?>

<img src="<?=$basename?>">