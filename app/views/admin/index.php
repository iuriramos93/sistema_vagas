

<script type="text/javascript"> 
function confirmacao(){
   return confirm('Deseja excluir está vaga?');
}

</script>
   <h1>Vagas de Interesse</h1>
<div class="widget-box">
    <div class="widget-title"></div>
    <div class="widget-content nopadding">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nome:</th>                    
                    <th>Descrição:</th>
                    <th>Remuneração:</th>
                    <th>Ação:</th>
                </tr>
            </thead>
            <tbody>
            
            <?php
$nome = array();
$descricao = array();
$remuneracao = array();
$i = 0;
$j=0;
    //echo strtoupper($_SESSION['nome'][0]);
//var_dump($vagas_area);
     foreach($vagas_area as $vaga_area){
         $nome = $vaga_area['nome'];
         $descricao = $vaga_area['descricao'];
         $remuneracao=$vaga_area['remuneracao'];
         $id=$vaga_area['id'];
         $i++;

     

     
                //var_dump($vagas_area);
    ?>

                <tr>
                    <td><?= $nome?></td>                    
                    <th><?= $descricao?></th>
                    <th><?= $remuneracao?></th>
                    <td >
                        <?php
                    
                        if($_SESSION['nivel'][0]== 2 && $_SESSION['id_user'][0] == $vaga_area['id_user']){
                            echo('<a href="/admin/vagas/'.$vaga_area['id'].'/editar" class="btn btn-primary">
                            <i class="fa fa-edit" aria-hidden="true"></i></a>');
                            
                        }
                        ?>
                      
                      
                      <a href="/admin/vagas/<?=$vaga_area['id'] ?>/visualizar" class="btn btn-default">
                      <i class="fa fa-eye" aria-hidden="true"></i>
                      </a>
                      
                      <?php
                      
                      if($_SESSION['nivel'][0]== 2 && $_SESSION['id_user'][0]==$vaga_area['id_user']){                      
                      echo('<a href="/admin/vagas/'.$vaga_area['id'].'/deletar" class="btn btn-danger" onclick="return confirmacao()" >
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

