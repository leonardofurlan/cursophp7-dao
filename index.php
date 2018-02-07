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
// $usuario = new Usuario();
// $usuario->login("leonardo","1010");
// echo $usuario;


//Criando um novo usuário
// $aluno = new Usuario("aluno","@lun0"); //se não passado parametro, descomentar duas linhas abaixo

// // $aluno->setDeslogin("aluno");
// // $aluno->setDessenha("@lun0");

// $aluno->insert();

// echo $aluno;

$usuario = new Usuario();

$usuario->loadById(7);

$usuario->update("professor","0934420");

echo $usuario;

 ?>