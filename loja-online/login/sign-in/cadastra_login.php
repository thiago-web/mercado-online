<?php 
include('conection');

$nome       = $_POST['nome-cliente'];
$data_nas   = $_POST['data-nasc-cliente'];
$cpf        = $_POST['cpf-cliente'];
$telefone   = $_POST['tel-cliente'];
$cep        = $_POST['cep-cliente'];
$cidade     = $_POST['cidade-cliente'];
$bairro     = $_POST['bairro-cliente'];
$rua        = $_POST['rua-cliente'];
$num        = $_POST['numero-cliente'];
$user_email = $_POST['user-email'];
$pass       = $_POST['pass-cliente'];

$consulta = "SELECT cpf FROM usuarios WHERE cpf = '$cpf' ";
$resultado_consulta = mysqli_query($conect, $conection);

$linha = mysqli_num_rows($resultado_consulta);

if ($linha == 1) {
	?>
	<script type="text/javascript">
		alert('CPF já cadastrado na nossa base de dados, faça o login para continuar !');
	</script>
	<?php
}
else {
	
	$cadastra = "INSERT INTO usuarios(usuario, senha, cpf, nome, data-nascimento, telefone, cep, cidade, bairro, rua, num) 
	VALUES ('$user_email', '$pass','$cpf','$nome','$data_nas', '$telefone','$cep', '$cidade', '$bairro', '$rua', '$num')";

	$resultado_cadastra = mysqli_query($conect, $cadastra);

	if ($resultado_cadastra) {
		?>
		<script type="text/javascript">
			alert('Informações cadastradas!');
		</script>
		<?php
	}
}
?>