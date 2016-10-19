<?php
    session_start();
    if($_SESSION["autoriza"]=TRUE){
?>
<?php include "cabecalho.php";?>

<div id="esq"></div>

<div id="user"
     <h1>MÓDULO USUARIO <img src="img/user.png" style="width: 90px"/></h1>
    

    <form action="formulario_inserir_componentes.php" method="post">
        <input type="submit" name="insere_componente" value="Cadastrar seus componentes" class="login-submit" style="margin-top: 30px">
               </form>
               <form action="" method="post">
                   &nbsp;<input type="submit" name="cadastra_indicador" value="Consultar seus indicadores" class="login-submit" style="margin-top: 25px">
               </form>
               </div>



            
<?php include "footer.php";?>
<?php
    /*exit();*/
    }//if ($_SESSION["autoriza"]==true)
    else{
        echo "ACESSO NEGADO";
    }
?>