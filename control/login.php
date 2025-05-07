        <?php 
        require_once "../model/dados.php";
        require_once "../control/conexao.php";
        include_once "index.php";


        session_start();

    function estaLogado() {
        return isset($_SESSION['usuario']);
    }

    function exigeLogin() {
        if (!estaLogado()) {
            header("Location: login.php");
            exit;
        }
    }


        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario = $_POST['usuario'] ?? '';
            $senha = $_POST['senha'] ?? '';
        
            $usuarios = [
                'cliente' => 'senha_cliente',
                'tecnico' => 'senha_tecnico'
            ];
        // eu queria diferenciar os niveis de usuario e tecnico,mas nao consegui
            if (isset($usuarios[$usuario]) && $usuarios[$usuario] === $senha) {
                $_SESSION['usuario'] = $usuario;
                header("Location: index.php");
                exit;
            } else {
                $mensagem = "Usuário ou senha incorretos.";
            }
        }
        
        // Se já estiver logado, redireciona para index e te chama de burro no processo
        if (isset($_SESSION['usuario'])) {
            header("Location: index.php");
            exit;
        }
    ?>


    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    </head>
    <body>
    <div class="login-container">
        <h2>Login</h2>
        <?php if ($mensagem): ?>
            <div class="alert alert-danger" role="alert"><?php echo htmlspecialchars($mensagem); ?></div>
        <?php endif; ?>

        <form method="POST" action="">
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuário</label>
                <input type="text" id="usuario" name="usuario" class="form-control" required />
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" id="senha" name="senha" class="form-control" required />
            </div>
            <button type="submit" class="btn btn-primary w-100">Entrar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    </body>
    </html>