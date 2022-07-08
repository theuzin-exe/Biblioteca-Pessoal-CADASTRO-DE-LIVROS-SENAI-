<?php
include('conexao.php');

$cod_livro = $_GET['cod_livro'];
//echo $cod_livro;
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Biblioteca Pessoal (Cadastro dos Livros)</title>  
    <link rel="stylesheet" href="css/stylecadastro.css">  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <style type="text/css">
      #tamanhoContainer {
        width: 500px;
      }

      #botao {
        background-color: #FEC68D;
        color: #ffffff
      }

    </style>


    <?php //echo '<p>Hello World</p>'; ?> 



    <div class="container" id="tamanhoContainer" style="margin-top: 40px">

    <h4>EDITAR AS INFORMAÇÕES DO LIVRO</h4>

    <?php
    $sql = "SELECT * from cadastro_livro where cod_livro = $cod_livro";
    $busca = mysqli_query($connx, $sql);
    while ($array = mysqli_fetch_array($busca)){
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
    }
    ?>


    


      <form action="atualizar.php" method="post" style="margin-top: 20px">
      	<input type="text" class="form-control" id="cod_livro" autocomplete="off" name="cod_livro" value="<?php echo $cod_livro ?>" style="display: none;">

        <div class="form-group">
          <label>Nome do livro</label>
          <input type="text" class="form-control" id="nome_livro" autocomplete="off" name="nome_livro" value="<?php echo $nome_livro ?>">
        </div>
      
        <div class="form-group">
          <label>Ano de lançamento do livro</label>
          <input type="text" class="form-control" id="ano" name="ano" value="<?php echo $ano ?>" autocomplete="off">
        </div>
        <div class="form-group">
          <label>Data de compra do livro</label>
          <input type="text" class="form-control" id="data_compra" name="data_compra" value="<?php echo $data_compra ?>" autocomplete="off">
        </div>
        <div class="form-group">
          <label>Preço do livro (R$) (Se não for comprado, digite *)</label>
          <input type="text" class="form-control" id="preco" name="preco" value="<?php echo $preco ?>" autocomplete="off">
        </div>
        <div class="form-group">
          <label>Gênero(s) do livro</label>
          <input type="text" class="form-control" id="genero" name="genero" value="<?php echo $genero ?>" autocomplete="nome_autor">
        </div>
        <div class="form-group">
          <label>Nome do autor do livro</label>
          <input type="text" class="form-control" id="nome_autor" name="nome_autor" value="<?php echo $nome_autor ?>" autocomplete="off">
        </div>
        <div class="form-group">
          <label>Editora do livro (Se não tiver, digite *)</label>
          <input type="text" class="form-control" id="editora" name="editora" value="<?php echo $editora ?>" autocomplete="off">
        </div>
        
        <div class="form-group">
          <label>Em qual estante está o livro?</label>
          <input type="text" class="form-control" id="estante" name="estante" value="<?php echo $estante ?>" autocomplete="off">
        </div>

        
        
        <div class="form-group">
          <label>Em qual prateleira/linha está o livro?</label>
          <input type="text" class="form-control" id="prateleira_linha" name="prateleira_linha" value="<?php echo $prateleira_linha ?>" autocomplete="off">
        </div>
        
        <div class="form-group">
          <label>Em qual posição/ordem o livro está na prateleira?</label>
          <input type="text" class="form-control" id="posicao_ordem" name="posicao_ordem" value="<?php echo $posicao_ordem ?>" autocomplete="off">
        </div>
      
      
      
      
      
      
        <div style="text-align: right">
        <button type="submit" id="botao" class="btn btn-primary botao">Atualizar</button>
      </div>
    </form>
    </div>


  </body>
</html>
