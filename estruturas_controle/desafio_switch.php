<div class="titulo">Desafio Switch</div>

<!--
    converter unidade de comprimentos
    km -> milha (milhas * 0.621371))
    milha -> km (milhas * 1.60934)
    metro -> km (metro / 1000)
    km -> metro (km * 1000);
    F -> C = (F-32)/1,8
    C -> F = 1,8 x °C + 32
!-->

<form action="#" method="post">
    <input type="text" name="valorUnidade">
    <select name="conversao" id="conversao">
        <option value="km-milha">km -> milha</option>
        <option value="milha-km">milha -> km</option>
        <option value="metro-km">metro -> km</option>
        <option value="km-metro">km -> metro</option>
        <option value="celsius-fah">Celsius > Fahrenheit</option>
        <option value="fah-celsius">Fahrenheit > Celsion</option>
    </select>
    <button>Converter</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }

    form{
        padding-top: 20px;
    }
</style>

<?php
//control constantes
//algum detalhe de constantes que estou perdendo, possivelmente seja pela estrutura condicional
//constantes precisam esta sempre muito bem definidas
const FATOR_MILHA_KM = 1.60934;
const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM_KM_METRO = 1000;


if (isset($_POST['valorUnidade'])){
    //converter para inteiro o valor de "valor Unidade"
    $valorUnidade = (int) $_POST['valorUnidade'];
    $conversao = $_POST['conversao'];
    $menssagemSucesso;
    $menssagemAlerta = "Nenhum valor foi inserido";
    $calculo;

    if ($valorUnidade >= 0) {
        switch($conversao){
            case "km-milha":
                $calculo = FATOR_KM_MILHA * $valorUnidade;
                $menssagemSucesso = "$valorUnidade Km(s) = $calculo Milha(s)<br";
                break;
            case "milha-km":
                $calculo = FATOR_MILHA_KM * $valorUnidade;
                $menssagemSucesso = "$valorUnidade Km(s) = $calculo Km(s)<br";
                break;
            case "metro-km":
                $calculo = FATOR_METRO_KM_KM_METRO * $valorUnidade;
                $menssagemSucesso = "$valorUnidade Km(s) = $calculo km(s)<br";
                break;
            case "km-metro":
                $calculo = FATOR_METRO_KM_KM_METRO * $valorUnidade;
                $menssagemSucesso = "$valorUnidade Km(s) = $calculo Metro(s)<br";
                break;
            case "celsius-fah":
                //F -> C = (F-32)/1,8
                $calculo = ($valorUnidade * (9/5)) + 32;
                $menssagemSucesso = "{$valorUnidade}º Celsuis = {$calculo}º Fahrenheit<br";
                break;
            case "fah-celsius":
                //1,8 x °C + 32
                $calculo = ($valorUnidade - 32) / (9/5);
                $menssagemSucesso = "{$valorUnidade}º Fahrenheit = {$calculo}º Celsius<br";
            default:
                $menssagemAlerta = "Nenhum valor foi inserido";
        }

        echo "<p>$menssagemSucesso</p>";
    } else 
        echo "<p>$menssagemAlerta<br></p>";
} 