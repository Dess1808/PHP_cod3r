<div class="titulo">fwrite</div>

<?php

//'w'
$file = fopen('test.txt', 'w');
fwrite($file, "file's string\n");
fwrite($file, "second row\n");
fclose($file);

//'a'

$file = fopen('test.txt', 'a');
fwrite($file, "third line");
fclose($file);

//'x'
//file exits
$file = fopen('test.txt', 'x');
fwrite($file, "four line");
fclose($file);