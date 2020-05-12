<?php
$email= $_POST['email'];
$nome= $_POST['nome'];
$senha= $_POST['senha'];
$confirma_senha= $_POST['confirma_senha'];
$area= $_POST['sel_area'];
$nivel= $_POST['sel_tipo'];

if($senha==$confirma_senha){
    $senha_crypt= md5($senha);
}




$conn= new PDO("mysql:host=localhost;dbname=jobfinder","root","");
$sql="INSERT INTO tb_user (nome,email,pass,area,nivel) VALUES(?,?,?,?,?)";

try{
   $stmt=$conn->prepare($sql);
   $stmt->execute([$nome,$email,$senha_crypt,$area,$nivel]);

}catch (PDOException $e) {
    die($e->getMessage());
}
header('Location:/login');