<?php

require __DIR__ . '/../vendor/autoload.php';

$error = [];
$contact_info = [];

function test_input($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

$rules = [
	'fname' => 'required',
	'lname' => 'required',
	'phone' => 'requiredPhone',
	'email' => 'email',
];

foreach ($_POST as $name => $value) {
	$rule = $rules[$name];

	if ($rule == 'required') {
		if (empty($value)) {
			
			header('Location: ../contacts.php');

			exit;
		} else {			
			test_input($value);

 			$contact_info[] = trim($value);
		}
	} else if ($rule == 'email') {
		if (empty($value) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
			header('Location: ../contacts.php');

			exit;
		} else {
			$contact_info[] = trim($value);
		}
	} else if($rule == 'requiredPhone'){
		if (empty($value) || strlen($value) != 10){
			header('Location: ../contacts.php');

			exit;
		} else{
			$contact_info[] = trim($value);
		}

	}
}

$column_names = ['First Name', 'Last Name', 'Phone', 'Email'];

$writer = \League\Csv\Writer::createFromPath('../csv/data.csv', 'a');

$writer->insertOne($contact_info);

// if (filesize('../csv/data.csv') === 0) {
// 	$writer->insertOne($column_names);
// }

// $writer->insertOne($contact_info);

header('Location: ../contacts.php');



