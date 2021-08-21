<?php
$pathToCsv = __DIR__ . '/exemplo.csv';

$quantos_itens = 500;//Gera um csv com 500 linhas

$cabecalho_linha = "id,email,nome";

file_put_contents($pathToCsv, $cabecalho_linha.PHP_EOL);

/* *
//Vai estourar a memoria pois tenho um array gigante (devido ao 'range()')
foreach (range(1, $quantos_itens) as $int)
{
    $rand_num       = rand(($int +1), 100).$int;
    $itens_linha    = [
        $int,
        "email_fake_${rand_num}@mail.com",
        "algo de ". $rand_num,
    ];

    $linha = implode(",", $itens_linha).PHP_EOL;
    file_put_contents($pathToCsv, $linha, FILE_APPEND);
}
/**/

for ($int=0; $int < $quantos_itens; $int++)
{
    if(($int % 100000) == 0)
        echo $int."\n";

    $rand_num       = rand(($int +1), 100).$int;
    $itens_linha    = [
        $int,
        "email_fake_${rand_num}@mail.com",
        "algo de ". $rand_num,
    ];

    $linha = implode(",", $itens_linha).PHP_EOL;
    file_put_contents($pathToCsv, $linha, FILE_APPEND);
}

