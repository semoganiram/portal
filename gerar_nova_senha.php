<?php
include "config.php";
$recupera = $_POST['recupera'];
$email = $_POST['email'];

switch($recupera){

	case "recupera":
		recupera_senha($email);
		break;

	default:
		include "formulario_senha_perdida.php";
		break;
}

function recupera_senha($email){

	if(!isset($email)){

        echo "Você esqueceu de preencher seu email.<br />
			<strong>Use o mesmo email que utilizou em seu cadastro.</strong><br /><br />"; 

		include "formulario_senha_perdida.php";

		exit();

	}
          $db=mysqli_connect('localhost', 'root', '', 'base_portal');
	// Checando se o email informado está cadastrado
        $query="SELECT * FROM usuario WHERE email='{$email}'";
        $sql_check=  mysqli_query($db, $query);
        $sql_check_num= mysqli_num_rows($sql_check);


	if($sql_check_num == 0){

		echo "Este email não está cadastrado em nosso banco de dados.<br /><br />";

		include "formulario_senha_perdida.php";

		exit();

	}
	
	// Se tudo OK vamos gerar uma nova senha e enviar para o email do usuário!

	function makeRandomPassword(){

		$salt = "abchefghjkmnpqrstuvwxyz0123456789";
		srand((double)microtime()*1000000);

		$i = 0;

		while ($i <= 7){

			$num = rand() % 33;
			$tmp = substr($salt, $num, 1);
			@$pass = $pass . $tmp;
			$i++;

		}

		return $pass;

	}

	$senha_randomica = makeRandomPassword();

	$senha = md5($senha_randomica);

	$sql = mysqli_query($db, "UPDATE usuarios SET senha='{$senha}' WHERE email ='{$email}'");

	$headers = "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	$headers .= "From: Gomes - Webmaster<gomes.marina93@gmail.com>"; //COLOQUE TEU EMAIL

	$subject = "Sua nova senha em teusite.com";
	$message = "Olá, redefinimos sua senha.<br /><br />

	<strong>Nova Senha</strong>: {$senha_randomica}<br /><br />

	<a href='http://localhost:8080/projeto_portal/index.php'>http://localhost:8080/projeto_portal/index.php</a><br /><br />

	Obrigado!<br /><br />

	Webmaster<br /><br /><br />


	Esta é uma mensagem automática, por favor não responda!";

	mail($email, $subject, $message, $headers);

	echo "Sua nova senha foi gerada com sucesso e enviada para o seu email!<br />Por favor verifique seu email!<br /><br />";

	include "index.php";

}

?>