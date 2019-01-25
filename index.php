<?php

require_once("config.php");
/*retorna os usuarios da tabela no banco de dados 
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/
/*retorna um usuario
$root = new Usuario();

$root->loadByID(6);

echo $root;*/

//carrega uma lista de usuarios

//$lista = Usuario::getList();

//echo json_encode($lista);


// carrega uma lista de usuario buscando pelo login

//$search = Usuario::search("Ba");
//echo json_encode($search);

// carregar um usuario usando senha e login

/*$usuario = new Usuario();

$usuario->login("Jabota","1307");

echo $usuario;*/
/*criando um usuario
$aluno = new Usuario("Jf_Chico", "2345678");

$aluno->insert();

echo $aluno;*/

$usuario = new Usuario();

$usuario->loadByID(11);

$usuario->update("Professor", "pr07e550r");

echo $usuario;



?>