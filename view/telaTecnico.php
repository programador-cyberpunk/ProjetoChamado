        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Ordens de Serviço</title>
            <link href="../css/telaTecnico.css" rel="stylesheet">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        </head>
        <body>
        <hr>

        <div class="search-bar">
        <input type="text" placeholder="Digite aqui seu código de chamado" />
        </div>
        <hr>

        <div class="header">
        <div class="header-item">ID</div> 
        <div class="header-item">Cliente</div> 
        <div class="header-item">Descricão</div> 
        <div class="header-item">Status</div>
        <hr>
        
        </div>
        <h1>Novo Chamado</h1>
        <hr>
        <div class="content">
        <div class="row">
            <div class="item">Recebidos</div>
            <div class="item">Concluidos</div>
            <div class="item">Em avalliação</div>
            <div class="item">Protocolos</div>
        </div> 
        <hr>

        <div class="buttons">
            <button>Inserir</button>
            <button>Alterar</button>
            <button>Excluir</button>
        </div>
        </div> 
        </body>
        </html>

        <?php
        require_once "../control/conexao.php";
        require_once "../view/cadastro.php" ;
        require_once "../model/dados.php";
        require_once "../control/login.php";
        require_once "../control/OrdemServicoController.php";;

        $controller = new OrdemServicoController($db);
        $ordens = $controller->listaOrdens();

        foreach ($ordens as $ordem){
            echo "<tr>
            <td>{'$ordem[id]}</td>
            <td>{'$ordem[nome]}</td>
            <td>{'$ordem[email]}</td>
            <td>{'$ordem[setor]}</td>

            <td>
                <a href='index.php?action=editar&id={$ordem['id']}' class='btn btn-warning'>Editar</a>
                <a href='index.php?action=excluir&id={$ordem['id']}' class='btn btn-danger'>Excluir</a>
            </td>
            </tr>";
        }


        ?>


        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <title>Ordens de Serviço</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
        </head>
        <body>
        <div class="container">
            <h1>Ordens de Serviço</h1>
            <hr>
            <h2>Recebidos:</h2>
            <hr>
            <a href="formulario.php" class="btn btn-success mb-3">Nova Ordem</a>
            <div class="table-responsive">
            <table class="table table-striped table-bordered align-middle">
                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Setor</th>
                        <th>Pedido</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                <?php if (count($ordens) > 0): ?>
                    <?php foreach ($ordens as $ordem): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($ordem['id']); ?></td>
                            <td><?php echo htmlspecialchars($ordem['nome']); ?></td>
                            <td><?php echo htmlspecialchars($ordem['email']); ?></td>
                            <td><?php echo htmlspecialchars($ordem['setor']); ?></td>
                            <td><?php echo htmlspecialchars($ordem['pedido']); ?></td>
                            <td>
                                <a href="formulario.php?action=editar&id=<?php echo $ordem['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                                <a href="index.php?action=excluir&id=<?php echo $ordem['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Confirmar exclusão desta ordem?');">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center">Nenhuma ordem de serviço encontrada.</td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>