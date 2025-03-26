<div class="titulo">Desafio Sortei</div>

<style>
    [center]{
        display: flex;
        justify-content: center;
        font-size: 5rem;
    }
</style>

<?php
$princesas = ["Rapunzel", "Branca de Neve", "Elza", "Cinderela", "Aurora", "Pocahontas", "Ariel"];
$indice = array_rand($princesas);

echo "<div center>{$princesas[$indice]}</div>";

