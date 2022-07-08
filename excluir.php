<?php
include('conexao.php');

$cod_livro = $_GET['cod_livro'];

$sql =        "DELETE FROM cadastro_livro ";
$sql = $sql . "WHERE cod_livro=$cod_livro;";

$inserir = mysqli_query($connx,$sql);


//echo $id;
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Biblioteca Pessoal (Deleta o livro)</title>  
	<link rel="stylesheet" href="css/stylecadastro.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<div class="container" style="widht: 500px;margin-top: 20px" >
		<h4>Livro excluído com sucesso</h4>
	</div>
	<center>
		<a href="listar.php" role="button" class="btn btn-sm btn-primary">Listagem dos livros</a>
		
	</center>
</body>
</html>
