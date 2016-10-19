<?php
    session_start();
    if($_SESSION["autoriza"]=TRUE){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "DTD/xhtml1-strict.dtd">
<html><head>
<title>Tabela</title>
<style type="text/css">

body { font: normal 11px tahoma,arial,serif;}

table{margin: 0px;}
table,th,td{border-collapse: collapse;}
th,td{border-bottom: 1px solid green;padding: 0px;}
th span{display: block; padding: 3px}
td span{display: block; padding: 3px}
#lista table {width: 367px; color: black; font-size: 15px;}
#lista th{color: #FFFFFF;background-color: green;text-align: center; font-size: 20px;}
#lista.tabContainer {width: 366px;border: 1px solid green}
#lista .scrollContainer {width: 366px;height: 180px;overflow: auto;}
#lista .tabela-coluna0{width: 100px;}
#lista .tabela-coluna1{width: 150px;}
#lista .tabela-coluna2{width: 100px;}


</style>
</head>
    
<?php include "cabecalho.php";?>
<div class="tabContainer" id="lista">
    <table border="0px">
        <thead>
            <tr>
                <th class="tabela-coluna0"><span>Nome do Componente</span></th>
                <th class="tabela-coluna1"><span>Descrição do Componente</span></th>
            </tr>
        </thead>
    </table>
    <div class="scrollContainer">
        <table border="0">
            <tbody>
                    <!--<label>Selecione os compenetes que você possui:</label>
                    <br />-->
                     <?php
                        include "config.php";
                        $id=$_SESSION['UsuarioID'];
                        $query="SELECT id_comp FROM historico_valores WHERE id_user='$id'";
                        $result=  mysqli_query($dbc, $query);
                        
                        while($row=  mysqli_fetch_array($result)){
                            $valor=$row['id_comp'];
                            //echo "$valor";
                            $query2="SELECT nome, desc_comp FROM componente_sistema WHERE id_comp='$valor'";
                            $result2=  mysqli_query($dbc, $query2);
                            while($row2=  mysqli_fetch_array($result2)){
                                 $nome=$row2['nome'];
                                $desc=$row2['desc_comp'];
                                //echo "$nome"."-"."$desc";
                        
                    ?>
                    <tr>
                    <td class="tabela-coluna0"><span><?php echo $nome;?></span></td>
                    <td class="tabela-coluna1"><span><?php echo $desc;?></span></td>
                    </tr>
                    <?php
                     }
                            }
                    ?>
 
                </tr>
            </tbody>
        </table>
    </div>
</div>
    <input type="button" value="Informar novos componentes" class="login-submit" style="margin-top:30px"/>
    <input type="button" value="Verificar dependências" class="login-submit" />

<?php include "footer.php";?>
<?php
    /*exit();*/
    }//if ($_SESSION["autoriza"]==true)
    else{
        echo "ACESSO NEGADO";
    }
?>