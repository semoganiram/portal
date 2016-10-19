<?php
    session_start();
    if($_SESSION["autoriza"]=TRUE){
?>

<?php include "cabecalho.php";?>


<h1 style="font-size:24px">MÓDULO ADMINISTRADOR<img src="img/admin.png" style="width: 83px"/> </h1>
                

                     <!--------Campo inserir formula--------->
                <table width="260" border="0" >
                    <tr>
                        <td>
                           <!-- <form action="index.php?topicos=nav/valida_formula" method="post">
                                <p>Formula</p></td>
                            <td>
                                <input type="text" name="formula" id="formula">
                                <input name="OK" type="submit" value="OK">
                            </td>
                            </form>-->
                            <form action="formulario_cadastra_componente.php" method="post">
                                <input type="submit" name="cadastra_componente" value="Cadastrar Novo Componente" class="login-submit" style="margin-top: 30px">
                            </form>
                           <form action="formulario_cadastra_indicador.php" method="post">
                                <input type="submit" name="cadastra_indicador" value="Cadastrar Novo Indicador" class="login-submit" style="margin-top: 25px">
                            </form>
                            <form action="formulario_cadastra_grupo.php" method="post">
                                <input type="submit" name="cadastra_grupo" value="Cadastrar Novo Grupo de Indicadores" class="login-submit" style="margin-top: 25px">
                            </form>
                        </td>
                    </tr>
                </table>

            
<?php include "footer.php";?>

<?php
    /*exit();*/
    }//if ($_SESSION["autoriza"]==true)
    else{
        echo "ACESSO NEGADO";
    }
?>
