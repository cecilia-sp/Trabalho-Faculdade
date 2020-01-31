<?php
include_once("header2.php"); /*Chama a o header.php ou seja o cabeçalho*/
include 'conexao.php';
$id = $_GET['id'];
?>	
	<style type="text/css">
		#tamanhoContainner{ 	
			width: 500px;
		}
		#botao{
			background-color: #EC971F;		/*Cor do fundo do botão*/
			color: #ffffff;					/*Cor da letra do botão*/
			font-weight: bold;				/*Fonte negrito*/
		}
	</style>
<body>

	<div class="container" id = "tamanhoContainner" style="margin-top: 50px">
		<h4>Formulario de alterar cadastro de Produtos</h4>
		<form action="_atualizar_produto.php" method="post" style="margin-top: 20px">
		<?php

			$sql = "SELECT * FROM `tb_produtos` WHERE id_prod =$id";
			$buscar = mysqli_query($conexao, $sql);
			while ($array=mysqli_fetch_array($buscar)) {

			$nome_prod_curto = $array ['nome_prod_curto'];
			$nome_prod_longo= $array['nome_prod_longo'];
			$codigo_interno= $array['codigo_interno'];
			$id_cat= $array['id_cat'];
			$preco= $array['preco'];
			$quantidade_estoque= $array['quantidade_estoque'];
			$preco_promocional= $array['preco_promocional'];
			$foto_principal= $array['foto_principal'];
			$visivel= $array['visivel'];
		?>

		 <div class="form-group">
		     <label >Nome do Produto</label>
		    <input type="text" class="form-control" name="nome_prod_curto" value="<?php echo $nome_prod_curto ?>" >
		     <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style ="display: none">
		 </div>		

		   <div class="form-group">
		       <label >Nome detalhado do Produto</label>
		    <input type="text" class="form-control" name="nome_prod_longo" value="<?php echo $nome_prod_longo ?>" >
		     <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style ="display: none">
		  </div>		 

		  <div class="form-group">
		       <label >Codigo interno do produto</label>
		    <input type="number" class="form-control" name="codigo_interno" value="<?php echo $codigo_interno ?>" >
		     <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style ="display: none">
		  </div>		 

		  <div class="form-group">
		       <label >Categoria id_cat</label>
		    <input type="number" class="form-control" name="id_cat" value="<?php echo $id_cat ?>" >
		     <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style ="display: none">
		  </div>		 

		  <div class="form-group">
		       <label >Preço prooduto</label>
		    <input type="float" class="form-control" name="preco" value="<?php echo $preco ?>" >
		     <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style ="display: none">
		  </div>		

		  <div class="form-group">
		       <label >Quantidade estoque prooduto</label>
		    <input type="number" class="form-control" name="quantidade_estoque" value="<?php echo $quantidade_estoque ?>" >
		     <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style ="display: none">
		  </div>	   

		  <div class="form-group">
		       <label >Preço produto promocional</label>
		    <input type="float" class="form-control" name="preco_promocional" value="<?php echo $preco_promocional ?>" >
		     <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style ="display: none">
		  </div>	   

		  <div class="form-group">
		       <label >Foto imagem e sua extensão</label>
		    <input type="text" class="form-control" name="foto_principal" value="<?php echo $foto_principal ?>" >
		     <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style ="display: none">
		  </div>	   

		  <div class="form-group">
		       <label >Visivel</label>
		    <input type="number" class="form-control" name="visivel" value="<?php echo $visivel ?>" >
		     <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style ="display: none">
		  </div>


			
		<div style="text-align: right;">			
			<button type="submit" id="botao" class="btn  btn-sm">Atualizar</button>
		</div>	

<?php 	}?>

		</form>
	</div>	



<?php include_once("footer2.php");?>  <!--Coloca o rodapé aqui-->  