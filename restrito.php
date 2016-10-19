<?php
// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)) session_start();

if(isset($_SESSION['UsuarioID']) AND ($_SESSION['UsuarioNivel']==1)){
    //dentro de zero segundos, imprima a pagina area_adm
    echo "Logando...";
    echo '<meta http-equiv="Refresh" CONTENT="0; URL=area_adm.php">';
}

if(isset($_SESSION['UsuarioID']) AND ($_SESSION['UsuarioNivel']==2)){
    //dentro de zero segundos, imprima a pagina area_adm
    echo "Logando...";
    echo '<meta http-equiv="Refresh" CONTENT="0; URL=area_user.php">';
}

/*
// Verifica se não há a variável da sessão que identifica o usuário
if (!isset($_SESSION['UsuarioID']) OR ($_SESSION['UsuarioNivel'] < $nivel_necessario)) {
	// Destrói a sessão por segurança
	session_destroy();
	// Redireciona o visitante de volta pro login
	header("Location:index.php?topicos=nav/adm"); exit;
}
*/
?>


<!--
<h1>Página restrita</h1>
<p>Olá, <?php echo $_SESSION['UsuarioNome']; ?>!</p>-->