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

// // inclusão da biblioteca
// require_once("dompdf/dompdf_config.inc.php");

// // alguns ajustes devido a variações de servidor para servidor
// if ( get_magic_quotes_gpc() )
//     $documentTemplate = stripslashes($documentTemplate);

// // abertura de novo documento
// $dompdf = new DOMPDF();

// // carregar o HTML
// $dompdf->load_html($documentTemplate);

// // dados do documento destino
// $dompdf->set_paper("A4", "portrail");

// // gerar documento destino
// $dompdf->render();

// // enviar documento destino para download
// $dompdf->stream("dompdf_out.pdf");

// exit(0);

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
    <link rel="stylesheet" media="screen" href="http://www.site.com/css/style.css" type="text/css">

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
                            <h1><strong>Dados Pessoais</strong></h1>
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
                <!-- <fieldset>
                    <legend>
                        Dados Pessoais
                    </legend> -->
                    <div class="row" style='margin-left: 1em;'>

                        <div class="col-md-5">

                            <label for="nome">Nome Completo*</label><br>
                            <input type="text" name="nome_func" class="form-control" value="<?php echo $nome_func; ?>" required />

                        </div>

                        <div class="col-md-2">

                            <label for="data">Data Nasc*</label>
                            <input type="date" name="data_nasc" class="form-control" value="<?php echo $data_nasc; ?>" required >

                        </div>

                        <div class="col-md-1">

                            <label for="sex">Sexo*</label>
                            <select name="sexo" class="form-control" required>
                                <option value='<?php echo $sexo; ?>'><?php echo $sexo; ?></option>
                                <option value="masc">MASC</option>
                                <option value="fem">FEM</option>
                            </select>

                        </div>

                        <div class="col-md-3">

                            <label for="escol">Escolaridade </label><br>
                            <select name="escolaridade" class="form-control">
                                <option value='<?php echo $escolaridade; ?>'><?php echo $escolaridade; ?></option>
                                <option value="2GC">Segundo Grau Completo</option>
                                <option value="2GI">Segundo Grau Incompleto</option>
                                <option value="CTC">Curso Técnico Completo</option>
                                <option value="CTI">Curso Técnico Incompleto</option>
                                <option value="NSC">Nível Superior Completo</option>
                                <option value="NSI">Nível Superior Incompleto</option>
                                <option value="PGC">Pós Graduação Completo</option>
                                <option value="PGI">Pós Graduação Incompleto</option>
                            </select>

                        </div>

                    </div>

                    <br>
                    
                        <div class="row" style='margin-left: 1em;'>

                        <div class="col-md-2">

                            <label for="cpf">CPF*</label>
                            <input type="text" value="<?php echo $cpf_func; ?>" class="form-control no-print" disabled />
                            
                        </div>

                        <div class="col-md-2">

                            <label for="rg">RG*</label>
                            <input type="number" name="rg_func" id="rg" value="<?php echo $rg_func; ?>" class="form-control no-print" required/>

                        </div>

                        <div class="col-md-2">

                            <label for="data">Órgão Emissor*</label>
                            <input type="text" name="orgao_emissor" style='text-transform:uppercase' value="<?php echo $orgao_emissor; ?>" class="form-control no-print" required/>

                        </div>            
                            
                        <div class="col-md-2">

                            <label for="data">Data Exp*</label>
                            <input type="date" name="data_exp" class="form-control no-print" value="<?php echo $data_exp; ?>" required />

                        </div>

                        <div class="col-md-3">

                            <label for="naturalidade">Nacionalidade</label>
                            <input type="text" name="nacionalidade" value="<?php echo $nacionalidade; ?>" class="form-control no-print" />

                        </div>
                    </div>    

                        <br>
                        
                    <div class="row" style='margin-left: 1em;'>

                        <div class="col-md-4">

                            <label for="nomemae">Nome Mãe*</label>
                            <input type="text" name="nome_mae" class="form-control no-print" value="<?php echo $nome_mae; ?>" required />

                        </div>

                        <div class="col-md-4">

                            <label for="nomepai">Nome Pai</label>
                            <input type="text" name="nome_pai" class="form-control no-print" value="<?php echo $nome_pai; ?>"  />

                        </div>

                        <div class="col-md-3">

                            <label for="nomeconjugue">Nome Conjuge</label>
                            <input type="text" name="nome_conjugue" class="form-control no-print" value="<?php echo $nome_conjugue; ?>" />

                        </div>

                        
                    </div>
                    <br>
                          
                    <div class="row" style='margin-left: 1em;'>                        

                        <div class="col-md-1">

                            <label for="nomefilho">Filho(a)s </label><br>
                            <button type="button" class="btn btn-primary no-print">
                                <a href='relacao_filhos.php?cpf_func=<?php echo $cpf_func; ?>' class="text-light">Visualizar</a>
                            </button>                                                       

                        </div> 

                        <div class="col-md-2" style="margin-left: 15px;">

                            <label for="nomefilho">Dependentes </label><br>
                            <button type="button" class="btn btn-primary no-print">
                                <a href='relacao_dependentes.php?cpf_func=<?php echo $cpf_func; ?>' class="text-light">Visualizar</a>
                            </button>                                                       

                        </div> 
                       
                 </div> 
                         
                 <br>
                        
                        <div class="row" style='margin-left: 1em;'>

                        <div class="col-md-2">

                            <label for="sus">Cartão SUS</label>
                            <!-- <input type="number" name="sus" placeholder="Nº do SUS" class="form-control" /> -->
                            <input type="text" name="sus" placeholder="Nº do SUS" class="form-control no-print" value="<?php echo $sus; ?>">

                        </div>                       
                                      
                        <div class="col-md-2">

                            <label for="tipo_sanguineo">Tipo Sanguineo </label><br>
                            <select name="tipo_sang" class="form-control no-print">
                                <option value="<?php echo $tipo_sang; ?>"><?php echo $tipo_sang; ?></option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                            </select>

                        </div>

                        <div class="col-md-2">

                            <label for="pront">Prontuário Procape</label>
                            <input type="number" name="pront" value="<?php echo $pront; ?>" class="form-control no-print" />

                        </div>

                        <div class="col-md-2">
                            <label for="estado_civil">Estado Civil</label>
                            <select name="estado_civil" class="form-control no-print" required>
                                <option value="<?php echo $estado_civil; ?>"><?php echo $estado_civil; ?></option>
                                <option value="solteiro">Solteiro(a)</option>
                                <option value="casado">Casado(a)</option>
                                <option value="separado">Separado(a)</option>
                                <option value="divorciado">Divorciado(a)</option>
                                <option value="viuvo">Viuvo(a)</option>
                                <option value="outros">Outros</option>
                            </select>
                        </div>

                        <div class="col-md-3">

                            <label for="exampleInputEmail1">E-mail Pessoal Principal*</label><br>
                            <input type="email" name= 'email_func' class="form-control no-print" value="<?php echo $email_func; ?>" required />
                            
                        </div>
                        
                    </div>
                    <br>

                    <div class="row" style='margin-left: 1em;'>

                    <div class="col-md-3">

                    <label for="exampleInputEmail1">E-mail Pessoal Alternativo*</label><br>
                    <input type="email"  name='email_func2' class="form-control no-print" value="<?php echo $email_func2; ?>" />

                    </div>

                    <div class="col-md-2"> 

                    <label for="cel" id = "telefone">Nº Celular <i class="fab fa-whatsapp"></i></label>
                    <!-- <input type="number" name="cel" class="form-control" required/> -->
                    <input type="text" class="form-control no-print" name="cel" value="<?php echo $cel; ?>" required>

                    </div>

                    <div class="col-md-2"> 

                    <label for="cel" id = "telefone">Celular Alternativo</label>
                    <!-- <input type="number" name="cel2" class="form-control" /> -->
                    <input type="text" class="form-control no-print" name="cel2" value="<?php echo $cel2; ?>">

                    </div>

                    <div class="col-md-4">

                        <label for="nome_social">Nome Social</label><br>
                        <input type="text" name="nome_social" value="<?php echo $nome_social; ?>" class="form-control" />

                    </div>                                                       
                                            
                    </div>
                    <br>
                    
                    <div id="divAddress" class="row" style='margin-left: 1em;'> 
                                            
                    <div class="col-md-2">

                        <label for="cep">CEP*</label><br> 
                        <input type="text" id="postalCode" name="cep" class="form-control" maxlength="8" value="<?php echo $cep; ?>" required />

                    </div> 
                    
                    <div class="col-md-4">

                        <label for="logradouro">Rua/Avenida*</label><br>
                        <input type="text" id="street" name="logradouro"  value="<?php echo $logradouro; ?>" style='text-transform:uppercase' class="form-control street no-print" required/>

                    </div>

                    <div class="col-md-2">

                        <label for="complemento">Complemento</label><br>
                        <input type="text" id="complement" name="complemento"  value="<?php echo $complemento; ?>" style='text-transform:uppercase' class="form-control street" required/>

                    </div>

                    <div class="col-md-3"> 

                            <label for="bairro">Bairro*</label><br>
                            <input type="text" id="province" name="bairro" value="<?php echo $bairro; ?>" style='text-transform:uppercase' class="form-control" required />

                        </div>                    
                    
                </div>

                <br>

                <div id="divAddress" class="row" style='margin-left: 1em;'>

                
                        
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
                   
                    <hr>                    
                   

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

                <div class="row" style='margin-left: 1em;'>
                        <div class="col-md-8">
                            <button class="btn btn-success" type="submit">Enviar</button>&nbsp;&nbsp;&nbsp;&nbsp;
                            <a target="_blank" href="pdf_dadospessoais.php?cpf_func=<?php echo $cpf_func; ?> "><button class="btn btn-primary" type="button" >Imprimir</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="lista_func.php?cpf_func=<?php echo $cpf_func; ?>"><button class="btn btn-danger" type="button">Voltar</button></a>
                            
                            <!-- <a target="_blank" href="mypdf.pdf#11">Link to page 11 of the pdf</a>    -->
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
    <!-- Valida CPF -->
    <script src="js/validacpf.js"></script>
    <!-- Valida CEP -->
    <script src="js/cep.js"></script>
    <!-- adicionar dependentes -->
    <script src="js/javascript.js"></script>
    <!-- gerador de pdf --> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js" 
    integrity="sha384-THVO/sM0mFD9h7dfSndI6TS0PgAGavwKvB5hAxRRvc0o9cPLohB0wb/PTA7LdUHs" 
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="js/pdf.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            bsCustomFileInput.init();
        });
    </script>
</body>

</html>

