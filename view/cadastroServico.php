
    <!doctype html>
      <html lang="pt-br">
      <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>Cadastro pra Serviço</title>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
      </head>
      <body>
      <hr> 
  <div class="container">
  <?php

  require_once "control/conexao.php";
  require_once "index.php" ;
  require_once "../control/login.php";

  ?>
  </div>
  <hr>
          <h1>Preencha o formulario</h1>
          <div class="container">
            <form action="index.php" method="POST">
            <div class="form-group">
              <label for="nome">Nome</label>
              <input type="text" class="form-control" name="nome" required>
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email" required>
              <label for="setor">Setor</label>
              <input type="text" class="form-control" name="setor" required>
              <label for="pedido">Pedido</label>
              <input type="text" class="form-control" name="pedido" required>
            </div>
            </form>
            <button type="submit" class="btn btn-primary">Criar Ordem de Serviço</button> 
          </div>      

          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>    
      </body>
      </html>