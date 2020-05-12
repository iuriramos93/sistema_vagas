<?php

require DB;

function cadastrar_curriculo($novo_nome,$id_user){
    $db=conexao();
    $sql="INSERT INTO tb_curriculo(id,id_user,curriculo)VALUES(null,{$id_user},:curriculo)";


    try{
        $stmt=$db->prepare($sql);
        $stmt->bindParam(':curriculo',$novo_nome,PDO::PARAM_STR);
        $stmt->execute();
        return true;
    }catch(\PDOException $e){
        die($e->getMessage());
        return false;
    }

}
function listar_curriculos(){
    $db = conexao();
    $sql = "SELECT tb_user.nome as nome_candidato,tb_user.email as email_candidato,tb_user.area,curriculo 
    FROM tb_curriculo 
    INNER JOIN tb_user ON tb_curriculo.id_user = tb_user.id";

    try{
        $stmt= $db->prepare($sql);
        $stmt ->execute();
        $stmt->fetchAll(PDO::FETCH_ASSOC);
        return true;

    }catch(\PDOException $e){
die($e->getMessage());
return false;
    }
}
function candidatos_area($area){
    $db = conexao();
    $sql = "SELECT tb_user.nome as nome_candidato,tb_user.email as email_candidato,tb_user.area,curriculo 
    FROM tb_curriculo 
    INNER JOIN tb_user ON tb_curriculo.id_user = tb_user.id
    WHERE tb_user.area=$area";

    try{
        $stmt= $db->prepare($sql);
        $stmt ->execute();
       return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }catch(\PDOException $e){
die($e->getMessage());
return false;
    }
}

function procurar_curriculo($id_user){
$db = conexao();

$sql="SELECT tb_curriculo.* FROM tb_curriculo INNER JOIN tb_user ON tb_user.id = tb_curriculo.id_user WHERE id_user = :id_user";
try{
$stmt = $db->prepare($sql);
$stmt->bindParam(":id_user",$id_user,PDO::PARAM_INT);
$stmt->execute();
return $stmt-> fetch(PDO::FETCH_ASSOC);
    }
catch(\PDOException $e){
die($e->getMessage());
return false;
    }
}

function deletar_curriculo($id_user){
$db = conexao();
$sql="DELETE FROM tb_curriculo WHERE id_user = :id_user";
$curriculo= procurar_curriculo($id_user);
//var_dump($curriculo);
    $file =  STORAGE."/upload/".$curriculo['curriculo'];
    unlink($file);
try{
    $stmt= $db->prepare($sql);
    $stmt->bindParam(":id_user",$id_user,PDO::PARAM_INT);
    $stmt->execute();
    return true;
} catch(\PDOException $e){
    die($e -> getMessage());
    return false;
}   
    
    
}
