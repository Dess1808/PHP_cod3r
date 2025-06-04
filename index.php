<?php
session_start();

//check cookie
if ($_COOKIE['user']){
    $_SESSION['user'] = $_COOKIE['user'];
}

//check user
if (!$_SESSION['user']){
    header('Location: login.php');
}



$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Dots&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">

    <title>Curso PHP</title>
</head>
    <body>
        <header class="cabecalho">
            <h1>Curso PHP</h1>
            <h2>Índice dos exerícios</h2>
        </header>
        <nav class="navegacao">
            <span class="username">User: <?= $user ?></span>
            <a href="logout.php" class="logout azul">Logout</a>
        </nav>
        <main class="principal">
            <div class="conteudo">
                <?php require_once('menu.php');?>
            </div>
        </main>
        <footer class="rodape">
            COD3R & ALUNOS © <?= date('Y');?>
        </footer>
    </body>
</html>