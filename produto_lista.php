<html>
<?php include ("cabecalho.php");
include("banco_produto.php"); ?>

<?php 
	if(array_key_exists("removido", $_GET) && $_GET["removido"]=="true"){
?>
	<P class="alert-success">Produto apagado com sucesso!</P>
<?php
	}
?>

<table class="table table-striped table-bordered">	
	<?php		
		$produtos = listaProdutos($conexao);
		foreach ($produtos as $produto) {
	?>
	<tr>
		<td><?= $produto['nome'] ?></td>
		<td><?= $produto['preco'] ?></td>
		<td><?= substr($produto['descricao'], 0, 40)?></td>
		<td>
			<form action="remove_produto.php" method="post">
					<input type="hidden" name="id" value='<?=$produto["id"]?>' />
					<button class="btn btn-danger">Remover</button>
			
			</form>

		</td>
	</tr>
	<?php		
		}
	?>
</table>

<?php include ("rodape.php");?>
</html>