<?php
 $id_user=intval($_SESSION['id_user'][0]);
 $curriculo= procurar_curriculo($id_user);
 if($curriculo == null){
   header('Location:/admin/curriculo/cadastrar');
 }
 $file =  STORAGE."/upload/".$curriculo['curriculo'];
if(file_exists($file)){
    deletar_curriculo($id_user);
//var_dump($file);
  header('Location:/admin/curriculo/cadastrar');
exit; 
}

 



?>