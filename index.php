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

$aluno = new Usuario();

$aluno->setDeslogin("Aluno");
$aluno->setDessenha("@lun0");

$aluno->insert();

echo $aluno;



?>