<?php
function session_checker(){

	if(!isset($_SESSION['usuario_id'])){

		header ("Location:formulario_login.php");

		exit(); 
	}
}

function verifica_email($EMAIL){

    list($User, $Domain) = explode("@", $EMAIL);
    $result = @checkdnsrr($Domain, 'MX');

    return($result);

}

?>