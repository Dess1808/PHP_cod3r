<?php
//update values of start session
session_start();

//values change
$_SESSION['nome'] = 'Gabriel S martins';
$_SESSION['email'] = 'gabrielmartins@email.com';
print_r($_SESSION);
?>

<p>
    <b>Nome: <?=$_SESSION['nome'];?><br></b>
    <b>Email: <?=$_SESSION['email'];?></b>
</p>

<p>
    <a href="exercicio.php?dir=sessionCookie&file=sessionStart">To Back</a>
</p>