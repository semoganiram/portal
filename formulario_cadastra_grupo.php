<?php
    session_start();
    if($_SESSION["autoriza"]=TRUE){
?>
<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript" language="javascript">
// Função que adiciona os números no Visor quando pressionado os botões
function grupo(num) {
  // if (typeof gvisor == 'undefined') {
   //   document.calcform.visor.value = '';
   //}
   //document.calcform.visor.value=(document.calcform.visor.value + num);
   //gvisor = 1;
   document.getElementById('visor').value=document.getElementById('visor').value + num.value + ";";
   //document.getElementById('visor').value = arrayp.join('|');
}
</script>
    </head>
    <?php include "cabecalho.php";?>
    <body>
        <form action="cadastra_grupo.php" method="post">
            <table>
                <tr>
                    <label for="descricao">Descrição do Grupo Indicador:</label>
                    <input type="text" id="descricao" name="descricao" /><br /><br/> 
                </tr>
                <tr>
                    <label>Selecione indicadores que pertencem a este grupo:</label>
                    <br />
                    <label><select name="ngrupo">
                     <?php
                        include "config.php";
                        $query="SELECT nome FROM indicador";
                        $result=  mysqli_query($dbc, $query);

                        while($row = mysqli_fetch_array($result)){
                        $valor=$row['nome'];
                    ?>
                        <option value="<?php echo $valor;?>" onclick="grupo(this)"><?php echo $valor;?></option>
                        <!--<label><input type="checkbox" name="grupo[]" value="<?php echo $valor;?>"/><?php echo $valor;?></label><br />-->
            
                    <?php
                     }
                    ?>
                        </select></label>
                        <textarea type="text" name="visor" id="visor" cols="50" rows="7"></textarea>
                </tr>
            </table>
            <input type="submit" name="submit" value="cadastrar" />
</form>
<?php include "footer.php";?>
<?php
    /*exit();*/
    }//if ($_SESSION["autoriza"]==true)
    else{
        echo "ACESSO NEGADO";
    }
?>    