<?php

include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM estoque WHERE id_estoque = $id";
$deletar = mysqli_query($conexao,$sql)
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
<div class="container" style="width: 500px; margin-top: 20px">
		<center>
	<h4>Deletado com sucesso!</h4>
		</center>
	<div style="padding-top: 20px">
		<center>
		<a href="listar_produtos.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
		</center>
	</div>