<?php

include "config.php";
$nome=$_POST['nome'];
$descricao=$_POST['descricao'];
$equacao=$_POST['visor'];

function multiexplode ($delimiters,$string) {
    
    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;
}

$query="INSERT INTO indicador(desc_ind, equacao, nome) VALUES('$descricao', '$equacao', '$nome')";
mysqli_query($dbc, $query);
$id=  mysqli_insert_id($dbc);

$exploded = multiexplode(array("+","*",")","(", "-", "/"),$equacao);

$pos=0;
for($i=0; $i<count($exploded); ++$i){
    if($exploded[$i]==""){
        $i++;
    }
    if($i < count($exploded)){
        $pos++;
        /*echo "$pos-"."$exploded[$i]".">";*/
        $query="SELECT nome FROM componente_sistema";
        $result=mysqli_query($dbc, $query);
        while($row = mysqli_fetch_array($result)){
            if($row['nome']==$exploded[$i]){
                $query="SELECT id_comp FROM componente_sistema WHERE nome='$exploded[$i]'";
                $result=mysqli_query($dbc, $query);
                $row = mysqli_fetch_array($result);
                $id_c=$row['id_comp'];
                $query="INSERT INTO indicador_compsist(ordem, id_comp, id_ind) VALUES('$pos', '$id_c', '$id')";
                mysqli_query($dbc, $query);
            }
        }
    }
}
$query="UPDATE indicador SET n_comp='$pos' WHERE id_ind='$id'";
mysqli_query($dbc, $query);
echo "Indicador cadastrado com sucesso!";
echo '<meta http-equiv="Refresh" CONTENT="0; URL=area_adm.php">';
?>