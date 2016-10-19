<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>Portal AgroPec</title>
        <link type="text/css" rel="stylesheet" media="screen" href="style2.css" />
        
        <script language="javascript" type="text/javascript">
        function validar(){
            if(document.dados.nome.value==""){
                alert('Preencha o campo com seu nome');
                document.dados.nome.focus();
                return false;
            }
            if(document.dados.sobrenome.value==""){
                alert('Preencha o campo com seu sobrenome');
                document.dados.sobrenome.focus();
                return false;
            }
            if (document.dados.email.value == "") {
                alert('Preencha o campo com seu email');
                document.dados.email.focus();
                return false;
            }
            if (document.dados.rep_email.value == "") {
                alert('Repita seu email');
                document.dados.rep_email.focus();
                return false;
            }
            if (document.dados.senha.value == "") {
                alert('Preencha o campo com sua senha');
                document.dados.senha.focus();
                return false;
            }
            if (document.dados.email.value != document.dados.rep_email.value) {
                alert('Emails diferentes');
                document.dados.email.focus();
                return false;
            }

            return true;
            }
            
        </script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
        <script type="text/javascript">
             $(document).ready(function(){
 		$("#content div:nth-child(1)").show();
 		$(".abas li:first div").addClass("selected");		
 		$(".aba").click(function(){
 			$(".aba").removeClass("selected");
 			$(this).addClass("selected");
 			var indice = $(this).parent().index();
			indice++;
 			$("#content div").hide();
 			$("#content div:nth-child("+indice+")").show();
 		});
 		
 		$(".aba").hover(
 			function(){$(this).addClass("ativa")},
 			function(){$(this).removeClass("ativa")}
 		);				
 	});
        </script>
    </head>
    
    
    <body>
        <div id="box">
            <div id="header">
                <img src="img/logo_topo.png" /> 
                <div id="login">
                    <form name="login" action="validacao.php" method="post">       
                        <label>Login <input type="text" name="login" class="login-input" placeholder="Email" autofocus>&nbsp;&nbsp;&nbsp;</label>
                        <label>Senha <input type="password" name="senha" class="login-input" placeholder="Senha">&nbsp;&nbsp;</label>
                        <input type="submit" name="logar" value="Entrar" class="login-submit">
                    </form>
                </div>
            </div> <!--final div header-->
            
            <div id="content">
                conteudo
                <div id="content-left">
                    <div class="TabControl">
                        <div id="header-aba">
                                <ul class="abas">
                                    <li>
                                        <div class="aba">
                                        <span>Tab 1</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="aba">
                                        <span>Tab 2</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="aba">
                                        <span>Tab 3</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="aba">
                                        <span>Tab 4</span>
                                        </div>
                                    </li>
                                </ul>
                       </div><!--cabecalho a aba-->
                    <div id="content-aba">
                        <div class="conteudo">
			Conteúdo da aba 1
                        </div>
                        <div class="conteudo">
                            Conteúdo da aba 2
                        </div>
                        <div class="conteudo">
                            Conteúdo da aba 3
                        </div>
                        <div class="conteudo">
                            Conteúdo da aba 4
                        </div>
                    </div><!--div conteudo aba-->
                </div><!--div tabControl-->
            </div><!-- div conteudo esquerda-->
        </div> <!-- div conteudo-->
               
            
            <div id="footer">
                rodape
            </div> <!--fina div rodape-->
        </div> <!--final div box-->
    </body>
</html>