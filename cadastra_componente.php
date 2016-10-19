<?php
include "config.php";
$nome=$_POST['nome'];
$descricao=$_POST['descricao'];
            
$query="INSERT INTO componente_sistema(desc_comp, nome) VALUES('$descricao', '$nome')";
mysqli_query($dbc, $query);
echo "Componente cadastrado com sucesso!";
echo '<meta http-equiv="Refresh" CONTENT="0; URL=area_adm.php">';
?>