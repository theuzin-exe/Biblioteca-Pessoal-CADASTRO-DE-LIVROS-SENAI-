<!DOCTYPE html>
<html>
<head>
	<title>Listagem dos Livros</title>
  <link rel="stylesheet" href="css/stylelocalizar.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://kit.fontawesome.com/14e3cc8fa2.js" crossorigin="anonymous"></script>

</head>

<body>
<?php

include "conexao.php";

$cod_livro = $_POST["cod_livro"];


$sql = "SELECT * FROM cadastro_livro WHERE cod_livro =
$cod_livro";

$consulta = mysqli_query($connx, $sql);

if (mysqli_num_rows($consulta) == 0)
echo "Livro não cadastrado";


else
{
$linha = mysqli_fetch_array($consulta);

$nome_livro = $linha["nome_livro"];




}	
?>

<div class="container" style="margin-top: 20px">
		<h3 style="text-align: center" style="padding-bottom: 40px">Consulta realizada!</h3>


        
		<div class="container" style="margin-top: 40px">

        <div class="card" style="text-align: center">
  <div class="card-body" >
    <h5 class="card-title">Livro encontrado</h5>
    <p class="card-text"> "<?=$nome_livro?>" foi encontrado com sucesso!</p>
    <a href="listar.php" class="btn btn-primary">Listar</a>
    <a href="index.php" role="button" class="btn btn-primary botao">Voltar</a>

        </BODY>
</HTML> 