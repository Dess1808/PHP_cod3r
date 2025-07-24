<div class="titulo">read files</div>

<?php

//fwrite
//$file = fopen('test.txt', 'w');
//fwrite($file, "one row in test");
//fclose($file);

//fread
$file = fopen('test.txt', 'r');
$filesize = filesize('test.txt');
$readed = fread($file, $filesize); //servidor apache não funciona direito???
echo $readed;
fclose($file);
 
echo PHP_EOL;

//while with fgets
$file = fopen('test.txt', 'r');
while(!feof($file)){
    echo fgets($file, filesize('test.txt')) . PHP_EOL . "<br>";
}

$file = fopen('test.txt', 'r');
while(!feof($file)){
    echo fgetc($file) . PHP_EOL . "<br>";
}

fclose($file);