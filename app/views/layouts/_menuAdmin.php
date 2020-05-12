
<ul style="display:block;">
<li>
  <?php
if($_SESSION['nivel'][0]==1){
echo('<a href="/admin"><i class="fa fa-home" aria-hidden="true"></i>Vagas de Interesse</a>');
}elseif($_SESSION['nivel'][0]==2){
 echo('<a href="/admin"><i class="fa fa-home" aria-hidden="true"></i>Possíveis Candidatos</a>'); 
}
  
  
  ?>

</li>
<li class="submenu">
    <a href="#"><i class="fa icon-briefcase"></i>Vagas</a>
   <ul> 
     <li class="submenu-open"><a href="/admin/vagas"><span>Todas as Vagas</span></a></li>
     <?php
     if($_SESSION['nivel'][0]==2){
      echo('<li class="submenu-open"><a href="/admin/vagas/cadastro"><span>Cadastrar Vaga</span></a></li>');
     }
     
     ?>
     
</ul>
</li>

<?php
  if($_SESSION['nivel'][0]==1){
  echo('<li class="submenu">
  <a href="#"><i class="icon icon-book"></i>Currículos</a>
  <ul>
  <li class="submenu-open"><a href="/admin/curriculo/cadastrar"><span>Cadastrar Currículo</span></a></li>
  <li class="submenu-open"><a href="/admin/curriculo/atualizar"><span>Atualizar Currículo</span></a></li>
  </ul>
</li>');
  }
?>
</ul>
