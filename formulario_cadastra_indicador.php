<?php
    session_start();
    if($_SESSION["autoriza"]=TRUE){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" language="javascript">
// Função que adiciona os números no Visor quando pressionado os botões
function calcNum(num) {
  // if (typeof gvisor == 'undefined') {
   //   document.calcform.visor.value = '';
   //}
   //document.calcform.visor.value=(document.calcform.visor.value + num);
   //gvisor = 1;
   document.getElementById('visor').value=document.getElementById('visor').value + num.value;
   //document.getElementById('visor').value = arrayp.join('|');
}
</script>
</head>
<?php include "cabecalho.php";?>
    <form name="calcform" method="post" action="cadastra_indicador.php">
   <fieldset>
      <!--<textarea type="text" name="visor" id="visor" cols="50" rows="7"></textarea>-->
      <table>
         <tr>
             <label>Informe a equação do novo indicador:</label>
             <br />
            <textarea type="text" name="visor" id="visor" cols="50" rows="7"></textarea>
            
            <label><select name="ncomp">
                    
            <?php
            include "config.php";
            $query="SELECT nome FROM componente_sistema";
            $result=  mysqli_query($dbc, $query);

            while($row = mysqli_fetch_array($result)){
                $valor=$row['nome'];
            ?>

                    <option value="<?php echo $valor;?>" onclick="calcNum(this)"><?php echo $valor;?></option>
            
           <!-- <label><input type="button" id="c" name="c" value="<?php echo $valor;?>" onclick="calcNum(this)" /></label>-->
            
            <?php
            }
            ?>
            </select></label>
            <label><input type="button" name="add" value="+" onclick="calcNum(this)" /></label>
            <label><input type="button" name="sub" value="-" onclick="calcNum(this)" /></label>
            <label><input type="button" name="mult" value="*" onclick="calcNum(this)" /></label>
            <label><input type="button" name="div" value="/" onclick="calcNum(this)" /></label>
            <label><input type="button" name="lp" value="(" onclick="calcNum(this)" /></label>
            <label><input type="button" name="lr" value=")" onclick="calcNum(this)" /></label>
         </tr>
            
        <!-- <tr>
            <br />
            <br />
            <label>Quantos componentes?</label>
            <select name="ncomp">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select> 
         </tr>-->
         <tr>
            <br />
            <br />
            <label for="descricao">Descrição do Componente:</label>
            <input type="text" id="descricao" name="descricao" /><br /><br/> 
         </tr>
         <tr>
            <label for="nome">Nome do Componente:</label>
            <input type="text" id="nome" name="nome" /><br /><br/> 
         </tr>
      </table>
   </fieldset>
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