<?php
include_once("header2.php"); /*Chama a o header.php ou seja o cabeçalho*/
include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `tb_produtos` WHERE id_prod = $id";
$deletar = mysqli_query($conexao, $sql)
?>

<script src="https://kit.fontawesome.com/8046d7e12c.js" crossorigin="anonymous"></script>
	<style type="text/css">

		#botao{
			background-color: green;		/*Cor do fundo do botão*/
			color: #ffffff;					/*Cor da letra do botão*/
			font-weight: bold;				/*Fonte negrito*/
		}
	</style>

<div class="container" style="width:400px">
	<center>
		<h3>Deletado com sucesso</h3>
		<div style="margin-top: 10px">
			<a href="listar_produtos.php" class="btn btn-sm btn-warning" id="botao" style="width: 80px">Voltar</a>
		</div>
	</center>	
</div>

<?php include_once("footer2.php");?>  <!--Coloca o rodapé aqui-->  