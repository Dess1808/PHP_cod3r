<div class="titulo">Desafio Palíndromo</div>

<!--
    Receber uma string e verificar se um palindromo
    utilizando for:
        basta comparar par a par
    utilizando função:
        podemos utlizar a função strrev(), com a string revertidda podemos comparar com a 
        original
-->

<p>Receber uma string e verificar se um palindromo</p>

<form action="#" method="POST">
    <input type="text" name="word">
    <button>Enviar</button>
</form>

<?php
if(isset($_POST['word'])){
    $palavra = $_POST['word'];
    $isPalindromo = true;

    //versão com For 
    //verificar logica desse problema!!!
    /*
    for ($i = 0, $size = strlen($palavra), $j = $size - 1; $i < ($size / 2); $i++, $j--){
        if ($palavra[$i] !== $palavra[$j])
            $isPalindromo = false;
    }
    */

    //versão com funções d php  
    $palavraRevertida = strrev($palavra);
    
    if ($palavraRevertida !== $palavra)
        $isPalindromo = false;


    //output
    if ($isPalindromo)
        echo "<p>A palavra $palavra é um Palpíndromo</p>";
    else 
        echo "<p>A palavra $palavra não és um Palpíndromo</p>";
}







