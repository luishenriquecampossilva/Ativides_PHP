<?php
if(isset($_POST["teste"])){


    $teste = $_POST["teste"];

    

   switch($teste){
case 1:
echo"janeiro";
break;
case 2:
echo"fevereiro";
break;
case 3:
echo"março";
break;

case 4:


echo "maio";
break;

default:
echo"nao existe";

   }
}
?>