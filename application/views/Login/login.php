<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Easy Tickets - Sistema Rápido para Chamados">
  <meta name="author" content="Wellisson Ribeiro">
  <title><?php echo $titulo ?></title>
  <link rel="icon" href="<?php echo site_url() ?>assets/img/favicon.png">
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url() ?>assets/template-sbadmin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url() ?>assets/template-sbadmin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url() ?>assets/template-sbadmin/css/sb-admin.css" rel="stylesheet">
  <link href="<?php echo site_url() ?>assets/toastr-master/build/toastr.css" rel="stylesheet">
  <script src="<?php echo site_url() ?>assets/toastr-master/build/toastr.min.js"></script>
</head>

<body class="bg-dark" style="background-image: url(<?php echo site_url() ?>assets/img/banner.jpg); background-size: cover; background-attachment: fixed; padding-top: 80px">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header" style="text-align: center">Easy Tickets - Autenticação</div>
      <div class="card-body">
        <?php 
           if($this->session->flashdata('erro_login') != "" ):
              echo '<div class="alert alert-danger">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                          '.$this->session->flashdata('erro_login').'
                    </div>'
                  ;
          endif;
        ?>
        <form method="post" id="form_login" action="<?php echo base_url('Login/logar') ?>">
          <div class="form-group">
            <label for="exampleInputEmail1">Usuário</label>
            <input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Informe seu usuário.." name="login">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Informe sua senha.." name="senha">
          </div>
          <button class="btn btn-primary btn-block"><i class="fa fa-send"></i> Entrar</button>
        </form>
        <div class="text-center">
          <br>
          <a class="d-block small" href="#">Esqueci minha senha?</a>
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