<?php
 require_once  DB;
 
 

 define('Candidato',1);
 define('Empresa',2);


 function listarvagas(){
    $db=conexao();
  
    
    
    
    $sql = "SELECT v.id,v.id_user,v.nome,v.descricao,v.remuneracao,tb_area.nome as nome_area FROM tb_vagas v
    INNER JOIN tb_area ON tb_area.id = v.area ORDER BY tb_area.nome DESC;";

    try{
       
       
        $stmt = $db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }catch(\PDOException $e){
die($e->getMessage());
return false;
    }
     
}

//$area = intval($_SESSION['area'][0]);


function listavagaarea($area){
    $db=conexao();
    $sql ="SELECT v.id,v.nome,v.descricao,v.remuneracao,v.id_user FROM tb_vagas v WHERE v.area = $area ;";
try{
    $stmt = $db->prepare($sql);
    $stmt->execute();
return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }catch(\PDOException $e){
die($e->getMessage());
return false;
    }

}
function nova_vaga($vaga,$area,$id_user){
    //$area = $_SESSION['area'][0];
    //$id_user=intval($_SESSION['id_user'][0]);
    $db = conexao();
    $sql="INSERT INTO tb_vagas(nome,area,descricao,remuneracao,id_user)VALUES(:nome,{$area},:descricao,:remuneracao,{$id_user})";

try{
    $stmt=$db->prepare($sql);
    $stmt -> bindParam(":nome",$vaga['nome_vaga'],PDO::PARAM_STR);
    $stmt -> bindParam(":descricao",$vaga['descricao_vaga'],PDO::PARAM_STR);
    $stmt -> bindParam(":remuneracao",$vaga['salario'],PDO::PARAM_STR);
    $stmt->execute();
    return true;
}catch(\PDOException $e){
    die($e->getMessage());
    return false;
}


}
function editar_vaga($vaga,$id){
   


    $db= conexao();
    $sql = "UPDATE tb_vagas 
            SET 
            nome=:nome,
            descricao=:descricao,
            remuneracao=:remuneracao
            WHERE id=:id";

            try{
                $stmt = $db ->prepare($sql);
                $stmt->bindParam(":nome",$vaga['nome_vaga'],PDO::PARAM_STR);
                $stmt->bindParam(":descricao",$vaga['descricao_vaga'],PDO::PARAM_STR);
                $stmt->bindParam(":remuneracao",$vaga['salario'],PDO::PARAM_STR);
                $stmt->bindParam(":id",$id,PDO::PARAM_INT);
                $stmt->execute();
                return true;
            }catch(\PDOException $e){
                die($e->getMessage());
                return false;
            }
}

function deletar_vaga($id){
    $db=conexao();
    $sql="DELETE FROM tb_vagas WHERE id=:id";
    try{
        $stmt = $db->prepare($sql);
        $stmt->bindParam(":id",$id,PDO::PARAM_INT);
        $stmt->execute();
        return true;
    }catch(\PDOException $e){
       die($e->getMessage());
       return false;
    }
}

function buscar_vaga($id){
    $db=conexao();
    $sql="SELECT tb_vagas.id,tb_vagas.nome as nome_vaga,tb_vagas.descricao,tb_vagas.remuneracao,tb_user.email as email_empresa FROM tb_vagas INNER JOIN tb_user ON tb_vagas.id_user = tb_user.id WHERE tb_vagas.id =:id";

    try{
        $stmt = $db->prepare($sql);
        $stmt->bindParam(":id",$id,PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }catch(\PDOException $e){
die($e->getMessage());
return false;
    }
}


?>