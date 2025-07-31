<?php
session_start();

if ((isset($_POST['email']) && isset($_POST['password']))){
    $email = $_POST['email'];
    $password = $_POST['password'];

    //little users data base
    $users = [
        [
            "name" => "Gabriel Souza Martins",
            "email" => "gabriel@email.com",
            "password" => "1234",
        ],
        [
            "name" => "Gercina Souza Martins",
            "email" => "gercina@email.com",
            "password" => "3214",
        ]
    ];

    //user verification
    foreach($users as $user){
        $emailChecked = $email === $user['email'];
        $passwordChecked = $password === $user['password'];

        var_dump($emailChecked);
        var_dump($passwordChecked);

        //real validation
        if($emailChecked && $passwordChecked){
            //reset errors
            $_SESSION['errors'] = null;
            $_SESSION['user'] = $user['name'];

            //creating cookie with expiration date
            $exp = time() + 60 * 60 * 24 * 30; //one month
            setcookie('user', $user['name'], $exp);

            header("Location: index.php");
            break;
        }
    }

    //user error
    if (!isset($_SESSION['user'])) {
        $_SESSION['errors'] = ["User/password invalidate"];
    }
}
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
    <link rel="stylesheet" href="./css/loginStyle.css">
 
    <title>Curso PHP</title>
</head>
    <body class="login">
        <header class="cabecalho">
            <h1>Curso PHP</h1>
            <h2>Seja Bem-Vindo</h2>
        </header>
        <main class="principal">
            <div class="conteudo">
                <h3>Indetify yourself</h3>
                <?php if(isset($_SESSION['errors'])):?>
                    <div class="errors">
                        <?php foreach($_SESSION['errors'] as $error):?>
                            <p><?= $error ?></p>
                        <?php endforeach;?>
                    </div>
                <?php endif;?>
                
                <form class="form" method="POST">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email">

                        <label for="password">password</label>
                        <input type="password" name="password" id="password">  
                    <button>Sign in</button>
                </form>
            </div>
        </main>
        <footer class="rodape">
            COD3R & ALUNOS © <?= date('Y');?>
        </footer>
    </body>
</html>