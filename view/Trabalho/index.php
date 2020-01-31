<?php include_once("header2.php");?>  <!--Chama a o header.php ou seja o cabeçalho--> 


	<title>Meu Primeiro Script</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" >
	<style type="text/css">
		#tamanhoContainner{ 	
			width: 500px;
		}
		#botao{
			background-color: green;		/*Cor do fundo do botão*/
			color: #ffffff;					/*Cor da letra do botão*/
			font-weight: bold;				/*Fonte negrito*/
		}
	</style>



<body>

	<div class="container" id = "tamanhoContainner" style="margin-top: 50px">
		<h4>Formulario de cadastro de Produtos de informatica</h4>
		<form action="http://localhost/final_correto_v7/view/Trabalho/inserindoTbProdutos.php" method="post" style="margin-top: 20px">
		 <div class="form-group">
		    <label >Nome do Produto</label>
		    <input type="text" class="form-control" name="nome_prod_curto" placeholder="Insira o nome do produto" autocomplete="off" required>
		  </div>	

		 <div class="form-group">
		    <label >Nome detalhado do Produto </label>
		    <input type="text" class="form-control" name="nome_prod_longo" placeholder="Insira o nome do produto com detalhes" autocomplete="off" required>
		 </div>	

		  <div class="form-group">
		    <label >Codigo interno do produto</label>
		    <input type="number" class="form-control" name="codigo_interno" placeholder="Insira codigo interno do produto" autocomplete="off" required>
		 </div>	

		 <div class="form-group">
		    <label >Categoria id_cat</label>
		    <input type="number" class="form-control" name="id_cat" placeholder="Insira categoria do produto" autocomplete="off" required>
		 </div>	

		  <div class="form-group">
		    <label >Preço prooduto</label>
		    <input type="float" class="form-control" name="preco" placeholder="Insira preço do produto" autocomplete="off" required>
		 </div>			  

		 <div class="form-group">
		    <label >Quantidade estoque prooduto</label>
		    <input type="number" class="form-control" name="quantidade_estoque" placeholder="Insira quantidade do produto" autocomplete="off" required>
		 </div>			  

		 <div class="form-group">
		    <label >Preço produto promocional</label>
		    <input type="float" class="form-control" name="preco_promocional" placeholder="Insira preço promocional do produto" autocomplete="off" required>
		 </div>			

		  <div class="form-group">
		    <label >Foto imagem e sua extensão</label>
		    <input type="text" class="form-control" name="foto_principal" placeholder="Insira nome e extesão da img do produto" autocomplete="off" required>
		 </div>			

		  <div class="form-group">
		    <label >Visivel</label>
		    <input type="number" class="form-control" name="visivel" placeholder="Produto ficará visivel" autocomplete="off" required>
		 </div>	
		 			
		<div style="text-align: right;">			
			<button type="submit" id="botao" class="btn  btn-sm">Cadastrar</button>
			<a href="http://localhost/final_correto_v7/view/Trabalho/listar_produtos.php" class="btn btn-sm btn-warning" id="botao" style="width: 80px">Consultar</a>
		</div>	

		</form>
	</div>	
	<br>	
	<br>



<?php include_once("footer2.php");?>  <!--Coloca o rodapé aqui-->  