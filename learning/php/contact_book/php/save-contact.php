<?php 

require __DIR__ . '/../vendor/autoload.php';

$index = $_POST['index'];

$contact_info = [$_POST['fname'], $_POST['lname'], $_POST['phone'], $_POST['email']];

$counter = 0;

$data = [];

$reader = \League\Csv\Reader::createFromPath('../csv/data.csv', 'r');

$records = $reader->getRecords();

foreach ($records as $record) {
	if ($counter == $index ) {
		$data[] = $contact_info;
	} else {
		$data[] = $record;
	}

	$counter++;
}

$writer = \League\Csv\Writer::createFromPath('../csv/data.csv', 'w+');

$writer->insertAll($data);

header("Location: ../contacts.php",TRUE,301);










