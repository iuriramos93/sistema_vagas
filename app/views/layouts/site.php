<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="/assets/css/bootstrap-grid.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="/assets/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap-grid.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="shortcut icon" href="/assets/img/favicon.ico"/>
    <script src="https://code.jquery.com/jquery-3.4.1.js"integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="crossorigin="anonymous"></script>
    <script rel="text/javascript" href="/assets/js/preloading.js"></script>
    <title>JobFinder</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
 <!-- <style>
    body{background: url('/assets/img/jobfinder.png');
    background-repeat: repeat !important;
    opacity: 0.5;
    }
</style> -->



</head>
<style>
    #lockscreen {
        position:fixed;
        z-index:999;
        cursor:forbidden;
        width:100%;
        height:100%;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color:rgb(0,0,0)
    }
    
   
    
    
</style>
<body>
    <div id="lockscreen">
         <img src="/assets/img/loading.gif"/>
     </div>
    
   <?php include $conteudoView ?>
   
</body>
<footer class="blog-footer text-center">
    <hr>
      <p>&copy Jobfinder <?=date('Y');?> Desenvolvido por Iuri Ramos, Lucas Seabra e Carlos Eduardo para a matéria Projeto Integrador II.Todos os direitos reservados</p>
      <p>
        <a class="btn btn-secondary" href="#">Voltar para o Topo</a>
      </p>
    </footer>
<script type="text/javascript">
    $(document).ready(function() {
        $('#lockscreen').show();
    });

    $(window).on("load", function(){
        setTimeout(() => {

            $('#lockscreen').hide();
        }, 2000);
    });
</script>
</html>




