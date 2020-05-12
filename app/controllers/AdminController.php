<?php 
// Inicia Sessão ou Restaura última sessão
session_start();




require BASE_CONTROLLER;
//require MODELS.'/VagasModel.php';
//require MODELS.'/CurriculoModel.php';

function index(){   
    if(!isset($_SESSION['nome'])){
        header('Location:/login');
    }
    $nivel = $_SESSION['nivel'][0];
    $area = $_SESSION['area'][0];
   switch($nivel){
       case 1: require MODELS.'/VagasModel.php';
       $vagas_area = listavagaarea($area);
       
           viewAdmin('admin/index',['vagas_area'=>$vagas_area]);


        case 2:require MODELS.'/CurriculoModel.php';  
            $candidatos = candidatos_area($area);
            viewAdmin('admin/index2',['candidatos'=>$candidatos]);   
   }


    /*$area = $_SESSION['area'][0];
$vagas_area = listavagaarea($area);

    viewAdmin('admin/index',['vagas_area'=>$vagas_area]);*/

}
function login(){
    
    viewLogin('login');    
}
function registro(){
    viewRegistro('registro');
}
function logout(){
    if(isset($_SESSION)){
        session_unset();
        header('Location:/');
        exit;
    }
}
?>
