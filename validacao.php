<?php
    include "config.php";
    // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
    if(!empty($_POST) AND (empty($_POST['login']) OR empty($_POST['senha']))){
        header("Location:index.php"); exit;
    }
    
    $login= ($_POST['login']);
    $senha= ($_POST['senha']);
    
    // Validação do usuário/senha digitados
    $sql="SELECT id_user, nome, id_tipo FROM usuario WHERE (login='".$login."') AND (senha='".md5($senha)."') AND (ativo='1') LIMIT 1";
    $query= mysqli_query($dbc, $sql);
    
    if(mysqli_num_rows($query)!= 1){
        // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
	echo "Usuário ou senha incorretos!"; exit;
    }else{
        // Salva os dados encontados na variável $resultado
	$resultado = mysqli_fetch_assoc($query);
        
        // Se a sessão não existir, inicia uma
	if (!isset($_SESSION)) session_start();

	// Salva os dados encontrados na sessão
	$_SESSION['UsuarioID'] = $resultado['id_user'];
	$_SESSION['UsuarioNome'] = $resultado['nome'];
	$_SESSION['UsuarioNivel'] = $resultado['id_tipo'];

	// Redireciona o visitante
	header("Location:restrito.php"); exit;
    }
    
    
?>

