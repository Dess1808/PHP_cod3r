<div class="titulo">Erros Personalizados</div>

<?php
//podemos criar e personalizar tratamentos de erros extendendo a classe Exception
//utilizar exception e uma indicação ao sistema que estamos lançando exceções, para nos 
//visualmente não altera nada


class FaixaEtariaException extends Exception {
    public function __construct($message, $code = 0, $previous = null){
        parent::__construct($message, $code, $previous);
    }
}

function calcularTempoAposentadoria($idade){
    if ($idade < 18){
        //lançando a minha exceção personalizada, com o nome personalizado, pos 
        //o processo de lançar exceção e exatamente a mesma que utilizar o exception
        throw new FaixaEtariaException("muito longe");
    }

    if ($idade > 70){
        throw new FaixaEtariaException("ja deveria esta aposentado");
    }

    return 70 - $idade;
}


//testes
$idades = [15, 23, 86, 45];

foreach($idades as $idade){
    try {
        //todo o processo de captura de exceções e feito dentro do try/catch
        $idadeVerificada = calcularTempoAposentadoria($idade);
        //sucesso 
        echo "com $idade, falta $idadeVerificada para se aposentar" . PHP_EOL;
    } catch(FaixaEtariaException $e){
        echo "$idade, " . $e->getMessage() . PHP_EOL;   
    }
}

