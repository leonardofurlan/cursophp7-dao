<?php 

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->SELECT("SELECT * from tb_usuarios");

echo json_encode($usuarios);*/

//Carrega um usuário
//$root = new Usuario();
//$root->loadById(1);
//echo $root;


//Carrega uma lista de usuários
// $lista = Usuario::getList();
// echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
// $search = Usuario::search("a");
// echo json_encode($search);


//Carrega um usuário usando o login e a senha;
$usuario = new Usuario();
$usuario->login("leonardo","1010");
echo $usuario;

 ?>