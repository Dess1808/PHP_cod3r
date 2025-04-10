<?php

$word = trim(fgets(STDIN));

/*
for ($i = 0, $size = strlen($word), $j = $size - 1; $i < $size / 2; $i++, $j--){
    if ($word[$i] !== $word[$j]){
        $isPalindromo = false;
        break;
    }
}
*/

$palavraRevertida = strrev($word);

if ($palavraRevertida !== $word)
    echo var_dump(false);
else 
    echo var_dump(true);

    
