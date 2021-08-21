<?php
require_once __DIR__ . '/vendor/autoload.php';

use Spatie\SimpleExcel\SimpleExcelReader;

$pathToCsv = __DIR__ . '/exemplo.csv';

// $rows is an instance of Illuminate\Support\LazyCollection
$read_csv = SimpleExcelReader::create($pathToCsv);
$rows = $read_csv->getRows();

$int = 0;

$rows->each(function(array $rowProperties) use (&$int)
{
    $int++;
    if(($int % 100000) == 0)
        print_r($rowProperties);
   // in the first pass $rowProperties will contain
   // ['email' => 'john@example.com', 'first_name' => 'john']
});