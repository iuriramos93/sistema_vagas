<?php
 
 $conn = new PDO("mysql:host=localhost;dbname=jobfinder","root","");

$sql= "SELECT id,nome FROM tb_area ORDER BY nome";
$stmt = $conn->prepare($sql);

$stmt->execute();

$txt="<option value=''selected>Selecione uma Área de Atuação</option>";
while($linha=$stmt->fetch(PDO::FETCH_OBJ)){
  $txt.="<option value=\"".$linha->id."\">$linha->nome</option>\n";
}

echo($txt);