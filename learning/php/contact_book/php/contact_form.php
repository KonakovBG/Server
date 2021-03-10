<?php

$array_data[] = [$_POST['fname'], $_POST['lname'], $_POST['phone'],$_POST['email']];

$column_names[] = ['First Name','Last Name','Phone','Email'];

$data_fp = fopen('../csv/data.csv', 'a');

if(filesize('../csv/data.csv') === 0){
	foreach ($column_names as $names) {
		fputcsv($data_fp, $names);
	}
}

foreach ($array_data as $data) {
	fputcsv($data_fp, $data);
}

fclose($data_fp);
