<?php
// Inicia Sessão
session_start();

// Requisita Base_Controller
require BASE_CONTROLLER;

// Requisita o Model
require MODELS.'/VagasModel.php';


function index(){

    $vagas =listarvagas();

    viewAdmin('vagas/index',['vagas'=>$vagas]);
}
function cadastro(){
    $area = $_SESSION['area'][0];
    $id_user=intval($_SESSION['id_user'][0]);
    $vaga=[];
    if(!empty($_POST)){
        $vaga['nome_vaga']=$_POST['nome_vaga'];
        $vaga['salario']=$_POST['salario'];
        $vaga['descricao_vaga']=$_POST['descricao_vaga'];

        if(nova_vaga($vaga,$area,$id_user)){
            header('Location:/admin');
            exit;
        }
    }


    viewAdmin('vagas/cadastro',['vaga'=>$vaga]);
}
function visualizar($id){
    $vaga = buscar_vaga($id);
viewAdmin('vagas/visualizar',['vaga'=>$vaga]);
}

function editar($id){

    $vaga = buscar_vaga($id);

    if(!empty($_POST)){
        $vaga['nome_vaga']=$_POST['nome_vaga'];
        $vaga['salario']=$_POST['salario'];
        $vaga['descricao_vaga']=$_POST['descricao_vaga'];

        if(editar_vaga($vaga,$id)){
            $_SESSION['alerta']['tipo'] = 'alert-success';
            $_SESSION['alerta']['mensagem'] = "Vaga Alterada com Sucesso";
           
            header('Location: /admin/vagas');
            exit;
        }
    }
viewAdmin('vagas/editar', ['vaga'=>$vaga]);
}
function deletar($id){
if(deletar_vaga($id)){
   
    header('Location:/admin/vagas');
    exit;
      
   
}

}