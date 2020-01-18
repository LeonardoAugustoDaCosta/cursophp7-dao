<?php 

require_once("config.php");


/*

CARREGA APENAS UM USUÁRIO
$root = new Usuario();
$root->loadById(1);
echo $root;
*/

//CARREGA UMA LISTA DE USUÁRIOS
//$lista = Usuario::getList();

//CARREGA OS USUÁRIOS COM UMA PARTE DO NOME
//$lista = Usuario::search('da');

//CARREGA REGISTRO COM LOGIN E SENHA
//$usuario = new Usuario();
//$usuario->login('leonardo','1234567');


//INSERT + IPDATE
//$aluno = new Usuario("aluno","senhanova");
//$aluno->loadById(1);
//$aluno->insert();
//$aluno->update("aluno","senhanova23");

$aluno = new Usuario();
$aluno->loadById(3);
$aluno->delete();
echo $aluno;


?>