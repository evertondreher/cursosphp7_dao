<?php

require_once("config.php");

//Carrega um usuário
//$root = new Usuario();
//$root->loadById(1);

//echo $root;


//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);


//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("user");
//echo json_encode($search);


//Carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("user", "12345");
//echo $usuario;


//Criando um novo usuário
//$aluno = new Usuario("aluno", "@lun0");
//$aluno->setDeslogin('aluno');
//$aluno->setDesenha('@lun0');
//$aluno->insert();
//echo $aluno;

$usuario = new Usuario();
$usuario->loadById(6);
$usuario->update("aluno", "@Lun0");
echo $usuario;

?>