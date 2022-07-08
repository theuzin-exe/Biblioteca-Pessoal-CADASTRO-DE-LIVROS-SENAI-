<html>
  <head>
    <meta charset="utf-8">
    <title>Biblioteca Pessoal (Cadastro de Livros)</title>  
    <link rel="stylesheet" href="css/styleindex.css">
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



    <div class="container" id="tamanhoContainer" style="margin-top: 180px">

    <div class="row">
  
    <div style="text-align: center"class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Adicionar livro</h5>
        <p class="card-text">Cadastrar um novo livro no sistema</p>
        <a href="cadastro.php" class="btn btn-primary">Adicionar</a>
      
      </div>
    </div>
  </div>
  
  <div style="text-align: center" class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Listar livros</h5>
        <p class="card-text">Listar todos os livros cadastrados no sistema</p>
        <a href="listar.php" class="btn btn-primary">Listar</a>
      
      </div>
    </div>
  </div>
  
  
  <div style="text-align: center"class="col-sm-6">
    <div class="card" >
      <div class="card-body">
        <h5 class="card-title">Consultar livro</h5>
        <p class="card-text">Consulte qualquer livro no sistema</p>
        <a href="consultar.php" class="btn btn-primary">Consultar</a>
</div>
</div>

    </div>

    
  </body>
 
  </html>