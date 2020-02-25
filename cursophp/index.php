<?php



$login = "luis";
$senha = "123";

if(isset($_POST["login"])){

//echo $_POST["login"]."<br>";
//echo $_POST["senha"];

if($_POST["login"] == $login && $_POST["senha"] ==$senha){

    echo "login efetuado com sucesso";
}
else{

    echo "login ou senha invalido";
}
}




?>