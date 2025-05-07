    <?php
    require_once "../control/conexao.php";
    require_once "../control/login.php";

    $controller = ordemServicoController($db);
    // EU NAO SEI PQ ESSE CARAIO TA DANDO ERRO, TENTEI DE TUDO NESSA MERDA

    $id = $_GET['id'] ?? null;
    $acao = $_GET['acao'] ?? null;
    $ordem = null;
    $mensagem = " ";

    if($acao == 'editar' && $id){
        $ordens = $controller->listarOrdens();
        foreach ($ordens as $o) {
            if($o['id'] == $id){
                $ordem = $o;
                break;
            }
        }
    }

    if($idForm){
    $controller->atualizaOrdem($idForm, $pedido);
    header("Location: index.php");
    exit;
    }else{
    $controller->criaOrdem($idForm, $pedido);
    header("Location: index.php");
    }

    ?>

    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title><?php echo $ordem ? 'Editar Ordem' : 'Nova Ordem'; ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    </head>
    <body>
    <div class="container form-container">
        <h1><?php echo $ordem ? 'Editar Ordem de Serviço' : 'Nova Ordem de Serviço'; ?></h1>
        <form method="POST" action="">
            <?php if ($ordem): ?>
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($ordem['id']); ?>" />
            <?php endif; ?>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" required value="<?php echo $ordem ? htmlspecialchars($ordem['nome']) : ''; ?>" <?php echo $ordem ? 'readonly' : ''; ?>/>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" required value="<?php echo $ordem ? htmlspecialchars($ordem['email']) : ''; ?>" <?php echo $ordem ? 'readonly' : ''; ?>/>
            </div>
            <div class="mb-3">
                <label for="setor" class="form-label">Setor</label>
                <input type="text" name="setor" id="setor" class="form-control" required value="<?php echo $ordem ? htmlspecialchars($ordem['setor']) : ''; ?>" <?php echo $ordem ? 'readonly' : ''; ?>/>
            </div>
            <div class="mb-3">
                <label for="pedido" class="form-label">Pedido</label>
                <textarea name="pedido" id="pedido" class="form-control" required><?php echo $ordem ? htmlspecialchars($ordem['pedido']) : ''; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary"><?php echo $ordem ? 'Atualizar' : 'Criar'; ?></button>
            <a href="index.php" class="btn btn-secondary ms-2">Voltar</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    </body>
    </html>