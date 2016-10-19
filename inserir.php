<?php
session_start();
include "config.php";

$nome=array();
$valor=array();

$nome=$_POST["nome_comp"];
$valor=$_POST["valor_comp"];

$tam1=  count($nome);
$tam2=  count($valor);
//echo "$tam1-"."$tam2";

$i=0;

$id=$_SESSION['UsuarioID'];

while($i<$tam1){
     $query="SELECT nome, id_comp FROM componente_sistema";
     $result=  mysqli_query($dbc, $query);

    while($row = mysqli_fetch_array($result)){
        if($row['nome']==$nome[$i]){
         $id_c=$row['id_comp'];
         echo $row['id_comp'];
         $query="INSERT INTO historico_valores(valor, id_user, id_comp, data) VALUES('$valor[$i]', '$id', '$id_c', now())";
         mysqli_query($dbc, $query);
        }
    }
    $i++;
}
echo "Componentes cadastrados com sucesso!";
echo '<meta http-equiv="Refresh" CONTENT="0; URL=area_user.php">';
?>