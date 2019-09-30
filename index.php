<?php
	
	require_once("config.php");
//carrega um usuario
//$root = new usuario();
//$root->loadbyId(3);
//echo $root;

//Carrega uma lista de usuario
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuario buscando pelo login
//$search = Usuario::search("Ma");
//echo json_encode($search);

	//Carrega um usuario usando login e senha

//	$usuario = new Usuario();
//	$usuario->login("josep","456");

//	echo $usuario;


//insert de usuarios (criando novo usuario)
//$aluno = new Usuario();
//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("@lun@");

//$aluno->insert();

//echo $aluno;

//Update (alterar usuario)
//$usuario = new Usuario();

//$usuario->loadbyId(10);

//$usuario->update("professor", "@lun@");

//echo $usuario;

	$usuario = new Usuario();

	$usuario->loadbyId(7);

	$usuario->delete();

	echo $usuario;




?>