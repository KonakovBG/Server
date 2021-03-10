<?php

$column_names[] = ['Name' ,'Phone' ,'Email' ,'Message'];

$data_fp = fopen('data.csv', 'a');

if (filesize('data.csv') == 0) {
	foreach ($column_names as $names) {
		fputcsv($data_fp, $names);
	}
}			
foreach ($_POST as $data) {		
	fputcsv($data_fp, $data);			
}

fclose($data_fp);