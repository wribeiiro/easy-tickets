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
                                        <button type="button" name="delete" id="'.$user->id.'" class="badge badge-danger deleta">Excluir</button>
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

    $(document).on('click', '.deleta', function(){  
       var id = $(this).attr("id");  
       var tr = $(this).closest('tr');
       if(confirm("Deseja deletar este registro?")){  
            $.ajax({  
                url:"<?php echo site_url('Usuarios/apagarUsuarios'); ?>",  
                method:"POST",  
                data:{id:id},  
                success:function(data){  
                    toastr.success('Registro deletado com sucesso! :)');
                    tr.fadeOut(); 
                },
                error: function(data){
                    toastr.error('Erro ao deletar registro! :(');
                }
            });  
        }  
        else {  
            return false;
        }  
    });  
</script>
<?php $this->load->view('includes/footer'); ?>