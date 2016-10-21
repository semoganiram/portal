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
        
        <script>
function JTabControl(divMaster,tabWidth,tabHeight)
{
	
	this.tabs = 0;
	this.addTab = addTab;
	this.id  = divMaster;
	
	Construtor(tabWidth,tabHeight);

	this.Container = getObj(divMaster+".ContainerDiv");
	this.Header = getObj(divMaster+".HeaderDiv");
	this.Body = getObj(divMaster+".BodyDiv");

	function Construtor(tabWidth,tabHeight)
	{
		var idContainer = divMaster+".ContainerDiv";
		var idHeader = divMaster+".HeaderDiv";
		var idBody = divMaster+".BodyDiv";

		this.Container = getObj(divMaster);
		this.Container.innerHTML =  "<div id='"+idContainer+"' class='jAbaContainer'></div>" + this.Container.innerHTML;
		this.Container = document.getElementById(idContainer);
		this.Container.innerHTML = "<div id='"+idHeader+"' Class='jAbaHeader'></div>" + "<div id='"+idBody+"' Class='jAbaBody'></div>"
		this.Header = getObj(idHeader);
		this.Body = getObj(idBody);
		
		this.Container.style.width = tabWidth;
		this.Container.style.height = tabHeight;
			
	}

	function addTab(divTab,TitleTab)
	{
		var htmlHeader = "";
		var htmlBody = "";
		var objDivOld = getObj(divTab);
		var bodyClass = "jTabBodyHidden";
		var headerClass = "jTabHeaderHidden";
		
		if(!TitleTab)
			TitleTab = divTab;
		if(this.tabs == 0)
			bodyClass = "jTabBodyInline";
		if(this.tabs == 0)
			headerClass = "jTabHeaderInline";
		
		htmlHeader = "<Span onClick='changeJTabControl(this.id)' id='"+this.id+".Header.Tab."+this.tabs+"' Class='"+headerClass+"'>"+TitleTab+"</Span>&nbsp;";
		htmlBody = " <Span id='"+this.id+".Body.Tab."+this.tabs+"' Class='"+bodyClass+"'>"+objDivOld.innerHTML+"</Tab>";
		objDivOld.innerHTML = "";
				
		Header.innerHTML = Header.innerHTML + htmlHeader;
		Body.innerHTML = Body.innerHTML + htmlBody;		
		
		this.tabs++;
	}
}

function changeJTabControl(Tab)
{
	var id = Tab.split(".");
	var i = 0;
	var j = 0;
	
	while(getObj(id[0]+".Header.Tab."+i))
	{
		getObj(id[0]+".Header.Tab."+i).className = "jTabHeaderHidden"
		i++;
	}
	getObj(Tab).className = "jTabHeaderInline";	

	i=0;
	while(getObj(id[0]+".Body.Tab."+j))
	{
		getObj(id[0]+".Body.Tab."+j).className = "jTabBodyHidden"
		j++;
	}
	getObj(id[0]+".Body.Tab."+id[3]).className = "jTabBodyInline";		
	
}
function getObj(idObj)	
{
	return document.getElementById(idObj);
}
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
                            <div class="tabs-container">

                            <input type="radio" name="tabs" class="tabs" id="tab1" checked>
                            <label for="tab1">Indicador Econômico</label>
                             <div>
                                
                                <div id="desc_ind"> <!--fiz as descrições dentro de um paragráfo p, alinhei umas coisas no 
                                                    centro com style center e outras deixei justificado com justify, 
                                                    &nbps; é para dar espaço -->
                                    
                                    <p style="text-align: center;"><span class="negrito"> Descritivo</span></p>
                                    
                                    <p style="text-align: justify"> <br>&nbsp; <span class="negrito">Margem Bruta:</span> É a Receita
                                    Bruta menos o custo operacional efetivo (desembolso, sem os custos de depreciação e de oportunidade).
                                    </p> </br>
                                    
                                    <p style="text-align: justify"> <br>&nbsp; <span class="negrito">Receita Bruta:</span> Representa o 
                                            resultado da ativide em valores monetários. É o preço unitário multiplicado pela quantidade 
                                            vendida do bem. </p> </br>
                                        
                                        <p style="text-align: justify"> <br>&nbsp;<span class="negrito"> Custo Operacional Efetivo 
                                            (custo com desembolso):</span> 
                                            Este custo representa todos os dispêndios efetuados pelo produtor com operação, 
                                            empreita e material de consumo, constituindo-se nos desembolsos financeiros efetuados 
                                            pelos produtores.  
                                     </p> </br>    
                                        
                                        <p style="text-align: center;"><span class="negrito">Custos fixos (sem depreciação) + Custos variáveis</span></p> 
                                    
                                        <p style="text-align: justify"> <br>&nbsp;<span class="negrito"> Custos fixos:</span> São aqueles cujos valores são os 
                                            mesmos qualquer que seja o volume e produção da empresa, ou seja, independem da 
                                            quantidade produzida no curto prazo.
                                    </p> </br>
                                        
                                            <p style="text-align: justify"> <br>&nbsp;<span class="negrito"> Custos variáveis:</span> Custos variáveis são aqueles 
                                            cujos valores se alteram em função do volume de produção da empresa. Aumentam na 
                                            medida em que aumenta a produção. 
                                    </p> </br>    
                                    
                                        
                                    
                                </div>
                         
                                <div id="calculadora">
                                 
                                    <div id="calc_borda">
                                        <div id="calc_img">
                                            <img src="img/calc_234.png" width="15" height="20"></img>
                                            <div id="label_calc">
                                                <label>Calculadora</label>
                                            </div>           
                                        </div>
                                        <div id="calc_borda_conteudo">
                                            <div id="calc_conteudo_resultado">
                                                <form class="resultado" action="" method="post" name="result">
                                                    <ul>
                                                        <li>
                                                          <span class="required_notification"></span>
                                                        </li>
                                                        <li>
                                                         <label for="result"></label>
                                                               <input type="text" name="name" />
                                                        </li>
                                                    </ul>
                                                </form>
                                            </div>
                                            
                                            <div id="calc_conteudo_forms">
                                             <form method="post" action="calc_dados.php">
                                                 <label for="nome" style="font-size: 12px"><font color="black">Receita Bruta</font></label></br>
                                                 <input type="text" id="nome" name="nome" class="resultado" style="height:20px; width: 100px" /></br></br>
                                              
                                              <label style="font-size: 12px; color: black"> Custo Operacional Efetivo</span></label>  
                                              
                                           
                                              <br><br><label for="descricao" style="font-size: 12px"><font color="black">Custos Fixos</font></label></br>
                                              <input type="text" id="descricao" name="descricao" class="resultado" style="height:20px; width: 100px" /><br /><br/>
                                              
                                              <label for="descricao" style="font-size:12px"><font color="black">Custos Variáveis</font></label>
                                              <br><input type="text" id="descricao" name="descricao" class="resultado" style="height:20px; width: 100px"/></br></br>
                                              <input type="reset" name="clear" value="Limpar" class="btn"/>
                                              <input type="submit" name="submit" value="Calcular" class="btn"/>
                                                </form>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>  
                                
                            <div id="desc_resultado">
                                               <p style="text-align: justify"><span class="negrito"> RESULTADO: Se igual a zero representa o ponto 
                                               de fechamento da empresa, se negativo, não está cobrindo as despesas no curto prazo, se positivo,
                                               o fluxo de caixa positivo (dinheiro no bolso). 
                                               </p>
                                    </div>            
                                    
                                    
                                </div>
                            </div>

                            <input type="radio" name="tabs" class="tabs" id="tab2">
                            <label for="tab2">Indicador Zootécnico</label>
                            <div>
                                <div id="descricao-aba2">
                                    <h3 style="text-align: center;color: black"><strong>Descritivo</strong></h3><br/>
                                    
                                    <p style="text-align: justify;color: black"> <br>&nbsp; <strong>Taxa de Desmame:</strong> É o mais importante indicador da cria.
                                            É o percentual de terneiros desmamados do total de fêmeas acasaladas.
                                    </p>    
                                </div>
                                <div id="calculadora">
                                 
                                    <div id="calc_borda">
                                        <div id="calc_img">
                                            <img src="img/calc_234.png" width="15" height="20"></img>
                                            <div id="label_calc">
                                                <label>Calculadora</label>
                                            </div>           
                                        </div>
                                        <div id="calc_borda_conteudo">
                                            <div id="calc_conteudo_resultado">
                                                <form class="resultado" action="" method="post" name="result">
                                                    <ul>
                                                        <li>
                                                          <span class="required_notification"></span>
                                                        </li>
                                                        <li>
                                                         <label for="result"></label>
                                                               <input type="text" name="name" />
                                                        </li>
                                                    </ul>
                                                </form>
                                            </div>
                                            
                                            <div id="calc_conteudo_forms">
                                             <form method="post" action="calc_dados.php">
                                                 <label for="nome" style="font-size: 12px"><font color="black">Número de terneiros desmamados </font></label></br>
                                                 <input type="text" id="nome" name="nome" class="resultado" style="height:20px; width: 100px" /></br></br>
                                           
                                              <br><br><label for="descricao" style="font-size: 12px"><font color="black">Fêmeas Acasaladas</font></label></br>
                                              <input type="text" id="descricao" name="descricao" class="resultado" style="height:20px; width: 100px" /><br /><br/>
                                       
                                              <input type="reset" name="clear" value="Limpar" class="btn"/>
                                              <input type="submit" name="submit" value="Calcular" class="btn"/>
                                                </form>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>                                                                                     
                                </div>
                            </div>



                            <input type="radio" name="tabs" class="tabs" id="tab3">
                            <label for="tab3">Indicador Sistêmico</label>
                            <div>
                                <div id="descricao-aba3">
                                    <h3 style="text-align: center;color: black"><strong>Descritivo</strong></h3><br/>
                                    
                                    <p style="text-align: justify;color: black"> <br>&nbsp; <strong>Taxa de Desfrute:</strong> É um dos indicadores mais importantes, pois evidencia a produtividade
                                            do rebanho, exprimindo sua capacidade de gerar excedente para o abate.
                                    </p>
                                </div>
                               <div id="calculadora">
                                 
                                    <div id="calc_borda">
                                        <div id="calc_img">
                                            <img src="img/calc_234.png" width="15" height="20"></img>
                                            <div id="label_calc">
                                                <label>Calculadora</label>
                                            </div>           
                                        </div>
                                        <div id="calc_borda_conteudo">
                                            <div id="calc_conteudo_resultado">
                                                <form class="resultado" action="" method="post" name="result">
                                                    <ul>
                                                        <li>
                                                          <span class="required_notification"></span>
                                                        </li>
                                                        <li>
                                                         <label for="result"></label>
                                                               <input type="text" name="name" />
                                                        </li>
                                                    </ul>
                                                </form>
                                            </div>
                                            
                                            <div id="calc_conteudo_forms">
                                             <form method="post" action="calc_dados.php">
                                                 <label for="nome" style="font-size: 12px"><font color="black">Nº de cabeças abatidas </font></label></br>
                                                 <input type="text" id="nome" name="nome" class="resultado" style="height:20px; width: 100px" /></br></br>
                                           
                                              <br><br><label for="descricao" style="font-size: 12px"><font color="black">Nº de animais no rebanho (estoque inicial) * 100 </font></label></br>
                                              <input type="text" id="descricao" name="descricao" class="resultado" style="height:20px; width: 100px" /><br /><br/>
                                       
                                              <input type="reset" name="clear" value="Limpar" class="btn"/>
                                              <input type="submit" name="submit" value="Calcular" class="btn"/>
                                                </form>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>                                                                                     
                                </div>
                            </div>

                            </div>

            </div><!-- div conteudo esquerda-->
        </div> <!-- div conteudo-->
            
            <div id="footer">
                rodape
            </div> <!--final div rodape-->
        </div> <!--final div box-->
    </body>
</html>