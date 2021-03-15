<?php

require __DIR__ . '/../vendor/autoload.php';

$index = $_GET['var2'];

$data = file('../csv/data.csv');

$counter = 0;

array_splice($data, $index, 1);

$data_seperated = [];

function trimValue($input){
	return trim($input);
}

foreach ($data as $data_row) {
	$data_seperated[] = explode(",", $data_row);

	$counter++;
}

foreach ($data_seperated as $value) {
	foreach ($value as $temp) {
		array_map(trim($), $value);
	}
}

exit();
$writer = \League\Csv\Writer::createFromPath('../csv/data.csv', 'w+');

$writer->insertAll($data_seperated);

echo '<pre>';
var_dump($data_seperated);

exit();

header('Location: ../contacts.php');

