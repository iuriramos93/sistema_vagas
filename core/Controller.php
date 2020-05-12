<?php 
function viewSite($view, $variaveis = []){
    extract($variaveis);
    $conteudoView = VIEWS."/".$view.".php";
    require LAYOUTS."/site.php";
}

function viewAdmin($view, $variaveis = []){
    extract($variaveis);
    $conteudoView = VIEWS."/".$view.".php";
    require LAYOUTS."/admin.php";
}

function viewLogin($view, $variaveis = []){
    extract($variaveis);
    $conteudoView = VIEWS."/".$view.".php";
    require LAYOUTS."/login.php";
}
function viewRegistro($view, $variaveis = []){
    extract($variaveis);
    $conteudoView = VIEWS."/".$view.".php";
    require LAYOUTS."/registro.php";
}
?>