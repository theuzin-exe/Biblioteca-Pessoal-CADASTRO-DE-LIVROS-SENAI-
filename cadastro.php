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

    <div class="container" id="tamanhoContainer" style="margin-top: 40px">

    <h4>CADASTRO DOS LIVROS</h4>


      <form action="inserir_livro.php" method="post" style="margin-top: 50px">

        <div class="form-group">
          <label>Nome do livro</label>
          <input type="text" class="form-control" id="nome_livro" autocomplete="off" name="nome_livro" placeholder="Digite o nome do livro" required>
        </div>
        
        <div class="form-group">
          <label>Ano de lançamento do livro (YYYY)</label>
          <input type="text" class="form-control" id="ano" name="ano" placeholder="Digite o ano do livro" autocomplete="off" required>
        </div>
        
        <div class="form-group">
          <label>Data de compra do livro (DD/MM/YY)</label>
          <input type="text" class="form-control" id="data_compra" name="data_compra" placeholder="Digite a data de compra do livro" autocomplete="off" required>
        </div>
        
        <div class="form-group">
          <label>Preço do livro (R$) (Se não for comprado, digite *)</label>
          <input type="text" class="form-control" id="preco" name="preco" placeholder="Digite o preço do livro" autocomplete="off" required>
        </div>
       
        <div class="form-group">
          <label>Gênero(s) do livro</label>
          <input type="text" class="form-control" id="genero" name="genero" placeholder="Digite o(s) gênero(s) do livro" autocomplete="off" required>
        </div>
        
        <div class="form-group">
          <label>Nome do autor do livro</label>
          <input type="text" class="form-control" id="nome_autor" name="nome_autor" placeholder="Digite o nome do autor do livro" autocomplete="off" required>
        </div>
        
        <div class="form-group">
          <label>Editora do livro (Se não tiver, digite *)</label>
          <input type="text" class="form-control" id="editora" name="editora" placeholder="Digite a editora do livro" autocomplete="off" required>
        </div>
        
        <div class="form-group">
          <label>Em qual estante está o livro?</label>
          <input type="text" class="form-control" id="estante" name="estante" placeholder="Digite a estante onde está o livro" autocomplete="off" required>
        </div>
        
        <div class="form-group">
          <label>Em qual prateleira/linha está o livro?</label>
          <input type="text" class="form-control" id="prateleira_linha" name="prateleira_linha" placeholder="Digite a prateleira/linha onde está o livro" autocomplete="off" required>
        </div>
        
        <div class="form-group">
          <label>Em qual posição/ordem o livro está na prateleira?</label>
          <input type="text" class="form-control" id="posicao_ordem" name="posicao_ordem" placeholder="Digite a posição/ordem do livro na prateleira/linha" autocomplete="off" required>
        </div>

      <div style="text-align: right">
        <a href="index.php" role="button" class="btn btn-primary botao">Voltar</a>
        <button type="submit" id="botao" class="btn btn-primary botao">Cadastrar</button>
      </div>
    </form>
    </div>


  </body>
</html>