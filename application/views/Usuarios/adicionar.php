<?php 
    $this->load->view('includes/header');
    $this->load->view('includes/menu');
?>
<div class="content-wrapper">
    <div class="container-fluid"> 
      	<!-- Breadcrumbs-->
      	<ol class="breadcrumb">
	        <li class="breadcrumb-item">
	          	<a href="<?php echo site_url('Principal') ?>">Dashboard</a>
	        </li>
            <li class="breadcrumb-item active">
                <a href="#">Adicionar Usuários</a>
            </li>
      	</ol>
      	<!-- Icon Cards-->
      	<div class="row">
        	<div class="col-xl-12 col-sm-6 mb-3">
                <form class="form" id="form_usuarios" role="form">
                	<div class="row">
                		<div class="col-sm-4">
	                		<div class="form-group">
	                			<label>Nome:</label><span style="color: red; font-weight: bold;"> *</span>
						  		<input type="text" class="form-control" name="nome" placeholder="Nome Completo" required>
	                		</div> 
	                	</div>
	                	<div class="col-sm-4">
	                		<div class="form-group">
	                			<label>E-mail:</label><span style="color: red; font-weight: bold;"> *</span>
						  		<input type="text" class="form-control" name="email" placeholder="E-mail" required>
	                		</div> 
	                	</div>
	                	<div class="col-sm-4">
	                		<div class="form-group">
	                			<label>Login:</label><span style="color: red; font-weight: bold;"> *</span>
						  		<input type="text" class="form-control" name="login" placeholder="Usuário para login" required>
	                		</div> 
	                	</div>
                	</div>
                	<div class="row">
                		<div class="col-sm-4">
	                		<div class="form-group">
	                			<label>Senha:</label><span style="color: red; font-weight: bold;"> *</span>
						  		<input type="password" class="form-control" name="senha" placeholder="Senha" required>
	                		</div> 
	                	</div>
	                	<div class="col-sm-4">
	                		<div class="form-group">
	                			<label>Nível de Acesso:</label><span style="color: red; font-weight: bold;"> *</span>
						  		<select class="form-control" name="nivel_acesso_id">
								  	<option value="1">Administrativo</option>
								  	<option value="2">Usuário</option>
								</select>
	                		</div> 
	                	</div>
                	</div>
                	<div class="row">
                		<div class="col-sm-4">
                			<button type="submit" id="inserir_usuario" class="btn btn-success"><i class="fa fa-plus"></i> Inserir</button>
                			<a href="<?php echo site_url('Usuarios/listarusuarios') ?>" class="btn btn-info"><i class="fa fa-list"></i> Listar</a>
                		</div>
		  			</div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type = "text/javascript">

	$(document).ready(function(){
		$('#form_usuarios').submit(function(e){
		    e.preventDefault();
		    $.ajax({
		        url: "<?php echo site_url('Usuarios/salvarUsuarios'); ?>",
		        type: 'POST',
		        data: $('#form_usuarios').serialize(),       
		        success: function(data) {
		            //alert(data);
		            $('#form_usuarios').trigger("reset");
		            toastr.success('Registro inserido com sucesso! :)');
		        },
		        error: function(data) {
		        	toastr.error('Erro ao inserir registro :(!');
		        }
		   	});
	 	});
	});
</script>
<?php $this->load->view('includes/footer'); ?>