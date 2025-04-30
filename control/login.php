    <?php 
    require_once "../model/dados.php";
    require_once "../control/conexao.php";
    include_once "index.php";

    session_start();
        if(isset($_SESSION['usuario'])){
            header("Location: index.php");
            exit();
        }

        $mensagem = "Vc conseguiu logar,parabens seu mongol";
        $usuarios = $usuario. $tecnico1;
        $senhas = $senha1 . $senha2;  

        ////aqui eu verifico as credenciais do viad digo usuario
        //mas eu nao sei exatamente como eu distinguo o tecnico do usuario burr quer dizer normal
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $usuarios = ['usuario' => 'senhaburro','tecnico' => 'senhaboa'];
        $usuario = $_POST['usuario1'];
        $senha1 = $_POST['senhaburro'];
        $tecnico1 = $_POST['usuario1'];
        $senha2 = $_POST['senhaboa'];
        }
        //////////////////////agora eu vejo se ta tudo certinho//////////////////
    if(isset($usuarios[$usuario || $tenico1] && $usuarios[$usuario || $tecnico1] === $senhas)){
        $_SESSION['usuario'] = $usuarios;
        header("Location: index.php");
        exit();
    }else {
        $mensagem = "Deu ruim, algo foi invalidado";
    }
    ?>    


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="">
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" required>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" required>
        <br>
        <button type="submit">Entrar</button>
    </form>
    <?php if ($mensagem): ?>
        <p style="color: red;"><?php echo $mensagem; ?></p>
    <?php endif; ?>
</body>
</html>