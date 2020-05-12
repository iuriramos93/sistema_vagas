<h1>Visualizar Vaga</h1>
<div class="container-fluid">
    
    <hr>
<div class="row-fluid"></div>
<div class="widget-box">
    <div class="widget-title"><h5></h5></div>
    <div class="widget-content nopadding">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
            <th>Nome:</th>
            <th>Descrição:</th>
            <th>Remuneração:</th>
            <th>Contato:</th>
            </tr>
        </thead>
        <tbody>
            <td style="text-align: center;"><?=$vaga['nome_vaga']?></td>
            <td style="text-align: center;"><?=$vaga['descricao']?></td>
            <td style="text-align: center;"><?=$vaga['remuneracao']?></td>
            <td style="text-align: center;"><?=$vaga['email_empresa']?></td>
        </tbody>
    </table>
</div>
</div>