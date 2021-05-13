<?php
 require DB;

//  $conn = new PDO("mysql:host=localhost;dbname=jobfinder","root","");
$conn = conexao();

$sql= "SELECT id,nome FROM tb_area ORDER BY nome";
$stmt = $conn->prepare($sql);

$stmt->execute();

$txt="<option value=''selected>Selecione uma Área de Atuação</option>";
while($linha=$stmt->fetch(PDO::FETCH_OBJ)){
  $txt.="<option value=\"".$linha->id."\">$linha->nome</option>\n";
}

echo($txt);