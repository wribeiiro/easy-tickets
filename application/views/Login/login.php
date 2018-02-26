<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Tickets">
  <meta name="author" content="Wellisson Ribeiro">
  <title><?php echo $titulo ?></title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url() ?>assets/template-sbadmin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url() ?>assets/template-sbadmin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url() ?>assets/template-sbadmin/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header" style="text-align: center">Easy Tickets | Autenticação</div>
      <div class="card-body">
        <form method="post" action="<?php echo base_url('Login/logar') ?>">
          <div class="form-group">
            <label for="exampleInputEmail1">E-mail</label>
            <input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter email" name="login">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password" name="senha">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Lembrar Senha</label>
            </div>
          </div>
          <button class="btn btn-primary btn-block">Entrar</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Cadastrar Conta</a>
          <a class="d-block small" href="forgot-password.html">Esqueci minha senha?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url() ?>assets/template-sbadmin/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/template-sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>assets/template-sbadmin/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>