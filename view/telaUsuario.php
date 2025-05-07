    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/telaUsuario.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <title>Document</title>
    </head>
    <body>
        <div class="container"></div>
        <hr>
    <h1> Suas solicitções</h1>
    <hr> 
    <table class="table">
        <hr>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Setor</th>
            <th>Pedido</th>
        </tr>    

    <div>
    <?php
    require_once "../control/conexao.php";
    require_once "../control/login.php";
    require_once "index.php";

    $controller = new OrdemServicoController($db);
    $ordens = $controller->listaOrdens();




        


    foreach($ordens as $ordem){
        //eu usei esse metood de html pq os outros metodos nao davam certo e enchia essa merda de codigo de erro
        echo "<tr>
                        <td>" . htmlspecialchars($ordem['id']) . "</td>
                        <td>" . htmlspecialchars($ordem['nome']) . "</td>
                        <td>" . htmlspecialchars($ordem['email']) . "</td>
                        <td>" . htmlspecialchars($ordem['setor']) . "</td>
                        <td>" . htmlspecialchars($ordem['pedido']) . "</td>
                    </tr>";
    }

    ?>
    </div>
    </thead>
    </table> 
    </body>
    </html>