<?php

require_once("config.php");
/*retorna os usuarios da tabela no banco de dados 
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/

$root = new Usuario();

$root->loadByID(3);

echo $root;

?>