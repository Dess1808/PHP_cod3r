<div class="titulo">Session Manager</div>

<?php
//session sharer with only id - danger!!
//session_id('3hqk6l6bt0ftj3k5cvuk2f2mnt');
session_start();

echo session_id() . "<br>";

//contador de sessão
//memory adress 
$count = &$_SESSION['count'];
$count = $count ? $count += 1: 1;
echo $_SESSION['count'] . "<br>";

print_r($_SESSION);

//regeneration id 
if ($count % 5 === 0){
    session_regenerate_id();
}

//reset count, destroy session 
if ($count >= 15){
    session_destroy();
}




