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
                <a href="#">Listar Usuários</a>
            </li>
      	</ol>
      	<!-- Icon Cards-->

        <div class="row">
            <div class="col-xl-12 col-sm-6 mb-3">
                <a href="<?php echo site_url('Usuarios/adicionarusuarios') ?>" class="btn btn-info"><i class="fa fa-plus"></i> Adicionar</a>
            </div>
        </div>
      	<div class="row">
        	<div class="col-xl-12 col-sm-6 mb-3">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $cont = 0;
                                foreach ($usuario as $user):
                                    echo '<tr>';
                                    echo '<td>' . $user->id. '</td>';
                                    echo '<td>' . $user->nome. '</td>';
                                    echo '<td>' . $user->email. '</td>';
                                    echo '<td>
                                        <a href="editarusuarios/'.$user->id.'" class="badge badge-primary" style="margin: 3px">Editar</a>
                                        <a href="" onclick="deletaReg('.$user->id.')" class="badge badge-danger deleta" style="margin: 3px">Excluir</a>
                                    </td>';
                                    echo '</tr>';
                                endforeach;
                            ?>
                        </tbody>
                    </table>    
                </div>
            </div>
        </div>
    </div>
</div>
<script type = "text/javascript">
    function deletaReg(id) {
    
        $.ajax({
            url: "<?php echo site_url('Usuarios/apagarUsuarios'); ?>",
            type: 'post',
            data: {id: id},
            success: function(retorno){ 
                toastr.success('Registro deletado com sucesso! :)');
                tr.fadeOut();
            },
            error: function(retorno) {
                toastr.error('Erro ao deletar registro :(!');
                console.log(retorno);
                console.log(id);
            }
        });
    }
</script>
<?php $this->load->view('includes/footer'); ?>