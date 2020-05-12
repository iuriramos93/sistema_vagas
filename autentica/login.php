<?php
$conexao= mysqli_connect("localhost","root","","jobfinder");

if(empty($_POST['email'])||empty($_POST['senha'])){
    header('Location:/login');
}
$email= mysqli_real_escape_string($conexao,$_POST['email']);
$senha = mysqli_real_escape_string($conexao,md5($_POST['senha']));

$sql= "SELECT * FROM tb_user WHERE email='{$email}' AND pass='{$senha}' ";
$result= mysqli_query($conexao,$sql);

$row = mysqli_num_rows($result);

$stmt=mysqli_fetch_all($result);
//var_dump($stmt);

if($row==1){
    
    session_start();
    $_SESSION['id_user']=array_column($stmt,0);
    $_SESSION['nome'] = array_column($stmt,1);
    $_SESSION['nivel']= array_column($stmt,5);
    $_SESSION['area']= array_column($stmt,4);
    
    
    header('Location:/admin');
   exit;
   // echo ('<hr>');
   //var_dump($_SESSION['nome']);
}
else{
    header("Location: /login");
    exit;
}