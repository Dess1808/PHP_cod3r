<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

<div class="titulo">Query DataBase</div>

<?php
ini_set('display_errors', 1);

require_once "connection.php";

$connection = newConnection('course_php');

//select from
$result = $connection->query("SELECT * FROM register;");

$allRegisters = [];

if ($result->num_rows > 0){
    //enquanto o fetch_assoc() retorna valor, sera verdade, senao, a rows da tabela terminaram
    while($row = $result->fetch_assoc()){
        $allRegisters[] = $row;
    }
} else {
    echo "Error: " . $connection->error . "<br>";
}

//print_r($allRegisters);
?>

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <td scope="col">Id</td>
            <td scope="col">Name</td>
            <td scope="col">Birth</td>
            <td scope="col">Email</td>
            <td scope="col">Site</td>
            <td scope="col">Children</td>
            <td scope="col">salary</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($allRegisters as $allRegister): ?>
            <tr>
                <td><?= $allRegister['id'] ?></td>
                <td><?= $allRegister['name'] ?></td>
                <td>
                    <?=
                        date('d/m/Y', strtotime($allRegister['birth']))
                    ?>
                </td>
                <td><?= $allRegister['email'] ?></td>
                <td><?= $allRegister['site'] ?></td>
                <td><?= $allRegister['children'] ?></td>
                <td><?= $allRegister['salary'] ?></td>
            </tr>    
        <?php endforeach?>
    </tbody>
</table>