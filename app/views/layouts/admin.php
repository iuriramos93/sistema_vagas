<?php
if(!isset($_SESSION['nome'])){
    header('Location:/login');
  
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>JobFinder - Área Administrativa</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="/assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="/assets/css/matrix-style.css" />
    <link rel="stylesheet" href="/assets/css/matrix-media.css" />
    <link href="/assets/css/font-awesome.css" rel="stylesheet" />
    <link href="/assets/css/uniform.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/assets/css/jquery.gritter.css" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="shortcut icon" href="/assets/img/favicon.ico"/>
</head>

<body>

    <!--Header-part-->
    <div id="header">
        <h1><a href="/admin">JobFinder</a></h1>
    </div>
    <!--close-Header-part-->


    <!--top-Header-menu-->
    <div id="user-nav" class="navbar navbar-inverse">
        <ul class="nav">
            <li class="dropdown" id="profile-messages"><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i> <span class="text">Bem Vindo <?=ucfirst($_SESSION['nome'][0])?> </span><b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="icon-user"></i> Meu Perfil</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="icon-check"></i>TESTE</a></li>
                    <li class="divider"></li>
                    <li><a href="/logout"><i class="icon-key"></i> Log Out</a></li>
                </ul>
            </li>
            <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Notificações</span></a>
                
            </li>
            <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
            <li class=""><a title="" href="/logout"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
        </ul>
    </div>
    <!--close-top-Header-menu-->
    <!--start-top-serch-->
    <div id="search">
        <input type="text" placeholder="Search here..." />
        <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
    </div>
    <!--close-top-serch-->
    <!--sidebar-menu-->
    <div id="sidebar">
        <?= include_once '_menuAdmin.php'; ?>
    </div>

    <!--main-container-part-->
    <div id="content">
        <!--breadcrumbs-->
        <div id="content-header">
            <div id="breadcrumb"> <a href="/admin" title="Admin" class="tip-bottom"><i class="icon-home"></i>Inicio</a></div>
        </div>
        <!--End-breadcrumbs-->

        <!--Action boxes-->
        <div class="container-fluid">
<?php include $conteudoView ?>

        </div>
    </div>


    <!--end-main-container-part-->

<script src="/assets/js/jquery.min.js"></script> 
<script src="/assets/js/jquery.ui.custom.js"></script> 
<script src="/assets/js/bootstrap.min.js"></script> 
<script src="/assets/js/bootstrap-colorpicker.js"></script> 
<script src="/assets/js/bootstrap-datepicker.js"></script> 
<script src="/assets/js/jquery.toggle.buttons.js"></script> 
<script src="/assets/js/masked.js"></script> 
<script src="/assets/js/jquery.uniform.js"></script> 
<script src="/assets/js/select2.min.js"></script> 
<script src="/assets/js/matrix.js"></script> 
<script src="/assets/js/matrix.form_common.js"></script> 
<script src="/assets/js/wysihtml5-0.3.0.js"></script> 
<script src="/assets/js/jquery.peity.min.js"></script> 
<script src="/assets/js/bootstrap-wysihtml5.js"></script> 
    
    <!-- <script src="/assets/js/jquery.min.js" ></script>
    <script src="/assets/js/jquery.ui.custom.js" ></script>
    <script src="/assets/js/bootstrap.min.js" ></script>
    <script src="/assets/js/excanvas.min.js" ></script>
    <script src="/assets/js/jquery.flot.min.js" ></script>
    <script src="/assets/js/jquery.flot.resize.min.js" ></script>
    <script src="/assets/js/jquery.peity.min.js" ></script>
    <script src="/assets/js/fullcalendar.min.js" ></script>
    <script src="/assets/js/matrix.js" ></script>
    <script src="/assets/js/matrix.dashboard.js" ></script>
    <script src="/assets/js/jquery.gritter.min.js" ></script>
    <script src="/assets/js/matrix.interface.js" ></script>
    <script src="/assets/js/matrix.chat.js" ></script>
    <script src="/assets/js/jquery.validate.js" ></script>
    <script src="/assets/js/matrix.form_validation.js" ></script>
    <script src="/assets/js/jquery.wizard.js" ></script>
    <script src="/assets/js/jquery.uniform.js" ></script>
    <script src="/assets/js/select2.min.js" ></script>
    <script src="/assets/js/matrix.popover.js" ></script>
    <script src="/assets/js/jquery.dataTables.min.js" ></script>
    <script src="/assets/js/matrix.tables.js" ></script>
    <script src="/assets/js/matrix.form_common.js"></script> -->

    <script type="text/javascript">
        // This function is called from the pop-up menus to transfer to
        // a different page. Ignore if the value returned is a null string:
        function goPage(newURL) {

            // if url is empty, skip the menu dividers and reset the menu selection to default
            if (newURL != "") {

                // if url is "-", it is this page -- reset the menu:
                if (newURL == "-") {
                    resetMenu();
                }
                // else, send page to designated URL            
                else {
                    document.location.href = newURL;
                }
            }
        }

        // resets the menu selection upon entry to this page:
        function resetMenu() {
            document.gomenu.selector.selectedIndex = 2;
        }
    </script>
</body>
<footer class="blog-footer text-center">
    
      <p>&copy Jobfinder <?=date('Y');?> Desenvolvido por Iuri Ramos, Lucas Seabra e Carlos Eduardo para a matéria Projeto Integrador II.Todos os direitos reservados</p>
      <p>
        <a class="btn btn-secondary" href="#">Voltar para o Topo</a>
      </p>
    </footer>
</html>