<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Armazém Ponto Kent | Solicitar nova Senha</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="../../assets/favicon.ico" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../aseets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Armazém</b> Ponto Kent</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Você esqueceu sua senha? Aqui você pode facilmente recuperar uma nova senha.</p>

      <form action="control/email-enviar.php" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name= "email-cliente" placeholder="E-mail">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Solicitar Nova Senha</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <p class="mt-3 mb-1">
        <a href="login-page.php">Entrar</a>
      </p>
      <p class="mb-0">
        <a href="register-page.php" class="text-center">Criar um nova conta</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../assets/dist/js/adminlte.min.js"></script>
</body>
</html>
