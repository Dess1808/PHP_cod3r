<?php
session_start();

//session destroying
session_destroy();

//go back homepage? yes, in browses seted this path
header('location: exercicio.php?dir=sessionCookie&file=sessionStart');
?>

