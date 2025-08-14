<div class="titulo">DPO: Delete</div>

<?php
require_once "connectionPdo.php";

$con = newConnectionPdo();

$id = 78;

$stmt = $con->prepare("DELETE FROM register WHERE id = :id");
$stmt->bindValue(":id", $id, PDO::PARAM_INT);

if ($stmt->execute()){
    echo "Success, id Deleted";
} else {
    echo "Error: " . $stmt->errorInfo();
}

$con = null;