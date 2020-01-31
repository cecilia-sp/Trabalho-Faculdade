<?php include_once("header2.php");?> <!--Chama a o header.php ou seja o cabeçalho--> 

<script src="https://kit.fontawesome.com/8046d7e12c.js" crossorigin="anonymous"></script>
	<style type="text/css">

		#botao{
			background-color: green;		/*Cor do fundo do botão*/
			color: #ffffff;					/*Cor da letra do botão*/
			font-weight: bold;				/*Fonte negrito*/
		}
	</style>


<body>
<div class="container" style="margin-top: 40px">
	<h3>Lista de Produtos</h3>
	<br>
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">Nome produto</th>
	      <th scope="col">Nome produto detalhe</th>
	      <th scope="col">Preço</th>
	      <th scope="col">Cogigo produto interno</th>
	      <th scope="col">Quantidade</th>
	      <th scope="col">Ação</th>

	    </tr>
	  </thead>
	    <tr>
			<?php
				include 'conexao.php';
				$sql = "SELECT * FROM tb_produtos where id_cat = 1";
				$busca =mysqli_query($conexao, $sql);

				while ($array = mysqli_fetch_array($busca)) {	
					$id = $array['id_prod'];
					$nome_prod_curto = $array['nome_prod_curto'];
					$nome_prod_longo = $array['nome_prod_longo'];
					$preco = $array['preco'];
					$codigo_interno = $array['codigo_interno'];
					$quantidade_estoque = $array['quantidade_estoque'];
			?>

	<tr>
	     <td> <?php echo $nome_prod_curto ?> </td>
	      <td> <?php echo $nome_prod_longo ?> </td>
	      <td> <?php echo $preco ?> </td>
	      <td> <?php echo $codigo_interno ?> </td>
	      <td> <?php echo $quantidade_estoque ?> </td>
	

	     <td> 
	     	<a class="btn btn-warning btn-sm" style="color: #fff background-color: #FF1168" href="editar_produto.php?id=<?php echo $id ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
	     	<a class="btn btn-danger btn-sm" style="color: #fff" href="deletar_produto.php?id=<?php echo $id ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
		
			<a href="index.php" class="btn btn-sm btn-warning" id="botao" style="width: 80px">Inicio</a>

	     </td>

	</tr>
		<?php } ?>

	 </tr>
	</table>	
</div>



<section ng-controller="destaque-controller">
	<div id="Banner" class="container">		
		<div class="row text-center title-default-roxo">
			<h2>Banner</h2>
			<hr>	
		</div>
		<div class="row">			
			<div class="col-md-3" ng-repeat="produto in buscados">
				<div class="box-produto-info">
					<a href="produto-{{produto.id_prod}}">
						<img src="img/produtos/{{produto.foto_principal}}" alt="{{produto.nome_prod_longo}}" class="produto-img">
						<h3>{{produto.nome_prod_longo}}</h3>
						<div class="estrelas" data-score="{{produto.media}}"></div>
						<div class="text-qtd-reviews text-arial-cinza">({{produto.total_reviews}})</div>
						<div class="text-valor text-roxo">R$ {{produto.total}}</div>
						<div class="text-parcelado text-arial-cinza">{{produto.parcelas}}x de R$ {{produto.parcela}} sem juros</div>
					</a>
				</div>
			</div>
		</div>
	</div>



	<div id="Bonecos" class="container">		
		<div class="row text-center title-default-roxo">
			<h2>Bonecos</h2>
			<hr>	
		</div>
		<div class="row">			
			<div class="col-md-3" ng-repeat="produto in buscados">
				<div class="box-produto-info">
					<a href="produto-{{produto.id_prod}}">
						<img src="img/produtos/{{produto.foto_principal}}" alt="{{produto.nome_prod_longo}}" class="produto-img">
						<h3>{{produto.nome_prod_longo}}</h3>
						<div class="estrelas" data-score="{{produto.media}}"></div>
						<div class="text-qtd-reviews text-arial-cinza">({{produto.total_reviews}})</div>
						<div class="text-valor text-roxo">R$ {{produto.total}}</div>
						<div class="text-parcelado text-arial-cinza">{{produto.parcelas}}x de R$ {{produto.parcela}} sem juros</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>


<?php include_once("footer2.php");?>  <!--Coloca o rodapé aqui-->  