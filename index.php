<?php 

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->SELECT("SELECT * from tb_usuarios");

echo json_encode($usuarios);

 ?>