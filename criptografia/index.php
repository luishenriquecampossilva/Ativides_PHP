<?php

//criando um array

$data = [
"nome"=>"hcode"];


//criptogranfando

//criando uma constante

define('SECRET',pack('a16',	'senha'));

$mcrypt = mcrypt_encrypt(
	MCRYPT_RIJNDAEL_128,SECRET,
	json_encode($data),
	MCRYPT_MODE_ECB
);

var_dump(base64_encode($mcrypt));
?>