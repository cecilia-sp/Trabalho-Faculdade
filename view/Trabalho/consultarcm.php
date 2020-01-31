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
	      <th scope="col">Nome Cliente</th>
	      <th scope="col">Email</th>
	      <th scope="col">Valor Pedido</th>
	      <th scope="col">Qtd Produtos</th>
	      <th scope="col">Data Pedido</th>
	      <th scope="col">Ação</th>

	    </tr>
	  </thead>
	    <tr>
			<?php
				include 'conexao.php';
				$sql = "SELECT * FROM tb_cliente";
				$busca =mysqli_query($conexao, $sql);

				while ($array = mysqli_fetch_array($busca)) {	


					$id = $array['id_cliente'];
					$nome = $array['nome'];
					$sexo = $array['sexo'];
					$cpf = $array['cpf'];
					$nascimento = $array['nascimento'];
					$nascimento = $array['nascimento']

			?>

	<tr>
	     <td> <?php echo $nome ?> </td>
	      <td> <?php echo $sexo ?> </td>
	      <td> <?php echo $cpf ?> </td>
	      <td> <?php echo $nascimento ?> </td>
	      <td> <?php echo $nascimento ?> </td>
	

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

<?php include_once("footer2.php");?>  <!--Coloca o rodapé aqui-->  