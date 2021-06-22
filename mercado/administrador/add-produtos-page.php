<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Armazém Ponto Kent · Adicionar um Produto</title>
	<!-- Link Bootstrap Icons -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
	<!-- Links CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<!-- scripts -->
	<script type="text/javascript" src="assets/js/modernizr.custom.97074.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="text-center">
			<h1 > Adicionar um produto</h1>
		</div>
		<div class="form" >
			<form method="POST" action="add-produtos-control.php">
				<div class=form-row>
					<div class="form-group col-md-4">
						<label for="categoria_prod">Catergoria do Produto</label>
						<select name="categoria_produto" id="categoria_prod" class="form-control" required>
							<option selected value="">Escolha</option>
							<option value="1">  Açougue</option>
							<option value="2">  Bebidas</option>
							<option value="3">  Cereais</option>
							<option value="4">  Doces</option>
							<option value="5">  Frios</option>
							<option value="6">  Higiene</option>
							<option value="7">  Hortifruti</option>
							<option value="8">  Infantil/Bebê</option>
							<option value="9">  Laticínio</option>
							<option value="10"> Limpeza</option>
							<option value="11"> Massas</option>
							<option value="12"> Mercearia</option>
							<option value="13"> Padaria</option>
							<option value="14"> PetShop</option>
							<option value="15"> Promoçoes</option>
							<option value="16"> Saudabilidade</option>
							<option value="17"> Ultilidades</option>
						</select>
					</div>
					<div class="form-group col-md-4">
						<label for="nome_prod">Nome do produto</label>
						<input type="text" name="nome_produto" class="form-control" id="nome_prod" required>
					</div>
					<div class="form-group col-md-4">
						<label for ="preco_prod" >Preço</label>
						<input type="text" name="preco_produto" class="form-control"required>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="descri_prod">Descrição do Produto (Opicional)</label>
						<textarea class="form-control" name="descricao_produto" rows="4" cols="2" ></textarea >
					</div>
					<div class="form-group col-md-6">
						<input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>
						<label for ="imagem_prod">Imagem do Produto</label>
						<input type="file" name="imagem_produto" id="imagem_prod" class="form-control"  data-loading-text="Salvando...">
					</div>
				</div>
				<div class="form-row text-center">
					<div class="form-group col-md-12">
						<button type="submit" class="btn btn-primary"> Adicionar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>