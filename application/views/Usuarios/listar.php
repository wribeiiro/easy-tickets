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
                <a href="" class="btn btn-info"><i class="fa fa-plus"></i> Adicionar</a>
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
                                    echo '<td><a href="" class="badge badge-primary" style="margin: 3px">Editar</a><a href="" class="badge badge-danger">Excluir</a></td>';
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

<?php $this->load->view('includes/footer'); ?>