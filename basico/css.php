<div class="titulo">Integração com HTML</div>

<h1 center azul>
    <?php
    echo 'Olá ';
    echo '<small>';
    echo 'Mundo!';
    echo '<small>';
    ?>
</h1>

<?= "<div center> Outra forma de imprimir! </div>"; ?>

<br>

<div center azul><button dobro> <?="aperte"?> </button></div>

<style>
    button{
        /*utilizando codigo php em css*/
        padding: 5px <?= 2 * 10 ?>px; 
        background-color: #4286f4;
        color: #EEE;
        font-weight: bold;
        border-radius: 10px;
    }

    [center]{
        display: flex;
        justify-content: center;
    }

    [azul]{
        color: #4286f4;
    }

    [dobro]{
        font-size: <?= 10 * 1 ?>rem;
    }
</style>