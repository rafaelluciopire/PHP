<?php

include 'conexao.php';

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de Tretas</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script><style type="text/css">
		#tamanhoContainer{
			width: 500px;
		}
    #botao {
        background-color: #017DDE;
        color: #ffffff;

    }
	</style>
</head>
<body>
<div class="container" id="tamanhoContainer" style="margin-top: 80px">
	<h4>FORMULARIO DE CADASTRO</h4>
<form action="_atualizar_produto.php" method="post">
  <?php

   $sql = "SELECT * FROM estoque WHERE id_estoque = $id";
  $buscar = mysqli_query($conexao,$sql);
  while($array = mysqli_fetch_array($buscar)){
          
          $id_estoque =  $array['id_estoque']; 
          $numproduto =  $array['numproduto']; 
          $nomeproduto =  $array['nomeproduto']; 
          $categoria =  $array['categoria']; 
          $quantidade =  $array['quantidade']; 
          $fornecedor =  $array['fornecedor'];   


  ?>
  <div class="mb-3">
    <label>Nr Produto</label>
    <input type="number" class="form-control" name="numproduto" value="<?php echo $numproduto ?>" disabled >
    <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none" >
  </div>
   <div class="mb-3">
    <label>Nome Produto</label>
    <input type="Text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>">
   </div>
   <label>Categoria</label>
 <select class="form-select form-select-lg mb-3" name="categoria" value="<?php echo $categoria ?>">
  <option>Hardware</option>
  <option>Software</option>
  <option>Nada</option>
 </select>
  
  <div class="mb-3">
    <label>Quantidade</label>
    <input type="Text" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">
   </div>
  <label>Fornecedor</label>
<select class="form-select form-select-lg mb-3" name="fornecedor" value="<?php echo $fornecedor ?>">
  <option>José das couves</option>
  <option>Thunder Cats</option>
  <option>Nada</option>
</select>
	<div style="text-align: right;">
<button type="submit" id="botao" class="btn">Atualizar</button>
	</div>
<?php } ?>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</body>
</html>