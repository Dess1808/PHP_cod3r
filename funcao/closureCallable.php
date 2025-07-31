<div class="titulo">Closure & Callable</div>

<?php
/**
 * Toda varivel que recebe um função anonima é uma 'callable' (passivel de ser chamada) 
 * além de ser um 'closure' (uma estrura de classe), tudo isso e feito internamente pelo 
 * php, um detalhe é que nem todo closure pode ser um callable, ou seja, um função pura e somente um 
 * callable, e uma variavel que recebeu uma função, sim, ela uma callable e um closure.
 *  */ 

 //callable & Closure
 $soma = function($a, $b){
    return $a + $b;
 };

 echo $soma(1, 2);
 echo PHP_EOL;

 //callable somente
 function outraSoma($a, $b){
    return $a + $b;
 }

 echo outraSoma(1, 2);
 echo PHP_EOL;