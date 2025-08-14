<div class="titulo">PDO: Insert</div>

<?php

require_once "connectionPdo.php";

$con = newConnectionPdo();

$result = $con->exec("INSERT INTO register(
    name, birth, email, site, children, salary) VALUES (
        'Teste da Silva Junior',
        '1998-08-24',
        'teste@gmail.com',
        'https://www.teste.com.br',
        5,
        5000.09 
    ); 
");


if ($result){
    echo "Success, register id = " . $con->lastInsertId();
} else {
    echo "Error: " . $con->errorInfo();
}


