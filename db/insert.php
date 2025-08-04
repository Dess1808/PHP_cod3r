<div class="titulo">Insert datas</div>

<?php
ini_set('display_errors', 1);

require_once "connection.php";

//insert values
$connection = newConnection('course_php');

// $result = $connection->query("
//     INSERT INTO register(name, birth, email, site, children, salary) VALUES(
//         'Alexandre Souza Martins',
//         '2000-02-27',
//         'alexandre@email.com',
//         'https://alexandre.com',
//         2,
//         1500.00
//     );
// ");

if ($result){
    echo "Sucess query" . "<br>";
} else {
    echo "Error?: " . $connection->error;
}

$connection->close();