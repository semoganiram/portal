<!DOCTYPE html>
<html>
    <head>
        <title>Insere Componente</title>
        <style type="text/css">
            a.dcontexto{
            position:relative; 
            font:12px arial, verdana, helvetica, sans-serif; 
            padding:0;
            color:#039;
            text-decoration:none;
            border-bottom:2px dotted #039;
            cursor:help; 
            z-index:24;
            }
            a.dcontexto:hover{
            background:transparent;
            color:#f00;
            z-index:25; 
            }
            a.dcontexto span{display: none}
            a.dcontexto:hover span{ 
            display:block;
            position:absolute;
            width:230px; 
            top:3em;
            right-align:justify;
            left:0;
            font: 12px arial, verdana, helvetica, sans-serif; 
            padding:5px 10px;
            border:1px solid #999;
            background:#e0ffff; 
            color:#000;
            }
          </style>
    </head>
    
    <body>
        <form action="inserir.php" method="post">
            <table>
                <tr>
                <label>Informe os valores dos componentes</label><br />
                <br />
                    <?php
                        include "config.php";

                        if(isset($_POST["comp"])){
                            foreach($_POST["comp"] as $comp){
                                $compon[]=$comp;
                                $query="SELECT nome, desc_comp FROM componente_sistema";
                                $result=  mysqli_query($dbc, $query);

                                while($row = mysqli_fetch_array($result)){
                                    if($row['nome']==$comp){
                                        $valor=$row['nome'];
                                        $desc=$row['desc_comp'];
                    ?>
                            <label for="valor_comp"><?php echo $valor ?></label>
                            <input type="text" name="valor_comp[]" id="valor_comp"/>
                            <label><a href="#" class="dcontexto">Ajuda<span><strong>Descrição: </strong><?php echo $desc;?></a></label>"
                            <label><input type="hidden" name="nome_comp[]" value="<?php echo $valor ?>"></label>
                            <br />
                
                
                    <?php 
                                    }
                                }
                            }
                    ?>
                    </tr>
            </table>
                <input type="submit" name="submit" value="enviar" />
        </form>
                        
                     <?php
                        }else{
                            echo "Você não escolheu nenhum componente!<br>";
                            header("Location:formulario.inserir.componentes.php"); exit;
                        }
                     
                     ?>
    </body>
</html>
