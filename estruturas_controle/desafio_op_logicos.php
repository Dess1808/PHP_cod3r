<div class="titulo">Desafio Operadores lógicos</div>

<!--
    Dois trabalhos 
		se os dois trabalhos executados -> tv 50 e sorvete
		se um dos dois trabalhos -> tv 30 e sorvete
		se nenhum dos dois -> ficar em causa mais saudável

        obs: input em formulario web
!-->

<p>
    Dois trabalhos 
        se os dois trabalhos executados -> tv 50 e sorvete
		se um dos dois trabalhos -> tv 30 e sorvete
		se nenhum dos dois -> ficar em causa mais saudável
</p>

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 1</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<?php
echo "<br>";


//verificando se estão setados
if (isset($_POST['t1']) && isset($_POST['t2'])){
    //valores bool
    $t1 = !!$_POST['t1'];
    $t2 = !!$_POST['t2'];

    //final test
    if ($t1 && $t2) {
        echo "Comprar TV'50 e tomar sorvete<br>";
    } elseif ($t1 != $t2) {
        echo "Comprar TV'32 e tomar sorvete<br>";
    } else {
        echo "ficar em casa e ficar saudavel mais triste sem um TV nova :(<br>";
    }
}




