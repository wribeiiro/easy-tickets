    <?php 
        $this->load->view('includes/header');
        $this->load->view('includes/menu');
    ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href="#">Dashboard</a>
        </li>
      </ol>
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-ticket"></i>
              </div>
              <div class="mr-5">26  - Tickets</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('Tickets/listar') ?>">
              <span class="float-left">Ver detalhes</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-users"></i>
              </div>
              <div class="mr-5">11 - Clientes</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('Clientes/listas') ?>">
              <span class="float-left">Ver Detalhes</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-question"></i>
              </div>
              <div class="mr-5">123 - BC</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('BC/listar') ?>">
              <span class="float-left">Ver Detalhes</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-user"></i>
              </div>
              <div class="mr-5"><b><?php echo $totalUsers; ?></b> - Usuários</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('Usuarios/listarUsuarios') ?>">
              <span class="float-left">Ver Detalhes</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      <!-- Area Chart Example-->
      <canvas id="myAreaChart" width="100%" height="30" style="display: none"></canvas>
      <div class="row">
        <div class="col-lg-8">
          <!-- Example Bar Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-bar-chart"></i> Gráfico de Tickets</div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-8 my-auto">
                  <canvas id="myBarChart" width="100" height="50"></canvas>
                </div>
                <div class="col-sm-4 text-center my-auto">
                  <div class="h4 mb-0 text-primary">$34,693</div>
                  <div class="small text-muted">YTD Revenue</div>
                  <hr>
                  <div class="h4 mb-0 text-warning">$18,474</div>
                  <div class="small text-muted">YTD Expenses</div>
                  <hr>
                  <div class="h4 mb-0 text-success">$16,219</div>
                  <div class="small text-muted">YTD Margin</div>
                </div>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
        </div>
        <div class="col-lg-4">
          <!-- Example Notifications Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-newspaper-o"></i> Feed Notícias</div>
            <div class="list-group list-group-flush small">
              <a class="list-group-item list-group-item-action" href="#">

                <?php 
                  $cont = 0;
                  foreach ($noticias->channel->item as $noticia):
                    $cont++;
                    if ($cont == 5) break;
                    
                    $titulo    = $noticia->title;
                    $descricao = $noticia->description;
                    $link      = $noticia->link;
                    $data      = $noticia->pubDate;

                    echo "
                      <div class=\"media\">
                        <i class=\"fa fa-newspaper-o fa-2x\" style=\"margin-right: 10px\"></i> 
                        <div class=\"media-body\">
                          {$titulo}
                          <div class=\"text-muted smaller\">{$data}</div>
                        </div>
                      </div><hr>";
                  endforeach;
                ?>
              </a>
              <a class="list-group-item list-group-item-action" href="http://www.contabeis.com.br/rss/noticias/">Ver todas..</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php 
        $this->load->view('includes/footer');
    ?>