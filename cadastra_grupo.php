<?php
include "config.php";
$descricao=$_POST['descricao'];
$equacao=$_POST['visor'];

$query="INSERT INTO grupo_indicadores(descricao) VALUES('$descricao')";
mysqli_query($dbc, $query);
$id=  mysqli_insert_id($dbc);
//echo "$id";

function multiexplode ($delimiters,$string) {
    
    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;
}

$exploded = multiexplode(array(";"),$equacao);

if(isset($exploded)){
    
    for($i=0; $i<count($exploded); $i++){
        $query="SELECT nome FROM indicador";
        $result=mysqli_query($dbc, $query);
            while($row = mysqli_fetch_array($result)){
                if($row['nome']==$exploded[$i]){
                    //echo $row['nome']."<br />";
                    $query="SELECT id_ind FROM indicador WHERE nome='$exploded[$i]'";
                    $result=mysqli_query($dbc, $query);
                    $row = mysqli_fetch_array($result);
                    $id_i=$row['id_ind'];
                    $query="INSERT INTO relacao_gru_ind(id_grupo, id_ind) VALUES('$id', '$id_i')";
                    mysqli_query($dbc, $query);
                }
            }
    }
    echo "Grupo cadastrado com sucesso!";
    echo '<meta http-equiv="Refresh" CONTENT="0; URL=area_adm.php">';
}else{
    echo "Você não escolheu nenhum indicador!<br>";
    header("Location:formulario_cadastra_grupo.php"); exit;
}

/*
if(isset($exploded)){

    foreach($exploded as $value)
    {
        $query="SELECT nome FROM indicador";
        $result=mysqli_query($dbc, $query);
        while($row = mysqli_fetch_array($result)){
            if($row['nome']==$value){
                echo $row['nome'];
                $query="SELECT id_ind FROM indicador WHERE nome='$value'";
                $result=mysqli_query($dbc, $query);
                $row = mysqli_fetch_array($result);
                $id_i=$row['id_ind'];
                $query="INSERT INTO relacao_gru_ind(id_grupo, id_ind) VALUES('$id', '$id_i')";
                mysqli_query($dbc, $query);
            }
            
        }
        
     }
     echo "Grupo cadastrado com sucesso!";
     echo '<meta http-equiv="Refresh" CONTENT="0; URL=area_adm.php">';
}else
{
    echo "Você não escolheu nenhum indicador!<br>";
    header("Location:formulario_cadastra_grupo.php"); exit;
}*/
?>