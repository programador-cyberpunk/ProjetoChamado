    <?php
      require_once "control/conexao.php";
      require_once "view/cadastro.php" ;
      require_once "model/dados.php";
      require_once "control/login.php";

    echo "<p>sera que deu certo?</p>";
    
    ?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Alo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
<div class="container">
<form action="cadastro.php" method="post">
    <div class="row">
      <div class="col">
            <p><h1>Phantom System</h1></p>
      </div>
      <div>
        <h2> Digite suas informações abaixo</h2>
      </div>
      <div class="form-group">
        <label for="email" class="form-label">Email </label>
        <input type="email" class="form-control" name="email" required>
        </div>

        <div class="form-group">
        <label for="nome" class="form-label">Nome completo</label>
        <input type="nome" class="form-control" name="nome" required>
        </div>

        <div class="form-group">
        <label for="endereco" class="form-label">setor</label>
        <input type="endereco" class="form-control" name="endereco">

        <div class="form-group">
            <input type="submit" class="btn btn-success">
        </div>
        </div>
    </div>
</form>   
</div>
        <h1>Aguarde e confie</h1>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>    
    </body>
    </html>