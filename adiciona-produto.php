<html>
<?php include("cabecalho.php");
include("banco_produto.php");
$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
if (insereProduto($conexao, $nome, $preco, $descricao)){ ?>
	<p class="text-success">Produto <?= $nome; ?>, <?= $preco; ?> adicionado com sucesso!</p>
<?php 
}else{
	$msg = mysqli_error($conexao);

?>
	<p class="text-danger">Produto <?= $nome; ?>,Não foi adicionado: <?= $msg?></p>
<?php
}
	
include("rodape.php"); 
?>
</html>