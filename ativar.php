<?php

//include "config.php";
$dbc=  mysqli_connect('localhost', 'root', '', 'base_portal');
$usuario_id = $_REQUEST['id'];
$senha = $_REQUEST['code'];


$query="UPDATE usuario SET ativo='1' WHERE id_user='$usuario_id' AND senha='$senha'";
$sql = mysqli_query($dbc, $query);
$sql_doublecheck = mysqli_query($dbc, "SELECT * FROM usuario WHERE id_user='{$usuario_id}' AND senha='{$senha}' AND ativo='1'");
$doublecheck = mysqli_num_rows($sql_doublecheck);


if($doublecheck == 0){

	echo "<strong>Sua conta não pode ser ativada!</strong>";

}
elseif($doublecheck > 0){

	echo "<strong>Seu cadastro foi ativado com sucesso!</strong><br />Você pode fazer o login logo abaixo!<br /><br />";
	include "index.php";

}

?>