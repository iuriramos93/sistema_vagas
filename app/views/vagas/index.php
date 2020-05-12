<script type="text/javascript"> 
function confirmacao(){
   return confirm('Deseja excluir está vaga?');
}

</script>
<?php 
require Alerta;
?>
<h1>Todas as Vagas</h1>
<div class="widget-box">
    <div class="widget-title"></div>
    <div class="widget-content nopadding">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nome: </th>
                    <th>Área:</th>
                    <th>Descrição:</th>
                    <th>Remuneração:</th>
                    <th>Ações:</th>
                </tr>
            </thead>
            <tbody>
                <?php
$id = array();
$nome = array();
$descricao = array();
$remuneracao = array();
$nome_area = array();
$id_user=array();
$j=0;
$i=0;

                foreach($vagas as $vaga){
                
                
                    $id = $vaga['id'];
                    $nome = $vaga['nome'];
                    $descricao = $vaga['descricao'];
                    $remuneracao = $vaga['remuneracao'];
                    $nome_area=$vaga['nome_area'];
                    $id_user= $vaga['id_user'];
                    $i++;
                
            
                
                //var_dump($vaga);
                
                ?>
                <tr>
                    <td><?= $nome?></td>
                    <th><?=$nome_area?></th>
                    <th><?=$descricao?></th>
                    <th><?=$remuneracao?></th>
                    
                    <td >
                        <?php
                    
                        if($_SESSION['nivel'][0]== 2 && $_SESSION['id_user'][0]==$id_user){
                            echo('<a href="/admin/vagas/'.$vaga['id'].'/editar" class="btn btn-primary">
                            <i class="fa fa-edit" aria-hidden="true"></i></a>');
                           
                        }
                        
                        ?>
                      
                      
                      <a href="/admin/vagas/<?=$vaga['id'] ?>/visualizar" class="btn btn-default">
                      <i class="fa fa-eye" aria-hidden="true"></i>
                      </a>
                      <?php
                      if($_SESSION['nivel'][0]== 2 && $_SESSION['id_user'][0]==$id_user){
                      echo('<a href="/admin/vagas/'.$vaga['id'].'/deletar" class="btn btn-danger" onclick="return confirmacao()" >
                      <i class="fa fa-trash" aria-hidden="true"></i></a>');
                      }
                      ?>
                    </td>
                </tr>
                
                  
                        <?php  
                } 
                    ?>
            </tbody>
        </table>
    </div>
</div>