<!DOCTYPE html>
<html>
<head>
	<title>Listagem dos Livros</title>
	<link rel="stylesheet" href="css/stylelistar.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://kit.fontawesome.com/14e3cc8fa2.js" crossorigin="anonymous"></script>
	<style>
		body{
			background-color: white;
			color: black
		}
	</style>	
</head>

<body>

	<div class="container" style="margin-top: 40px">
		<h3 style="text-align: center" style="padding-bottom: 20px">LISTAGEM DOS LIVROS</h3>

		<table class="table" >
			
		<thead class="light">
	
		<tr>
		
					<th  align-items: center scope="col">Nome</th>
					<th  scope="col">Ano</th>
					<th  scope="col">Data de compra</th>
					<th  scope="col">Preço</th>
                    <th  scope="col">Gênero</th>
                    <th  scope="col">Autor</th>
                    <th  scope="col">Editora</th>
                    <th  scope="col">Código do Livro</th>
                    <th  scope="col">Em qual estante está o livro?</th>
                    <th  scope="col">Em qual prateleira/linha está o livro?</th>
                    <th  scope="col">Em qual posição/ordem o livro está na prateleira?</th>

				</tr>
		
			</thead>
			<tbody>
				<tr>
						<?php
					include('conexao.php');

					$sql = "select * from cadastro_livro;";
					$busca = mysqli_query($connx,$sql);

					while ($array = mysqli_fetch_array($busca)) {
						$nome_livro = $array['nome_livro'];
						$ano = $array['ano'];
						$data_compra = $array['data_compra'];
                        $preco = $array['preco'];
						$genero= $array['genero'];
                        $nome_autor = $array['nome_autor'];
						$editora = $array['editora'];
                        $cod_livro = $array['cod_livro'];
						$estante = $array['estante'];
                        $prateleira_linha = $array['prateleira_linha'];
						$posicao_ordem = $array['posicao_ordem'];
					
					
					
					echo '<td>' . $nome_livro . '</td>';
					echo '<td>' . $ano . '</td>';
					echo '<td>' . $data_compra . '</td>';
                    echo '<td>' . $preco . '</td>';
					echo '<td>' . $genero . '</td>';
                    echo '<td>' . $nome_autor . '</td>';
					echo '<td>' . $editora .  '</td>';
                    echo '<td>' . $cod_livro . '</td>';
					echo '<td>' . $estante . '</td>';
                    echo '<td>' . $prateleira_linha . '</td>';
					echo '<td>' . $posicao_ordem . '</td>';
					echo '<td> <a class="btn btn-warning btn-sm" href="editar.php?cod_livro=' .$cod_livro.'" role="button"><i class="far fa-edit"></i> Editar livro</a>';
					echo '<td> <a class="btn btn-danger btn-sm" href="excluir.php?cod_livro=' .$cod_livro. '" role="button"><i class="far fa-trash-alt"></i> Excluir livro</a></td>';	

					echo '</tr>';
					
					} ?>
				</tr>
				
			</tbody>
		</table>

      <div style="text-align: right">
        <a href="index.php" role="button" class="btn btn-lg btn-info">Voltar</a>
      </div>


	</div>


</body>
</html>