    <?php  

    $dbc=  mysqli_connect('localhost', 'root', '', 'base_portal');
  
    $nome=  trim($_POST['nome']);
    $sobrenome= trim($_POST['sobrenome']);
    $email= trim($_POST['email']);
    $senha= trim($_POST['senha']);
    
    $nova_senha=  md5($senha);
    
     $query="INSERT INTO usuario(nome, senha, data_cadastro, id_tipo,email) VALUES('$nome', '$nova_senha', now(), '2', '$email')";
     $sql=mysqli_query($dbc, $query)or die(mysqli_error($dbc));
    
     if(!$sql){
         echo "Ocorreu algum erro ao criar sua conta, por favor entre em contato com o Webmaster.";
     }else{
         echo '<meta http-equiv="Refresh" CONTENT="0; URL=area_user.php">';
     }
    ?>
 