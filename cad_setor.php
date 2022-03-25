<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>SISRH - CAD Setor</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="css/adminlte.min.css" />
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i
            ></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index.html" class="nav-link">Inicio</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="painel_setores.php" class="nav-link">Setores</a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Pesquisar" aria-label="Search" />
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
                    </div>
                </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle" />
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Chefe setor 01
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i
                      ></span>
                                    </h3>
                                    <p class="text-sm">Solicito cadastro no SEI</p>
                                    <p class="text-sm text-muted">
                                        <i class="far fa-clock mr-1"></i> 3 minutos
                                    </p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3" />
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Chefe setor 02
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i
                      ></span>
                                    </h3>
                                    <p class="text-sm">Usuário não cadastrado</p>
                                    <p class="text-sm text-muted">
                                        <i class="far fa-clock mr-1"></i> 4 Horas
                                    </p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="img/brad.png" alt="User Avatar" class="img-size-50 img-circle mr-3" />
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Chefe setor 03
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i
                      ></span>
                                    </h3>
                                    <p class="text-sm">Solicito autenticação</p>
                                    <p class="text-sm text-muted">
                                        <i class="far fa-clock mr-1"></i> 2 Dias
                                    </p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">Visualizar Todas</a
              >
            </div>
          </li>
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-bell"></i>
              <span class="badge badge-warning navbar-badge">15</span>
            </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <span class="dropdown-item dropdown-header">15 Notificações</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-envelope mr-2"></i> 4 novas messagens
                                <span class="float-right text-muted text-sm">3 minutos</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-users mr-2"></i> 8 novas solicitações
                                <span class="float-right text-muted text-sm">12 horas</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-file mr-2"></i> 3 novos e-mails
                                <span class="float-right text-muted text-sm">2 dias</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">Visualizar Todas</a
              >
            </div>
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <style>
            .sidebar-dark-primary {
                background-color: #22577a !important;               
            }
        </style>
        <!-- Brand Logo -->
        <a href="index.html" class="brand-link">&nbsp;&nbsp;
            <img
              src="img/logo2.png" width="40" height="40"
              alt="AdminLTE Logo"
              
              style="opacity: 0.8"
            />
            <span class="brand-text font-weight-light" style="font-family: monospace; font-size: 24px; color:#dfdfdf;">&nbsp;SISRH</span>
          </a>
        
                              <!-- Sidebar -->
                                <div class="sidebar">
                                  <!-- Sidebar user (optional) -->
                                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                                    <div class="image">
                                    <img src="img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                                    </div>
                                    <div class="info">
                                    <a href="#" class="d-block">Alexandre Oliveira</a>
                                    </div>
                                    </div>
        
                                  <!-- Sidebar Menu -->
                                  <nav class="mt-2">
                                  <?php require_once "menu.php" ?>
                                </nav>
                            </div>

                                        <!-- /.sidebar -->
                                </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2" style='margin-left:8px;'>
                        <div class="col-sm-6">
                            <h1><strong>Cadastro de Setor</strong></h1>
                        </div>
                    </div><hr>
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <form id="formPersonalData" action="salvar_form_cad_setor.php" method="post">  
                <section class="content">
                    <div class="container-fluid">

                    </div>
                <!-- <fieldset>
                    <legend>
                        Dados Pessoais
                    </legend> -->
                    <div class="row" style='margin-left: 1em;'>

                        <div class="col-md-4">

                            <label for="nome">Nome Setor</label><br>
                            <input type="text" name="nome_func" class="form-control" placeholder="Digite nome do setor a cadastrar" required />

                        </div>
                    </div>
<br>
                    <div class="row" style='margin-left: 1em;'>

                        <div class="col-md-3">
                            <button type="submit" class="btn btn-success">
                                Enviar
                            </button>&nbsp;&nbsp;

                           <a href='painel_setores.php'> <button type="button" class="btn btn-danger">
                                Voltar
                            </button></a>

                        </div>                        
                      
                    </div>             
                                                    
                    <!-- MODAL --> 
            
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Cadastro de Setor</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body" id="content-children">
                                    <label for="son">Setor</label><br>
                                    <input type="text" name="nome_filho[]" class="form-control">
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                    <a href='confirmacao.php'><button type="button" class="btn btn-success">Salvar</button></a>
                                    <button type="button" class="btn btn-info" id="add">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </section>
                <br>

                <!-- <div class="row" style='margin-left: 1em;'>
                        <div class="col-md-8">
                            <button class="btn btn-success" type="submit">Cadastrar</button>&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="index.html"><button class="btn btn-danger" type="button">Sair</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
                            
                        </div>

                </div> -->

            </form>

    <br>

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="js/demo.js"></script>
    <!-- validação CPF -->
    <script src="js/validacpf.js"></script>
    <!-- validação CEP -->
    <script src="js/cep.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            bsCustomFileInput.init();
        });
    </script>
</body>

</html>