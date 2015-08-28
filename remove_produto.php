<?php
include("cabecalho.php");
include("banco_produto.php");

$id = $_POST['id'];
removeProduto($conexao, $id);

header("Location: produto_lista.php?removido=true");
die();

include("rodape.php");
?>