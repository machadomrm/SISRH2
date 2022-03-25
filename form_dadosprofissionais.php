<?php
$id_func = $_GET['id_func'];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>SISRH - LOGIN</title>
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
                    <div class="row mb-2" style='margin-left:2px;'>
                        <div class="col-sm-12">
                            <h1><strong>Dados Profissionais</strong></h1><hr>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <form action="salvar_form_dadosprofissionais.php" method="post">  
                <section class="content">
                    <div class="container-fluid">

                    </div>

                    <div class="row" style='margin-left: 1em;'>

                        <div class="col-md-2">

                            <label for="registration">Matrícula</label>
                            <input type="number" name="matricula" class="form-control" required />

                        </div>
                        
                        <div class="col-md-2">

                            <label for="conselho">Conselho</label>
                            <input type="number" name="conselho" class="form-control" required />

                        </div>

                            

                        <div class="col-md-2">

                            <label for="ctps">CTPS</label>
                            <input type="number" name="ctps" id="ctps" placeholder="Digite nº CTPS" class="form-control" />

                        </div>

                        <div class="col-md-1">

                            <label for="serie">SÉRIE</label>
                            <input type="text" name="serie_ctps" id="serie" class="form-control" />

                        </div>

                        <div class="col-md-2">

                            <label for="pis">PIS/PASEP</label>
                            <input type="text" name="pis" class="form-control" required />

                        </div>

                        <div class="col-md-2">

                            <label for="datacadpis">Data de Cadastro PIS</label>
                            <input type="date" name="data_pis" class="form-control" />

                        </div>

                    </div>

                    <br>

                    <div class="row" style='margin-left: 1em;'>                      
                        
                        <div class="col-md-3">

                            <label for="type_provider">Tipo de Prestador </label><br>
                            <select name="id_tipopresta" class="form-control" required>
                                <option value="">Selecione</option>
                                <?php
								$conn = mysqli_connect("192.168.150.26","root","huprocape#99","banco_rh");
								if (mysqli_connect_errno())
								{
								echo "Erro" . mysqli_connect_error();				
								}
								$pesquisa = $conn->query("select * from tipo_presta order by id_tipopresta asc");

                    			while($row = $pesquisa->fetch_assoc()) {
									$tipo_presta=$row['tipo_presta'];
									$id_tipopresta=$row['id_tipopresta'];
									
									echo "<option value='".$id_tipopresta."'>".$tipo_presta."</option>";
								}
								?>                               
                            </select>

                        </div>

                        <div class="col-md-3">
                        
                        <label for="funcao">Função</label>
                        <select id="funcao" name="id_funcao" class="form-control" required>
                            <option value="">Selecione</option>
                            <?php
								$conn = mysqli_connect("192.168.150.26","root","huprocape#99","banco_rh");
								if (mysqli_connect_errno())
								{
								echo "Erro" . mysqli_connect_error();				
								}
								$pesquisa = $conn->query("select * from funcoes order by nome_funcao asc");

                    			while($row = $pesquisa->fetch_assoc()) {
									$nome_funcao=$row['nome_funcao'];
									$nome_funcao=utf8_encode($nome_funcao);
									$id_funcao=$row['id_funcao'];
									
									echo "<option value='".$id_funcao."'>".$nome_funcao."</option>";
								}
								?>
                            						
                        </select>
                            
                        </div>
                    
                    <div class="col-md-3">

                        <label for="type_provider">Cargo </label><br>
                        <select name="id_cargo" class="form-control" required>
                            <option value="">Selecione</option>
                            <?php
								$conn = mysqli_connect("192.168.150.26","root","huprocape#99","banco_rh");
								if (mysqli_connect_errno())
								{
								echo "Erro" . mysqli_connect_error();				
								}
								$pesquisa = $conn->query("select * from cargo order by nome_cargo asc");

                    			while($row = $pesquisa->fetch_assoc()) {
									$nome_cargo=$row['nome_cargo'];
									$nome_cargo=utf8_encode($nome_cargo);
									$id_cargo=$row['id_cargo'];
									
									echo "<option value='".$id_cargo."'>".$nome_cargo."</option>";
								}
								?>
                                                      
                        </select>

                    </div>
                    
                    <div class="col-md-2">

                        <label for="data">Especialidade</label>
                        <input type="text" name="especialidade" class="form-control" />

                    </div> 

                </div>                              
                
                <br>

                <div class="row" style='margin-left: 1em;'>    
                
                        <div class="col-md-2">

                            <label for="data">Data de Exercício</label>
                            <input type="date" name="data_exercicio" class="form-control" />

                        </div>  
            
                        <div class="col-md-3">
                        
                            <label for="setor_init">Setor Hospital</label>
                            <select id="setor_sei" name="id_setor" class="form-control" required="">
                                <option value="">Selecione</option>
                                <?php
								$conn = mysqli_connect("192.168.150.26","root","huprocape#99","banco_rh");
								if (mysqli_connect_errno())
								{
								echo "Erro" . mysqli_connect_error();				
								}
								$pesquisa = $conn->query("select * from setores order by nome_setor asc");

                    			while($row = $pesquisa->fetch_assoc()) {
									$nome_setor=$row['nome_setor'];
                                    $id_setor=$row['id_setor'];
									$nome_setor=utf8_encode($nome_setor);
									echo "<option value='".$id_setor."'>".$nome_setor."</option>";
								}
								?>
                                						
							</select>
                        </div>     
                        
                        <div class="col-md-4">
                        
                            <label for="setor_init">Setor S.E.I</label>
                            <select id="setor_sei" name="sigla_sei" class="form-control" required="">
                                <option value="">Selecione</option>
                                <?php
								$conn = mysqli_connect("192.168.150.26","root","huprocape#99","banco_rh");
								if (mysqli_connect_errno())
								{
								echo "Erro" . mysqli_connect_error();				
								}
								$pesquisa = $conn->query("select * from setores_sei order by nome asc");

                    			while($row = $pesquisa->fetch_assoc()) {
									$sigla_sei=$row['sigla'];
									$nome_setor_sei=$row['nome'];
									echo "<option value='".$sigla_sei."'>".$nome_setor_sei."</option>";
								}
								?>
                                						
							</select>
                        </div>     

                        <div class="col-md-2">

                        <label for="data">Data de Admissão</label>
                        <input type="date" name="data_adm" class="form-control" />

                        </div> 
                      
                    </div>
                    <br>
                   
                <div class="row" style='margin-left: 1em;'>  

                <div class="col-md-3">

                        <label for="lot_origin">Orgão de Origem*</label>
                        <input type="text" name="org_origem" class="form-control" required />

                    </div>   

                <div class="col-md-2">

                        <label for="exec_org">Orgão em Exercício</label>
                        <input type="text" name="org_exercicio" class="form-control" required />

                </div>
                
                <div class="col-md-2">

                    <label for="vem">Cartão SUS</label>
                    <input type="number" name="sus" placeholder="Nº do VEM" class="form-control" />
                
                </div>

                <div class="col-md-2">

                    <label for="vem">Cartão VEM</label>
                    <input type="number" name="vem" placeholder="Nº do VEM" class="form-control" />
                
                </div>

                <div class="col-md-2">

                        <label for="portaria">Portaria</label>
                        <input type="text" name="portaria" class="form-control" />                       

                </div>

                <input type="hidden" name="id_func" value="<?php echo $id_func; ?>">

                                

            </div>
                            
                <hr> 

                    <!-- BOTÕES -->
                    <div class="row" style='margin-left:10px;'>
                        <div class="col-md-8">
                            <button class="btn btn-success" type="submit">Enviar</button>&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="index.html"><button class="btn btn-danger" type="button">Voltar</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>

                    </div>
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