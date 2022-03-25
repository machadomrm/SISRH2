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
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="painel.html" class="nav-link">Inicio</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="painel_setores.php" class="nav-link">Setores</a>
                </li>
            </ul>

            

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                </li>
            
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                </li>
            </ul>
        </nav>
      

      <!-- Menu Lateral -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!--Logo -->
            <a href="#" class="brand-link">&nbsp;&nbsp;
                <img src="img/logo_procape_sisrh.png" width="200" height="65" style="opacity: 0.8"/>
            </a>
            
            <div class="sidebar">              
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="pagina_adm.php" class="d-block"><span style='color:black;'><strong>Alexandre Oliveira</strong></span></a>
                    </div>
                </div>
                <nav class="mt-2">
                    <?php require_once "menu.php" ?>
                </nav>
            </div>
        </aside>

        <!-- CORPO -->
        <div class="content-wrapper">            
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2" style='margin-left:2px;'>
                        <div class="col-sm-12">
                            <h1><strong>Seja Bem Vindo !</strong></h1><br>
                            <p style="font-size: 24px;">
                                Esse sistema foi desenvolvido pela equipe de TI do Procape<br>
                                para atender o RH no controle de gestão de funcionários.
                            </p>
                        </div>
                        <div class="col-sm-6">

                        </div>
                    </div>
                </div>
            </section>

                                            
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                                                        
                    </div>
                    <aside class="control-sidebar control-sidebar-dark">
                        <style>
                            .sidebar-dark-primary 
                            {
                                background-color: #e2e2e2 !important;
                            }
                        </style>
                    </aside>
                </div>
            </section>
                                                            

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