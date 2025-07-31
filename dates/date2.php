<?php

//format with dateTime()
$dateFormat = 'd/m/y H:i:s';
$now = new DateTime();
echo $now->format($dateFormat) . PHP_EOL;

//+1 day format 
$date = new DateTime(   '+1 day');
echo date($dateFormat, $date->getTimestamp());

echo PHP_EOL;

//condition with dates
$yesterday = new DateTime('-1 day');
$today = new DateTime();
$tomorrow = new DateTime('+1 day');

echo $yesterday > $tomorrow ? 'yesterday to bigger' : 'yesterday to less' . PHP_EOL;
echo $today < $yesterday ? 'today to less' : 'today to bigger' . PHP_EOL;

//timezone 
$timeZone = new DateTimeZone('America/Sao_Paulo');
$dateNow = new DateTime('now', $timeZone);
echo $dateNow->format($dateFormat) . PHP_EOL;
