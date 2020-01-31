<?php
include_once("header2.php"); /*Chama a o header.php ou seja o cabeçalho*/
include 'conexao.php';


$id = $_POST['id'];
$nome_prod_curto = $_POST['nome_prod_curto'];
$nome_prod_longo= $_POST['nome_prod_longo'];
$codigo_interno= $_POST['codigo_interno'];
$id_cat= $_POST['id_cat'];
$preco= $_POST['preco'];
$quantidade_estoque= $_POST['quantidade_estoque'];
$preco_promocional= $_POST['preco_promocional'];
$foto_principal= $_POST['foto_principal'];
$visivel= $_POST['visivel'];


 $sql = "UPDATE `tb_produtos`  SET `nome_prod_curto`='$nome_prod_curto', `nome_prod_longo`='$nome_prod_longo', `codigo_interno`='$codigo_interno', `id_cat`='$id_cat', `preco`='$preco', `quantidade_estoque`='$quantidade_estoque', `preco_promocional`='$preco_promocional', `foto_principal`='$foto_principal', `visivel`='$visivel' WHERE id_prod =$id";

$atualizar = mysqli_query($conexao, $sql);


?>

<div class="container" style="width:400px">
	<center>
		<h3>Atualizado com sucesso</h3>
		<div style="margin-top: 10px">
			<a href="listar_produtos.php" class="btn btn-sm btn-warning" style="color: #fff">Voltar</a>
		</div>
	</center>	
</div>


<?php include_once("footer2.php");?>  <!--Coloca o rodapé aqui-->  
