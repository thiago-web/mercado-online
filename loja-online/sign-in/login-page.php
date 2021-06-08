"<?php

session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Thiago henrique">
  <meta name="generator" content="Jekyll v4.1.1">
  <title>Armazém Ponto Kent · Online</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

  <!-- Bootstrap core CSS -->
  <!-- <link href="../../../assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJR)AkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="signin.css" rel="stylesheet">


</head>

<body class="text-center">
  <div id = "fb-root" > </div> <script assíncrona adiar crossorigin = "anonymous" src = "https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v10.0" nonce = "sH9BUAVH" > </script> 
  <div class="container text-center">
    <div class="row">
      <form class="form-signin" method="POST" action="login.php">
        <div class="form-row">
          <div class="form-group col-md-12">
            <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <h5 class="h5 mb-5 mt-5 font-weight-normal">Entre com seu Usuário e Senha</h5>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <?php
            if (!empty($_SESSION['erro_values']) && $_SESSION['erro_values'] == true) {
            ?>
              <div class='alert alert-danger' role='alert'>
                <p> <strong>Usuário</strong> ou <strong>Senha</strong> não está preenchido. </p>
              </div>
            <?php
            }
            if (isset($_SESSION['nao_autenticado'])) {
            ?>
              <div class='alert alert-danger' role='alert'>
                <p> <strong>Usuário</strong> ou <strong>Senha</strong> está invalido. </p>
              </div>
            <?php
            }

            unset($_SESSION['nao_autenticado']);
            session_destroy();
            ?>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <input type="text" id="inputUsuario" name="usuario" minlength="14" maxlength="" class="form-control" placeholder="Usuário" autofocus>
          </div>
          <div class="form-group col-md-12 ">
            <input type="password" id="inputSenha" minlength="" maxlength="" class="form-control" placeholder="Senha" autofocus name="senha">
          </div>
        </div>


        <div class="form-row">
          <div class="form-group col-md-12">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
          </div>
          <div class="form-group col-md-12">
            <div class = "fb-login-button" data-width = "" data-size = "grande" data-button-type = "continue_with" data-layout = "default" data-auto-logout-link = "false " data-use-continue-as = " false " > 
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="row">
      <div class="container">
        <a><span class="btn btn-outline-success " data-toggle="modal" data-target="#MyModal" style="border: none; border-color: transparent;">Cadastrar-me</span></a>
        <p class="mt-1 mb-1 text-muted">&copy; 2021</p>
      </div>

      <div id="MyModal" class="modal fade" role="dialog">
        <div class="modal-dialog text-left" style="">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Preencha as informações abaixo:</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form class="form" method="POST" action="cadastra_login.php">
                  <div class="row">
                    <div class="form-group col-md-12">

                      <h4 class="display-4"> Informações de contato</h4>

                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-8">
                      <label> Nome Completo</label>
                      <input class="form-control" type="text" required name="nome-cliente" placeholder="Digite o seu nome completo..">
                    </div>
                    <div class="form-group col-md-4">
                      <label>Data de Nascimento</label>
                      <input type="text" maxlength="10" required minlength="10" onkeypress="mascaraData( this, event)" class="form-control" name="data-nas-cliente" placeholder="Ex: 25/05/2000">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>CPF</label>
                      <input type="text" name="cpf-cliente" placeholder=___.___.___-__ maxlength="14" class="form-control" onkeydown="javascript: fMasc(this, mCPF);" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Telefone</label>
                      <input type="text" name="tel-cliente" class="form-control" placeholder="(__)____-____" onkeydown="javascript: fMasc(this, mTel)" maxlength="14" required>
                    </div>

                  </div>
                  <div class="row">
                    <div class="form-group col-md-4">
                      <label>CEP</label>
                      <input type="text" name="cep-cliente" class="form-control" onkeydown="javascript:fMasc(this, mCEP);" maxlength="10" placeholder="00.000-000  " required>
                    </div>
                    <div class="form-group col-md-4">
                      <label>Cidade</label>
                      <input type="text" name="cidade-cliente" class="form-control" placeholder="Ex:Cidade"required>
                    </div>
                    <div class="form-group col-md-4">
                      <label>Bairro</label>
                      <input type="text" name="bairro-cliente" class="form-control" placeholder="Ex:Bairro"required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-8">
                      <label> Logradouro</label>
                      <input type="text" name="rua-cliente" class="form-control" placeholder="Ex: Sua rua aqui" required>
                    </div>
                    <div class="form-group col-md-4 pt-4">
                      <label>Número</label>
                      <input type="text" name="numero-cliente" class="form-control" onkeydown="javascript: fMasc(this, mNum)" placeholder="Ex: 000" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <hr class="divider">
                      <h4 class="display-4"> Acesso</h4>

                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>Email</label>
                      <input type="email" class="form-control" name="user-email" placeholder="seuemail@email.com" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Crie uma Senha</label>
                      <input type="text" name="pass-cliente" class="form-control" placeholder="Digite a sua senha" required>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Scrip das Mascaras -->
  <script type="text/javascript" src="js/mascaras.js"></script>

  <!-- Importando o jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <!-- Importando o js do bootstrap -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>