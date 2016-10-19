<?php
    session_start();
    if($_SESSION["autoriza"]=TRUE){
?>
<?php include "cabecalho.php";?>

<div id="cadastra_componentes">
        <form method="post" action="cadastra_componente.php">
            <label for="nome">Nome do Componente:</label>
            <input type="text" id="nome" name="nome" class="cadastro1" style="height:10px" /><br /><br/>
            <label for="descricao">Descreva este componente:</label>
            <input type="text" id="descricao" name="descricao" class="cadastro1" style="height:10px" /><br /><br/>
            <input type="submit" name="submit" value="cadastrar" class="login-submit" />
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