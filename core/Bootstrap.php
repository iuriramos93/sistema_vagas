<?php 
function carregarRota($routes){

    foreach($routes as $rota => $controller){
        $url = strtok($_SERVER['REQUEST_URI'],'?');
        $rota = str_replace("/","\/",$rota);
        if (preg_match('/^'.$rota.'$/i', $url , $parametro)) {
            unset($parametro[0]);
            $requisicao = explode("@", $controller); 
            $controller = $requisicao[0];
            $acao = $requisicao[1];
            require CONTROLLERS."/".$controller.".php";
            call_user_func_array($acao,$parametro);
            return;
        }
    }
    require CONTROLLERS."/ErroController.php";
    erro();           

}




        
        
        







