<?php
$workers = array(
	0 => array('name' => 'Angel', 'salary' => '2000','position' => 'web-developer','statring-date' => '2010-06-14 10:24:01','team' => 'Junior'),
	array('name' => 'dragan','salary' => '3000','position' => 'web-developer','statring-date' => '2015-05-13 09:24:01','team' => 'senior'),
	array('name' => 'svetlio','salary' => '4000','position' => 'php-developer','starting-date' => '2020-04-05 10:24:01','team' => 'senior'),
	array('name' => 'Gosho','salary' => '2000','position' => 'java-developer','starting-date' => '2020-03-06 05:24:01','team' => 'developer'),
	array('name' => 'Mariq','salary' => '3500','position' => '.net-developer','starting-date' => '2012-02-06 16:24:01','team' => 'developer'),
	array('name' => 'Boris','salary' => '3500','position' => '.net-developer','starting-date' => '2015-04-13 23:24:01','team' => 'Junior'),
	array('name' => 'Viktor','salary' => '6000','position' => 'java-developer','starting-date' => '2012-05-14 01:24:01','team' => 'Junior'),
	array('name' => 'Mladen','salary' => '900','position' => 'php-developer','starting-date' => '2008-05-15 12:24:01','team' => 'senior'),
	array('name' => 'Toni','salary' => '1000','position' => 'java-developer','starting-date' => '2007-12-27 13:24:01','team' => 'Junior'),
	array('name' => 'Qnica','salary' => '900','position' => 'java-developer','starting-date' => '2007-10-29 16:24:01','team' => 'developer')
);


	
	
//1 - GetEmployeenames(return all names)

/*Empployes by name*/
function GetEmployeesnames($input = []){

	$temp = [];

	for ($x = 0; $x < count($input); $x++) {
		$temp[] = $input[$x]['name'];
	}

	return $temp;
}

// var_dump(GetEmployeesnames($workers));	

//2 - Get Mix/Max salary

// function CompareMinsalary($a,$b){
// 	return $a['salary'] > $b['salary'];
// }
// function CompareMaxsalary($a,$b){
// 	return $a['salary'] < $b['salary'];
// }
// function Compareteams($a,$b){
// 	return strcmp($a["team"], $b["team"]);
// }

function getMinSalary($input = []){
	$minSalary = $input[0];

	for ($x = 0; $x < count($input); $x++) { 

		if($minSalary > $input[$x]['salary'])
		{
			$minSalary = $input[$x]['salary'];
		}
				
	}

	return $minSalary;
}

// var_dump(getMinSalary($workers));

function getMaxSalary($input = []){
	$maxSalary = 0;

	for ($x = 0; $x < count($input); $x++) { 
		if($maxSalary < $input[$x]['salary']){
			$maxSalary = $input[$x]['salary'];
		}
	}

	return $maxSalary;
}

// var_dump(getMaxSalary($workers));

//3 - Group by team/position


// var_dump(groupByPosition($workers));

function groupByTeam($employees = []){
	$temp = [];
	

	foreach ($employees as $employee){
		
		$position = $employee['position'];	
		
		if( ! isset($temp[$position])){
			$temp[$position] = [];
		}

		$temp[$position][] = $employee;
	}	

	var_dump($temp);
}

groupByTeam($workers); 	

// var_dump($temp);


// var_dump(groupByPosition($workers));
//4 - ...;

