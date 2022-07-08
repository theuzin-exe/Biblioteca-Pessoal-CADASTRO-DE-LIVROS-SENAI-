<?php

include('conexao.php');


$nome_livro=$_POST['nome_livro'];
$ano= $_POST['ano'];
$data_compra=$_POST['data_compra'];
$preco=$_POST['preco'];
$genero=$_POST['genero'];
$nome_autor=$_POST['nome_autor'];
$editora=$_POST['editora'];
$cod_livro=$_POST['cod_livro'];
$estante=$_POST['estante'];
$prateleira_linha=$_POST['prateleira_linha'];
$posicao_ordem=$_POST['posicao_ordem'];

//$echo '---';
$sql =        "UPDATE cadastro_livro SET ";
$sql = $sql . "nome_livro ='$nome_livro', ";
$sql = $sql . "ano = '$ano', ";
$sql = $sql . "data_compra = '$data_compra', ";
$sql = $sql . "preco = '$preco', ";
$sql = $sql . "genero = '$genero', ";
$sql = $sql . "nome_autor = '$nome_autor', ";
$sql = $sql . "editora = '$editora', ";
$sql = $sql . "estante= '$estante', ";
$sql = $sql . "prateleira_linha = '$prateleira_linha', ";
$sql = $sql . "posicao_ordem = '$posicao_ordem' ";
$sql = $sql . "WHERE cod_livro = $cod_livro;";


//echo
//$sql = $sql . "WHERE id=$id;";
//echo $sql;
//die();

$inserir = mysqli_query($connx,$sql);

?>
<html>
<head>
	<meta charset="utf-8">
	<title>Editar informações do livro</title>  
	<link rel="stylesheet" href="css/stylecadastro.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<div class="container" style="widht: 500px;margin-top: 20px">
		<h4>Livro atualizado e editado!</h4>
	</div>
	<center>
		<a href="listar.php" role="button" class="btn btn-sm btn-primary">Listar todos os livros</a>
		
	</center>
</body>
</html>
