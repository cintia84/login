<?php
$usuario = $_POST ["username"];
$contrasenia = $_POST ["pass"];

$ckusuario= "cintia";
$ckpass = 1234;

if ($usuario==$ckusuario && $contrasenia==$ckpass   ) {
  header ("location:https://www.potrerodigital.org/" );
} else {
  echo "Incorrecto";
  header ("location:https://www.pixar.com/error404" );
}

 ?>
