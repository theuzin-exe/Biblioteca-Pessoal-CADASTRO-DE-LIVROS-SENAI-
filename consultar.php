<html>
  <head>
    <meta charset="utf-8">
    <title>Biblioteca Pessoal (Cadastro dos Livros)</title>  
    <link rel="stylesheet" href="css/styleconsultar.css">
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

    <h4>Consultar algum livro no sistema</h4>


      <form action="localizar.php" method="post" style="margin-top: 20px">

        <div class="form-group">
          <label>Código do livro (Veja o código na listagem dos livros)</label>
          <input type="text" class="form-control" id="cod_livro" autocomplete="off" name="cod_livro" placeholder="Digite o código do livro" required>
        </div>

        <div style="text-align: right">
        <a href="index.php" role="button" class="btn btn-lg btn-info">Voltar</a>
        <button type="submit" id="botao" class="btn btn-lg btn-info">Consultar</button>
      </div>















      </body>
</html>