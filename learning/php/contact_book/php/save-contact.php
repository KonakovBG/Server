<?php 

$index = $_POST['index'];

$data_fp = fopen('../csv/data.csv', 'a+');

$data_array = [$_POST['fname'], $_POST['lname'], $_POST['phone'], $_POST['email']];

$counter = 0;

$data = [];

while (($data_row = fgetcsv($data_fp)) !== false) {

	if($counter == $index){
		$data[] = $data_array;
	} else {
		$data[] = $data_row;
	}
	$counter++;
}

fclose($data_fp);

$data_fp = fopen('../csv/data.csv', 'w+');

foreach ($data as $data_row) {
	fputcsv($data_fp, $data_row);
}

fclose($data_fp);





