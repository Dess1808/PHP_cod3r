<div class="titulo">DPO: Search</div>

<?php

require_once "connectionPdo.php";

$con = newConnectionPdo();

//com o query padrao
$result = $con->query("SELECT * FROM register;")->fetchAll(PDO::FETCH_ASSOC);
print_r($result);

echo "<hr>";

//bind com bindValue() por causa do PDO
$stmt = $con->prepare("SELECT * FROM register LIMIT :amout OFFSET :start");
$stmt->bindValue(":amout", 4, PDO::PARAM_INT);
$stmt->bindValue(":start", 5, PDO::PARAM_INT);

if ($stmt->execute()){
    print_r($stmt->fetchAll(PDO::FETCH_ASSOC));
} else {
    echo "Error: " . $stmt->errorInfo();
}

echo "<hr>";

//"bind" direto no execute()
$stmt= $con->prepare("SELECT * FROM register WHERE id = :id");

//others
/*
    $stmt->bindValue(':id', 71);
    $stmt->execute([71])
*/

if ($stmt->execute([':id' => 71])){
    print_r($stmt->fetch(PDO::FETCH_ASSOC));
} else {
    echo "Error: " . $stmt->errorInfo();
}

//close connection
$con = null;