<?php

$datos=array(


	"nombre"=>$_POST['nombreTxt'],
	"paterno"=>$_POST['paternoTxt'],
	"materno"=>$_POST['maternoTxt'],
	"cuenta"=>$_POST['cuentaTxt'],
	"escuela"=>$_POST['escuelaTxt']
);


$fi=fopen($_POST['nombreTxt']."dat","a") or die ("Ocurrio un error");
fwrite($fi,json_encode($datos));


fclose($fi);

?>

<center><p>LOS DATOS SE AGREGARON</p></center>