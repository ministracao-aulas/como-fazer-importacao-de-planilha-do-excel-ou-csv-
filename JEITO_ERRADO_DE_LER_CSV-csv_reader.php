<?php

$csv = __DIR__ . '/exemplo.csv';

$conteudo = file_get_contents($csv);
$array = explode(",",$conteudo);

foreach ($array as $k => $a)
{
    if(($k % 100000) == 0)
        print_r($a);
}