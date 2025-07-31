<div class="titulo">$_POST</div>

<form action="#" method="POST">
    <input type="text" name="nome">
    <input type="text" name="sobrenome">
    <select name="estado">
        <option value="AM">Manaus</option>
        <option value="AC">Acre</option>
    </select>
    <button>Enviar</button>
</form>

<?php
//visualiando array post
print_r($_POST);

echo "<br>";

//contando array post
echo count($_POST);