<div class="titulo">Desafio Tabela 2</div>

<!--
    receber numero de linhas e colunas por um formulario submetido
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


    [inputs]{
        display: flex;
        align-items: center;
        margin-bottom: 10px;
        padding-right: 10px;
    }  
    
    label{
        padding-right: 10px;
    }


</style>

<p>Informe o número de linhas e colunas que deseja </p>

<form action="#" method="POST">
    <div inputs>
        <label for="row">linhas</label>
<!-- trabalhar mais com valores padrão em formulario-->
        <input type="number" value=<?= $_POST['row'] ?? 5?> name="row" id="row"> 
    </div>  
    <div inputs>
        <label for="column">colunas</label>
        <input type="number" value=<?= $_POST['column'] ?? 5?> name="column" id="column">
    </div>
    <button>Gerar tabela</button>
</form>

<table>
    <?php
        if (isset($_POST['row'])){
            $row = (int) $_POST['row'];
            $column = (int) $_POST['column'];

            for ($i = 0; $i < $row; $i++){
                echo "<tr>";
                for ($j = 0; $j < $column; $j++){
                    echo "<td></td>";
                }
                echo "</tr>";
            }
        }
    ?>
</table>