<?php
include_once("header2.php"); /*Chama a o header.php ou seja o cabeçalho*/
include 'conexao.php';

$nrproduto = $_POST['nroproduto'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];
$teste = $_POST['teste'];
$teste1 = $_POST['teste1'];
$teste2 = $_POST['teste2'];

$sql = "INSERT INTO `estoque2`( `nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`, `teste`,  `teste1`, `teste2`) VALUES ($nrproduto,'$nomeproduto ','$categoria',$quantidade,'$fornecedor', '$teste', '$teste1','$teste2')";

$inserir = mysqli_query($conexao, $sql)

?>	

	<div class="container" style="width: 500px;margin-top: 20px">
		<center><h4>Poduto adicionado com sucesso!</h4></center>
		<div style="padding-top: 20px">
			<center><a href="index.php" role= "button" class="btn btn.sm btn-primary"> Cadastrar novo item</a></center>		
		</div>		
	</div>

	<?php include_once("footer2.php");?>  <!--Coloca o rodapé aqui-->  