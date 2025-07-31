<?php
date_default_timezone_set('America/Manaus');

//date for formatt

//date
echo date('D, d \d\e m \d\e Y H:i a') . PHP_EOL . "<br>";

//strtotime
echo date('D, d \d\e m \d\e Y H:i a', strtotime('+10 year')) . PHP_EOL . "<br>";

