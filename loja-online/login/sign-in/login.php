<?php 
session_start();
include("conection.php");

//VERIFICA SE A VARIAVEL EXISTE
if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('location: index.html');
	exit();
}



//RESGATA O USUÁRIO E SENHA COM O MÉODO POST E GUARDA NAS VARIÁVEIS
$usuario = mysqli_real_escape_string($conect, $_POST['usuario']);
$senha = mysqli_real_escape_string($conect, $_POST['senha']);

//SELECIENO OS USUARIOS QUE POSSUEM A MESMA SENHA  E USUARIO IGUAIS NO BANCO
$query = "SELECT usuario, senha FROM usuarios WHERE usuario = '{$usuario}' AND senha = md5('{$senha}')";
//RESGATA O RESULTADO DA QUERY NA VARIAVEL
$result = mysqli_query($conect, $query);
//CRIAMOS UMA VARIAVEL LINHA QUE RECEBE VALOR BOOLEAN
$row = mysqli_num_rows($result);
//SE FOR UM VALOR TRUE(1) VAI PARA PÁGINA PAINEL
if($row == 1) {
	
	header('Location: ../paginas-produtos/acougue/acougue.php ');
	exit();
}
// SE FOR FALSE(0)RETORNA PARA O INDEX
else 
{
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.html');
	exit();
}
session_destroy();
?>