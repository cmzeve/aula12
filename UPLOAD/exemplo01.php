<form method="POST" enctype="multipart/form-data">

	<input type="file" name="fileUpload">

	<button type="submit">Enviar</button>

</form>

<?php 

if(($_SERVER["REQUEST_METHOD"] == "POST")){


	$file = $_FILES["fileUpload"];//varray super global

	//verificar se não deu errro no envio

	if($file["error"]){

		throw new Exception("Error: ".$file["error"]); //permite a gerar uma nova exceção

	}

	$dirUploads = "uploads";//criar diretório

	if(!is_dir($dirUploads)){//vai verificar se já existe

		mkdir($dirUploads);

	}

	// não use copy, assim passa por uma pasta temporária

	if(move_uploaded_file($file["tmp_name"], $dirUploads.DIRECTORY_SEPARATOR.$file["name"])){


		echo "UPLOAD realizado dom sucesso!";

	}else{


		throw new Exception("Não foi possível realizar o upload.");

	}

}


?>