<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Dots&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/exercicio.css">

    <title>Exercícios</title>
</head>
    <body class="exercicio">
        <header class="cabecalho">
            <h1>Curso PHP</h1>
        </header>
        <nav class="navegacao">
            <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php"; ?> class="verde">sem formatação</a>
            <a href="index.php" class="vermelho">voltar</a>
        </nav>
        <main class="principal">
            <div class="conteudo">
                <?php
                    //carregando caminho pela url do navegador, utilizando os parementros do mesmo
                    include("{$_GET['dir']}/{$_GET['file']}.php"); 
                 ?>
            </div>
        </main>
        <footer class="rodape">
            COD3R & ALUNOS © <?= date('Y');?>
        </footer>
    </body>
</html>