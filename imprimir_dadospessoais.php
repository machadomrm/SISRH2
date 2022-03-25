<?php

$conn = mysqli_connect("192.168.150.26","root","huprocape#99","banco_rh");
if (mysqli_connect_errno())
{
	echo "Erro" . mysqli_connect_error();
					
}

$cpf_func = $_GET['cpf_func'];
$pesquisa = $conn->query("select * from dados_pessoais where cpf_func='$cpf_func'");

while($row = $pesquisa->fetch_assoc()) 
{

$nome_func= $row['nome_func'];

$rg_func = $row['rg_func'];

$data_exp = $row['data_exp'];

$orgao_emissor = $row['orgao_emissor'];

$data_nasc = $row['data_nasc'];

$sexo = $row['sexo'];
$sexo = mb_strtoupper($sexo);

$escolaridade = $row['escolaridade'];

$nacionalidade = $row['nacionalidade'];

$nacionalidade = mb_strtoupper($nacionalidade);

$sus = $row['sus'];

$tipo_sang = $row['tipo_sang'];

$pront = $row['pront'];

$estado_civil = $row['estado_civil'];

$email_func = $row['email_func'];

$email_func2 = $row['email_func2'];

$cel = $row['cel'];

$cel2 = $row['cel2'];

$nome_mae = $row['nome_mae'];

$nome_mae = mb_strtoupper($nome_mae);

$nome_pai = $row['nome_pai'];

$nome_pai = mb_strtoupper($nome_pai);

$nome_conjugue = $row['nome_conjugue'];

$nome_conjugue = mb_strtoupper($nome_conjugue);

$nome_social = $row['nome_social'];

$nome_social = mb_strtoupper($nome_social);

$cep = $row['cep'];

$logradouro = $row['logradouro'];

$logradouro = mb_strtoupper($logradouro);

$complemento = $row['complemento'];

$complemento = mb_strtoupper($complemento);

$bairro = $row['bairro'];

$bairro = mb_strtoupper($bairro);

$cidade = $row['cidade'];

$cidade = mb_strtoupper($cidade);

$estado = $row['estado'];

$estado = mb_strtoupper($estado);
}

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
                            <h1><strong>Relatório Dados Pessoais</strong></h1>
                        </div>
                    </div>
                    <hr>
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <form id="formPersonalData" action="atualizar_form_dadospessoais.php" method="post">  
                <section class="content">
                    <div class="container-fluid">

                    </div>
                
                    <div class="row" style='margin-left: 1em;'>

                        <div class="col-md-3">
                            <label for="nome">Nome Completo*</label><br>
                            <p><?php echo $nome_func; ?></p>
                        </div>
                        
                        <div class="col-md-2">
                            <label for="data">Data Nasc*</label>
                            <p><?php echo $data_nasc; ?></p>
                        </div> 
                        
                        <div class="col-md-1">
                            <label for="sex">Sexo*</label>
                            <p><?php echo $sexo; ?></p>
                        </div>    

                        <div class="col-md-2">
                            <label for="escol">Escolaridade </label><br>
                            <p><?php echo $escolaridade; ?></p>
                        </div>

                        <div class="col-md-2">
                            <label for="cpf">CPF*</label>
                            <p><?php echo $cpf_func; ?></p>
                        </div>

                        <div class="col-md-2">
                            <label for="cpf">RG</label>
                            <p><?php echo $rg_func; ?></p>
                        </div>
                    </div><hr>                 
                    
                    <div class="row" style='margin-left: 1em;'>

                        <div class="col-md-2">
                            <label for="cpf">Órgão Emissor</label>
                            <p><?php echo $orgao_emissor; ?></p>
                        </div>  
                        
                        <div class="col-md-2">
                            <label for="cpf">Data Exp</label>
                            <p><?php echo $data_exp; ?></p>
                        </div>

                        <div class="col-md-2">
                            <label for="cpf">Nacionalidade</label>
                            <p><?php echo $nacionalidade; ?></p>
                        </div>

                        <div class="col-md-3">
                            <label for="cpf">Nome Mãe</label>
                            <p><?php echo $nome_mae; ?></p>
                        </div>

                        <div class="col-md-3">
                            <label for="cpf">Nome Pai</label>
                            <p><?php echo $nome_pai; ?></p>
                        </div>                                              
                    </div><hr>
                        
                    <div class="row" style='margin-left: 1em;'>

                        <div class="col-md-4">
                            <label for="cpf">Nome Conjuge</label>
                            <p><?php echo $nome_conjugue; ?></p>
                        </div>
                        
                        <div class="col-md-4">
                            <label for="cpf">Filho(a)s</label>
                            <p><?php echo $cpf_func; ?></p>
                        </div>

                        
                    </div><hr>
                          
                    <div class="row" style='margin-left: 1em;'>

                        <div class="col-md-2">
                            <label for="sus">Cartão SUS</label>
                            <p><?php echo $sus; ?></p>
                        </div>

                        <div class="col-md-2">
                            <label for="tipo_sang">Tipo Sanguineo</label>
                            <p><?php echo $tipo_sang; ?></p>
                        </div>

                        <div class="col-md-2">
                            <label for="pront">Prontuário Procape</label>
                            <p><?php echo $pront; ?></p>
                        </div>

                        <div class="col-md-2">
                            <label for="pront">Estado Civil</label>
                            <p><?php echo $estado_civil; ?></p>
                        </div>

                        <div class="col-md-3">
                            <label for="pront">E-mail Pessoal Principal</label>
                            <p><?php echo $email_func; ?></p>
                        </div>
                        

                        <!-- <div class="col-md-3">

                            <label for="nomefilho">Filho(a)s </label><br>
                            <button type="button" class="btn btn-primary">
                                <a href='relacao_filhos.php?cpf_func=<?php echo $cpf_func; ?>' class="text-light">Visualizar</a>
                            </button>                                                       

                        </div>  -->
                       
                 </div><hr>
                        
                 <div class="row" style='margin-left: 1em;'>

                    <div class="col-md-3">
                        <label for="pront">E-mail Pessoal Alternativo</label>
                        <p><?php echo $email_func2; ?></p>
                    </div>

                    <div class="col-md-2">
                        <label for="pront">Nº Celular</label>
                        <p><?php echo $cel; ?></p>
                    </div>

                    <div class="col-md-2">
                        <label for="pront">Celular Alternativo</label>
                        <p><?php echo $cel2; ?></p>
                    </div>

                    <div class="col-md-2">
                        <label for="pront">Nome Social</label>
                        <p><?php echo $nome_social; ?></p>
                    </div>



                    <!-- <div class="col-md-3">

                    <label for="exampleInputEmail1">E-mail Pessoal Alternativo*</label><br>
                    <input type="email"  name='email_func2' class="form-control no-print" value="<?php echo $email_func2; ?>" />

                    </div> -->

                    <!-- <div class="col-md-2"> 

                    <label for="cel" id = "telefone">Nº Celular <i class="fab fa-whatsapp"></i></label> -->
                    <!-- <input type="number" name="cel" class="form-control" required/> -->
                    <!-- <input type="text" class="form-control no-print" name="cel" value="<?php echo $cel; ?>" required>

                    </div>

                    <div class="col-md-2"> 

                    <label for="cel" id = "telefone">Celular Alternativo</label> -->
                    <!-- <input type="number" name="cel2" class="form-control" /> -->
                    <!-- <input type="text" class="form-control no-print" name="cel2" value="<?php echo $cel2; ?>">

                    </div>

                    <div class="col-md-4">

                        <label for="nome_social">Nome Social</label><br>
                        <input type="text" name="nome_social" value="<?php echo $nome_social; ?>" class="form-control no-print" />

                    </div>                                                        -->
                                            
                </div><hr>
                    
                <div id="divAddress" class="row" style='margin-left: 1em;'>
                    
                    <div class="col-md-1">
                        <label for="cep">CEP</label>
                        <p><?php echo $cep; ?></p>
                    </div>

                    <div class="col-md-3">
                        <label for="logradouro">Rua/Avenida</label>
                        <p><?php echo $logradouro; ?></p>
                    </div>

                    <div class="col-md-2">
                        <label for="complemento">Complemento</label>
                        <p><?php echo $complemento; ?></p>
                    </div>

                    <div class="col-md-1">
                        <label for="bairro">Bairro</label>
                        <p><?php echo $bairro; ?></p>
                    </div>

                    <div class="col-md-3">
                        <label for="city">Cidade</label>
                        <p><?php echo $cidade; ?></p>
                    </div>

                    <div class="col-md-1">
                        <label for="estado">Estado</label>
                        <p><?php echo $estado; ?></p>
                    </div>
                                            
                    
                    
                </div><hr>

                <!-- <div id="divAddress" class="row" style='margin-left: 1em;'>

                
                        
                        <div class="col-md-3">

                            <label>Cidade*</label><br>
                            <input type="text" id="province" name="city" value="<?php echo $cidade; ?>" style='text-transform:uppercase' class="form-control" required />

                            </label>
                            
                        </div>

                        <div class="col-md-1">

                            <label for="estado">Estado*</label><br>
                            <input type="text" id="province" name="estado" value="<?php echo $estado; ?>" style='text-transform:uppercase' class="form-control" required />

                            
                        </div>

                        <INPUT TYPE="hidden" NAME="cpf_func" VALUE="<?php echo $cpf_func; ?>">
                        
                </div>                  
                   
                    <hr>                     -->
                   

                    <!-- MODAL --> 
            
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Cadastro de Filhos</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body" id="content-children">
                                    <label for="son">Nome Filho</label><br>
                                    <input type="text" name="nome_filho[]" class="form-control">
                                    <label for="nomefilho">Data Nasc</label><br>
                                    <input type="date" name="nasc_filho[]" class="form-control">
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Salvar</button>
                                    <button type="button" class="btn btn-info" id="add">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </section>

                <!-- <div class="row" style='margin-left: 1em;'>
                        <div class="col-md-8">
                            <button class="btn btn-success" type="submit">Enviar</button>&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="imprimir_dadospessoais.php?cpf_func=<?php echo $cpf_func; ?>"><button class="btn btn-primary" type="button" value="Print this page" onClick="window.print()">Imprimir</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="lista_func.php?cpf_func=<?php echo $cpf_func; ?>"><button class="btn btn-danger" type="button">Voltar</button></a>
                            
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
    <!-- Valida CPF -->
    <script src="js/validacpf.js"></script>
    <!-- Valida CEP -->
    <script src="js/cep.js"></script>
    <!-- adicionar dependentes -->
    <script src="js/javascript.js"></script>
    <!-- gerador de pdf --> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js" integrity="sha384-THVO/sM0mFD9h7dfSndI6TS0PgAGavwKvB5hAxRRvc0o9cPLohB0wb/PTA7LdUHs" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            bsCustomFileInput.init();
        });
    </script>
</body>

</html>