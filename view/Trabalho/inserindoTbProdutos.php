<?php
include_once("header2.php"); /*Chama a o header.php ou seja o cabeçalho*/
include 'conexao.php';

$nome_prod_curto = $_POST ['nome_prod_curto'];
$nome_prod_longo= $_POST['nome_prod_longo'];
$codigo_interno= $_POST['codigo_interno'];
$id_cat= $_POST['id_cat'];
$preco= $_POST['preco'];
$quantidade_estoque= $_POST['quantidade_estoque'];
$preco_promocional= $_POST['preco_promocional'];
$foto_principal= $_POST['foto_principal'];
$visivel= $_POST['visivel'];

$sql = "INSERT INTO `tb_produtos`( `nome_prod_curto`, `nome_prod_longo`, `codigo_interno`, `id_cat`, `preco`, `quantidade_estoque`,  `preco_promocional`, `foto_principal`, `visivel` ) VALUES ('$nome_prod_curto ','$nome_prod_longo',$codigo_interno,'$id_cat', '$preco', '$quantidade_estoque','$preco_promocional','$foto_principal','$visivel')";

$inserir = mysqli_query($conexao, $sql)
?>	

	<div class="container" style="width: 500px;margin-top: 20px">
		<center><h4>Poduto adicionado com sucesso!</h4></center>
		<div style="padding-top: 20px">
			<center><a href="index.php" role= "button" class="btn btn.sm btn-primary"> Cadastrar novo item</a></center>		
		</div>		
	</div>

<?php include_once("footer2.php");?>  <!--Coloca o rodapé aqui-->  	