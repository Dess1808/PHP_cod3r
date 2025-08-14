<div class="titulo">PDO: update</div>

<?php

require_once "connectionPdo.php";
$con = newConnectionPdo();

$stmt = $con->prepare("UPDATE register SET email = :email WHERE id = :id");
// $stmt->bindValue(":email", "gabrielmartins@gmail.com");
// $stmt->bindValue(":id", 72, PDO::PARAM_INT);

if ($stmt->execute([
    ':email' => 'vitoriasilva@gmail.com',
    ':id' => 69
])){
    echo "Update Success";
} else {
    echo "Error: " . $stmt->errorInfo();
}

$con = null;