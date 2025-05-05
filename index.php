    <?php
    require_once "../control/conexao.php";
    require_once "../control/login.php";
    require_once "../control/OrdemServico.php";
    include "../view/index.php";

    exigeLogin();

    $controller = new OrdemServicoController($db);
    if(isset($_GET['action'])){
    $action =   $_GET['action'];
    if($action == 'excluir' && isset($_GET['id'])){
        $controller->deletaOrdem((int)$_GET['id']);
        header("Location: index.php");
        exit;
    }
    }
    $ordens = $controller->listaOrdens();


    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ajuda tecnica</title>
    </head>
    <body>
        
    </body>
    </html>