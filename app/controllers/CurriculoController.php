<?php
// Recupera Sessão
session_start();

//Chama Model e Core
require BASE_CONTROLLER;
require MODELS.'/CurriculoModel.php';

// Função para cadastro de currículo
function cadastro(){
    $id_user=intval($_SESSION['id_user'][0]);
    $curriculo=[];


    //Verifica se o usuário cadastrou arquivo no campo file
if(isset($_FILES['curriculo']) && !empty($_FILES['curriculo']['name'])){

     //pegando apenas a extensão do arquivo
     $extensao = strtolower(substr($_FILES['curriculo']['name'], -4));
     
     //gerando um outro nome para evitar duplicidade de arquivo
     $novo_nome = md5(rand()) . $extensao;

     //verificando a extensão do arquivo para ver se é valida
     if(strstr('.pdf', $extensao)){ //procura uma ocorrencia na string
      
        //declarando o local da onde o arquivo será gravado no servidors
        $dir = STORAGE."/upload/";

         //enviando o arquivo para o servidor
         if(move_uploaded_file($_FILES['curriculo']['tmp_name'], $dir . $novo_nome)){     
            //declarando a variavel com um valor boolean, caso o envio foi sucesso         
            $upload = true;  

        }else{
            //criando as mensagem para o usuário
            $_SESSION['alerta']['tipo'] = 'alert-danger';
            $_SESSION['alerta']['mensagem'] = "Erro ao Efetuar o Upload do Currículo";            
            $upload = false;
        }
        //salvando o nome no banco de dados
       //$curriculo['curriculo'] =$novo_nome;
}
if(cadastrar_curriculo($novo_nome,$id_user)&& $upload){
     //caso ocorreu tudo bem, cria a mensagem de sucesso
     $_SESSION['alerta']['tipo'] = 'alert-success';
     $_SESSION['alerta']['mensagem'] = "Currículo Cadastrado com Sucesso";
     //redireciona o usuário
     header('Location:/admin/curriculo');
     //aborta a execução
     exit;
}


  

   
}

viewAdmin('curriculo/cadastro');

} 

function atualizar(){
    $id_user=intval($_SESSION['id_user'][0]);
    viewAdmin('curriculo/atualizar',[$id_user]);
}
