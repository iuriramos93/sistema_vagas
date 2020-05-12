<h1>Possíveis Candidatos</h1>
<div class="widget-box">
    <div class="widget-title"></div>
    <div class="widget-content nopadding">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Currículo</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <?php
                //var_dump($candidatos);
                $nome_candidato = array();
                $email_candidato = array();
                $curriculo = array();
                $i=0;
                $j=0;
                





                foreach($candidatos as $candidato){

                  $nome_candidato = $candidato['nome_candidato'];
                  $email_candidato =$candidato['email_candidato']; 
                  $curriculo = $candidato['curriculo'];
                    $i++;
                    $j++;
                
               $dir= 'storage/upload/';
               
                ?>
                    <td><?=$nome_candidato?></td>                    
                    <td><?=$email_candidato?></td>
                    <td> <a class="btn-primary" href="<?=$dir.$curriculo ?>"><img src="/assets/img/pdf_download.jpg" width="50px"></a></td>
            </tr>
            <?php
                }
            ?>
</table>