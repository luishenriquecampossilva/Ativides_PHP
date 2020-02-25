<?php
if($_SERVER['REQUEST_METHOD']=='GET'){//INDICA O METHODO DE ENFIO DA REQUISIÇÃO
if($_GET['data'] == 'hoje'){
echo date('d/m/Y');
}else{

	echo 'parametro não reconhecido ';
}

}
	
	if($_SERVER['REQUEST_METHOD']=='PUT'){

		if($_GET['data'] == 'hoje'){
echo date('d/m/Y');
}else{

	echo 'parametro não reconhecido ';
}

parse_str(file_get_contents('php://input'),$_PUT);//VERIFICA SE A CHAVE E IGUAL A VALOR
	}

	if($_SERVER['REQUEST_METHOD']=='POST'){
		if($_POST['data'] == 'hoje'){
echo date('d/m/Y');
}else{

	echo 'parametro não reconhecido ';
}


	}

	if($_SERVER['REQUEST_METHOD']=='DELETE'){

		$url = basename($_SERVER['REQUEST_URI']);

		

		
		if(is_numeric( $url)){

			echo 'excluido cliente com código'.$url;

		}
		else{

			echo 'codigo não enviado';
		}
	}

?>