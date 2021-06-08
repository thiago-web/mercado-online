<?php
session_start();
$conect = include("conection.php");

//VERIFICA SE A VARIAVEL EXISTE
/*if (empty($_POST['usuario']) || empty($_POST['senha'])) {
	$_SESSION['erro_values'] = true;
	header('location: login-page.php');
	exit();
}*/


var_dump($conect);

//RESGATA O USUÁRIO E SENHA COM O MÉODO POST E GUARDA NAS VARIÁVEIS
$usuario = mysqli_real_escape_string($conect, $_POST['usuario']);
$senha = mysqli_real_escape_string($conect, $_POST['senha']);


$query = "SELECT usuario, senha FROM usuarios WHERE usuario = '{$usuario}' AND senha = md5('{$senha}')";
//$query = "SELECT usuario, senha FROM usuarios";
//RESGATA O RESULTADO DA QUERY NA VARIAVEL
$result = mysqli_query($conect, $query);
//CRIAMOS UMA VARIAVEL LINHA QUE RECEBE VALOR BOOLEAN
$row = mysqli_num_rows($result);
//SE FOR UM VALOR TRUE(1) VAI PARA PÁGINA

if ($row == 1) {

	if ($usuario == 'adm@armazem.com') {
		header('location:administrador/index.php ');
		exit();
	} else {
		$_SESSION['logado'] = true;
		header('location: ../../index.php');
		exit();
	}
}
// SE FOR FALSE(0)RETORNA PARA O INDEX
else {
	unset($_SESSION['erro_values']);
	$_SESSION['nao_autenticado'] = true;
	header('location: login-page.php');
	exit();
}
session_destroy();
