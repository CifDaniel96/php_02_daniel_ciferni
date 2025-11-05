<?php


$numbers = [15, 80, 36, 47, 58, 66, 79, 2];

$counter = 0;
$total = 0;


foreach ($numbers as $number){
if ($number % 2 == 0){
    $total += $number;
    $counter++;
}}

$media = $total/$counter;

var_dump('La media è' . " " . $media);