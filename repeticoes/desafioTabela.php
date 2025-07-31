<div class="titulo">Desafio Tabela</div>

<!--
construir um tabela de forma dinamica, utilizando o 
forech, pintar o texto das linhas impares
-->
<style>
    table{
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr{
        border: 1px solid #444;
    }

    table td{
        border: 1px solid #444;
        padding: 10px 20px;
    }

    [background]{
        background-color: lightblue;
    }

    [red]{
        color: red;
    }

    [green]{    
        color: green;
    }
</style>


<?php
$matriz = [
    ['01', '02', '03', '04', '05'],
    ['06', '07', '08', '09', '10'],
    ['11', '12', '13', '14', '15'],
    ['16', '17', '18', '19', '20'],
    ['21', '22', '23', '24', '25'],
    ['26', '27', '28', '29', '30']
];

?>

<h2>Matriz</h2>

<!--Primeiro exemplo-->
<table id="matriz">
    <?php foreach($matriz as $linha){?>
        <tr>
            <?php foreach($linha as $valor){?>
            <!-- gree pares, red impares-->
                <td <?php if ($valor % 2 === 0){echo "green";} else {echo "red";};?>>
                    <?php echo $valor; ?>
                </td> 
            <?php };?>
        </tr>
    <?php }; ?>
</table>

<br>

<!--Segunda exemplo-->
<table>
    <?php
        foreach($matriz as $index => $linhas){
            $background = ($index % 2) != 0 ? 'background' : '';
            echo "<tr {$background}>";
            foreach($linha as $valor){
                echo "<td> {$valor}</td>";
            }
            echo "</tr>";
        };
    ?>
</table>
