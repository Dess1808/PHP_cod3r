<div class="titulo">Session</div>

<?php
//session basic 

//inicialized session
session_start();

print_r($_SESSION);

//session verification
if (!$_SESSION['nome']){
    $_SESSION['nome'] = 'Gabriel';
}

if (!$_SESSION['email']){
    $_SESSION['email'] = 'gabriel@email.com';
}

print_r($_SESSION);
?>

<p>
    <a href="exercicio.php?dir=sessionCookie&file=sessionUpdate">Update</a>
</p>

<p>
    <a href="exercicio.php?dir=sessionCookie&file=sessionDestroy">To destroy session</a>
</p>
