<div class="titulo">O básico de Try/Catch</div>

<?php
/*   
    se caso for identificado um "codigo perigoso", que 
    pode gerar um erro ou exceção, deve-se colocar dentro de um bloco try/Catch, 
    creio que seja isso.

    colocar o erros mais genéricos por ultimo, 
    mais específicos em primeiro.
*/

try {
    intdiv(7, 0);
} catch(Error $e){
    echo "erro aqui" . PHP_EOL;
}

try {
    //gerenando um instancia exception
    //throw new exception("uma exceção gerada");
    echo intdiv(7, 0);
} catch(DivisionByZeroError $e) { 
    echo "Divisão por zero" . PHP_EOL;
} catch(Exception $e) { 
    echo "exceção encontrada" . PHP_EOL;
} catch(Throwbale $e) {
    echo "erro mais generico";
} finally {
    echo "sempre executado" . PHP_EOL;
}