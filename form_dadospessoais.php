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
                background-color: #e2e2e2 !important;              
            }
        </style>
        <!-- Brand Logo -->
        <a href="index.html" class="brand-link">&nbsp;&nbsp;
            <img
            src="img/logo_procape_sisrh.png" width="200" height="65"
              alt="Procape Logo"
              
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
                                    <a href="#" class="d-block" style="color: MediumBlue">Alexandre Oliveira</a>
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
            <form id="formPersonalData" action="salvar_form_dadospessoais.php" method="post">  
                <section class="content">
                    <div class="container-fluid">

                    </div>
                
                    <div class="row" style='margin-left: 1em;'>

                        <div class="col-md-5">

                            <label for="nome">Nome Completo*</label><br>
                            <input type="text" name="nome_func" class="form-control" required />

                        </div>

                        <div class="col-md-2">

                            <label for="data">Data Nasc*</label>
                            <input type="date" name="data_nasc" class="form-control" required >

                        </div>

                        <div class="col-md-1">

                            <label for="sex">Sexo*</label>
                            <select name="sexo" class="form-control" required>
                                <option value=""></option>
                                <option value="masc">MASC</option>
                                <option value="fem">FEM</option>
                            </select>

                        </div>

                        <div class="col-md-3">

                            <label for="escol">Escolaridade </label><br>
                            <select name="escolaridade" class="form-control">
                                <option value="">Selecione</option>
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
                            <input type="text" name="cpf_func" id="cpf" maxlength="11" placeholder="Digite nº CPF" class="form-control" onblur="valida()" required />
                            
                        </div>

                        <div class="col-md-2">

                            <label for="rg">RG*</label>
                            <input type="number" name="rg_func" id="rg" placeholder="Digite nº RG" class="form-control" required/>

                        </div>

                        <div class="col-md-2">

                            <label for="data">Órgão Emissor*</label>
                            <input type="text" name="orgao_emissor" style='text-transform:uppercase' class="form-control" required/>

                        </div>            
                            
                        <div class="col-md-2">

                            <label for="data">Data Exp*</label>
                            <input type="date" name="data_exp" class="form-control" required />

                        </div>

                        <div class="col-md-3">

                            <label for="naturalidade">Nacionalidade</label>
                            <input type="text" name="nacionalidade" placeholder="Nacionalidade" class="form-control" />

                        </div>
                    </div>    

                        <br>
                        
                    <div class="row" style='margin-left: 1em;'>

                        <div class="col-md-4">

                            <label for="nomemae">Nome Mãe*</label>
                            <input type="text" id="nomemae" name="nome_mae" class="form-control" required />

                        </div>

                        <div class="col-md-4">

                            <label for="nomepai">Nome Pai</label>
                            <input type="text" id="nomepai" name="nome_pai" class="form-control"  />

                        </div>

                        <div class="col-md-3">

                            <label for="nomeconjuge">Nome Conjuge</label>
                            <input type="text" id="nomeconjuge" name="nome_conjuge" class="form-control" />

                        </div>

                        
                    </div>
                    <br>
                          
                    <div class="row" style='margin-left: 1em;'>
                        

                        <div class="col-md-1">

                            <label for="nomefilho">Filho(a)s </label><br>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Adicionar
                            </button>

                        </div> 

                        <div class="col-md-2" style="margin-left: 15px;">

                            <label for="dependentes">Dependentes </label><br>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#example_Modal">
                                Adicionar
                            </button>                                                       

                        </div>
                       
                 </div> 
                         
                 <br>
                        
                    <div class="row" style='margin-left: 1em;'>

                        <div class="col-md-2">

                            <label for="sus">Cartão SUS</label>                            
                            <input type="text" name="sus" placeholder="Nº do SUS" class="form-control" onkeypress="$(this).mask('000 0000 0000 0000')">

                        </div>                       
                                      
                        <div class="col-md-2">

                            <label for="tipo_sanguineo">Tipo Sanguineo </label><br>
                            <select name="tipo_sang" class="form-control">
                                <option value="">Selecione</option>
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
                            <input type="number" name="pront" placeholder="só números" class="form-control" />

                        </div>

                        <div class="col-md-2">
                            <label for="estado_civil">Estado Civil</label>
                            <select name="estado_civil" class="form-control" required>
                                <option value="">Selecione</option>
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
                            <input type="email" name= 'email_func' class="form-control" required />
                            
                        </div>
                        
                </div>
                    <br>

                <div class="row" style='margin-left: 1em;'>

                    <div class="col-md-3">

                    <label for="exampleInputEmail1">E-mail Pessoal Alternativo*</label><br>
                    <input type="email" placeholder="Opcional" name='email_func2' class="form-control" />

                    </div>

                    <div class="col-md-2"> 

                    <label for="cel" id = "telefone">Nº Celular <i class="fab fa-whatsapp"></i></label>                    
                    <input type="text" class="form-control" name="cel" onkeypress="$(this).mask('(00) 0 0000-0000')" required>

                    </div>

                    <div class="col-md-2"> 

                    <label for="cel" id = "telefone">Celular Alternativo</label>                    
                    <input type="text" class="form-control" name="cel2" onkeypress="$(this).mask('(00) 0 0000-0000')">

                    </div>

                    <div class="col-md-4">

                        <label for="nome_social">Nome Social</label><br>
                        <input type="text" name="nome_social" class="form-control" />

                    </div>                                                       
                                            
                </div>
                    <br>
                    
                <div id="divAddress" class="row" style='margin-left: 1em;'> 
                                            
                    <div class="col-md-2">

                        <label for="cep">CEP*</label><br> 
                        <input type="text" id="postalCode" name="cep" class="form-control" maxlength="8" onfocus="turnUpperCase(this)" required />

                    </div> 
                    
                    <div class="col-md-4">

                        <label for="logradouro">Rua/Avenida*</label><br>
                        <input type="text" id="street" name="logradouro"  style='text-transform:uppercase' class="form-control street" required/>

                    </div>

                    <div class="col-md-2">

                        <label for="complemento">Complemento</label><br>
                        <input type="text" id="complement" name="complemento"  style='text-transform:uppercase' class="form-control street" required/>

                    </div>

                    <div class="col-md-3"> 

                        <label for="bairro">Bairro*</label><br>
                        <input type="text" id="province" name="bairro" style='text-transform:uppercase' class="form-control" required />

                    </div> 
                    
                </div>
                    
                    <br>

                    <div id="divAddress" class="row" style='margin-left: 1em;'>

                        <div class="col-md-3">

                            <label>Cidade*</label><br>
                                <select name="citys" id="city" class="form-control">
                                </select>
                            </label>
                            
                        </div>

                        <div class="col-md-1">

                            <label for="estado">Estado*</label><br>
                            <select name="estado" id="state" class="form-control">
                            </select>
                            
                        </div>
                        
                    </div>                  
                   
                    <hr>                    
                </section>

                    <!-- MODAL - Cadastro de Filhos--> 
            
                    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Cadastro de Filhos</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body" id="content-children">
                                    <section class="content">
                                        <div class="container-fluid">
                                            <div class="row">
                                                
                                                <div class="col-md-5">
                                                    <label for="son">Nome Filho</label><br>
                                                    <input type="text" name="nome_filho[]" class="form-control">
                                                </div>  
                                                
                                                <div class="col-md-3">  
                                                    <label for="nomefilho">Data Nasc</label><br>
                                                    <input type="date" name="nasc_filho[]" class="form-control" id="escolaridade">
                                                </div>
                                                
                                                <div class="col-md-4">
                                                    <label for="escolaridade">Escolaridade </label>
                                                    <select name="escolaridade[]" class="form-control">
                                                        <option value="">Selecione</option>
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
                                        </div>
                                    </section>
                                </div>     
                                
                                <div class="modal-body" id="content-children">
                                    <section class="content">
                                        <div class="container-fluid">
                                            <div class="row">                                                
                                                    <div class="col-md-2">
                                                    <label for="escol">Dependente: </label>
                                                        <select name="fir" class="form-control">
                                                            <option value="">Selecione</option>
                                                            <option value="sim">SIM</option>
                                                            <option value="nao">NÃO</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-2">
                                                    <label for="escol">Fins para I.R.: </label>
                                                        <select name="fir" class="form-control">
                                                            <option value="">Selecione</option>
                                                            <option value="sim">SIM</option>
                                                            <option value="nao">NÃO</option>
                                                        </select>
                                                    </div>
                                            </div>
                                        </div>                                        
                                    </section>
                                </div>         

                                <div class="row" style='margin-left: 1em;'>
                                    <div class="col-md-8">
                                        <button type="button" class="btn btn-success" data-dismiss="modal">Salvar</button>&nbsp;&nbsp;
                                        <button type="button" class="btn btn-warning">Limpar</button>&nbsp;&nbsp;
                                        <button type="button" class="btn btn-info" id="add">+</button>
                                    </div>
                                </div><br>
                            </div>
                        </div>
                    </div>

                    <!-- MODAL - Cadastro de Dependentes -->

                    <div class="modal fade bd-example-modal-lg" id="example_Modal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="example_ModalLabel">Cadastro de Dependentes</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body" id="content-dependent">
                                <section class="content">
                                    <div class="container-fluid">
                                        <div class="row">
                                      
                                            <div class="col-md-3">
                                                <label for="tipo">Relação de Dependente </label><br>
                                                <select name="tipo" id="tipo" class="form-control" required onchange="changeSelect();">
                                                    <option value="">Selecione</option>                                                    
                                                    <option value="mae">Mãe</option>
                                                    <option value="pai">Pai</option>
                                                    <option value="conjuge">Conjuge</option>
                                                    <option value="enteado">Enteado(a)</option> 
                                                    <option value="sobrinho">Sobrinho(a)</option>                                                                               
                                                </select>
                                            </div>
                                        
                                            <div class="col-md-6">
                                                <label for="depend">Nome</label><br>
                                                <input type="text" id="depend" name="depend" class="form-control" style="uppercase" required />                                                                                           
                                            </div>    

                                            <div class="col-md-3">
                                                <label for="dependente">Data Nasc</label><br>
                                                <input type="date" name="dependente[]" class="form-control">
                                            </div>
                                        </div> 
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="estado_civil">Estado Civil</label>
                                                <select name="estado_civil" class="form-control" required>
                                                    <option value="">Selecione</option>
                                                    <option value="solteiro">Solteiro(a)</option>
                                                    <option value="casado">Casado(a)</option>
                                                    <option value="separado">Separado(a)</option>
                                                    <option value="divorciado">Divorciado(a)</option>
                                                    <option value="viuvo">Viuvo(a)</option>
                                                    <option value="outros">Outros</option>
                                                </select>
                                            </div>

                                            <div class="col-md-5">
                                                <label for="escol">Escolaridade </label><br>
                                                <select name="escolaridade" class="form-control">
                                                    <option value="">Selecione</option>
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

                                            <div class="col-md-3">
                                            <label for="escol">Fins para I.R: </label><br>
                                                <select name="fir" class="form-control">
                                                    <option value="">Selecione</option>
                                                    <option value="sim">SIM</option>
                                                    <option value="nao">NÃO</option>
                                                </select>
                                            </div>
                                        </div>

                                       
                                    </div>
                                    <br>
                                    <div class="row" style='margin-left: 2px;'>
                                        <div class="col-md-8">
                                            <button type="button" class="btn btn-success" data-dismiss="modal">Salvar</button>&nbsp;&nbsp;
                                            <button type="button" class="btn btn-warning">Limpar</button>&nbsp;&nbsp;
                                            <button type="button" class="btn btn-info" id="addDependente">+</button>
                                        </div>
                                    </div>
                                </section>
                                </div>
                            </div>
                        </div>
                    </div>              
                
                    <div class="row" style='margin-left: 1em;'>
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
    <!-- Valida CPF -->
    <script src="js/validacpf.js"></script>
    <!-- Valida CEP -->
    <script src="js/cep.js"></script>
    <!-- adicionar filhos -->
    <script src="js/javascript.js"></script>
    <!-- adicionar dependentes -->
    <script src="js/dependente.js"></script>    

    <script type="text/javascript">
        $(document).ready(function() {
            bsCustomFileInput.init();
        });
    </script>
</body>

</html>