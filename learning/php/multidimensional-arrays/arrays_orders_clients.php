<?php
$products = [
	[
		'id' => 1,
		'name'  => 'Laptop',
		'price' => 300,
	],

	[
		'id'  => 2,
		'name' => 'Shkaf',
		'price' => 200
	]
];

$filteredProducts = array_filter( $products, function ($product) {
	return $product['price'] < 250;
} );
var_dump($filteredProducts);
exit;

$customers = [

	1 => [
		'name' => 'John Doe',
	]
];

$orders = [
	1 => [
		'customer_id' => 1,
		'products' => [ 1, 2 ]
	]
];

function getProductsById($products, $ids) {
	// if ( isset( $products[ $theProductId ] ) ) {
	// 	return $products[$theProductId];
	// }

	// return null;
	$theProducts = [];
	foreach ($products as $product) {
		if (array_search($product['id'], $ids) !== false) {

			$theProducts[] = $product;
		}
	}

	return $products;

}

$products = getProductsById($products, [ 1, 2 ]);

var_dump($products);
exit;

echo $orders[1]['customer_id'];
echo $customers[1]['name'];
echo $customers[ $orders[1]['customer_id'] ]['name'];

exit;




$products = [
	[
		'id' => 4, 'name' => 'Laptop','price' => 300, 
	],
	[
		'id' => 5, 'name' => 'Shkaf','price' => 200, 
	],
	[
		'id' => 2, 'name' => 'Stol','price' => 200, 
	],
	[
		'id' => 1, 'name' => 'Ochila', 'price' => 700, 
	],
	[
		'id' => 3, 'name' => 'Masa','price' => 500, 
	]
];

$clients = [
	[
		'id' => 1, 'name' => 'Petran',
	],
	[
		'id' => 2, 'name' => 'Dragan',
	],
	[
		'id' => 3, 'name' => 'Svetlio',
	],
	[
		'id' => 4, 'name' => 'Gosho',
	],
	[
		'id' => 5, 'name' => 'Mariq',
	],
	[
		'id' => 6, 'name' => 'Mladen',
	]
];

$orders = [
	[
		'id' => 1, 'client_id' => 1, 'products' => [1,4,2,3]		
	],
	[
		'id' => 2, 'client_id' => 2, 'products' => [2,3]
	],
	[
		'id' => 3, 'client_id' => 3, 'products' => []
	],
	[
		'id' => 4, 'client_id' => 4, 'products' => [2]
	],
	[
		'id' => 5, 'client_id' => 5, 'products' => [1,4]
	],
	
];

for ( $x = 0; $x < count($products); $x++ ) { 
	if($x == 2){
		// var_dump($products[$x]['name']);
		
		break;
	}
}



// 	$filteredProducts = array_filter($products, function ($product) use ($theProductId) {
// 		return $product['id'] === $theProductId;
// 	});

// 	if (count($filteredProducts) === 0) {
// 		return null;
// 	}

// 	return array_values($filteredProducts)[0];
// }

// function array_filter( $arr, $callback ) {
// 	$filteredValues = [];

// 	foreach ($arr as $value) {
// 		$r = $callback($value);

// 		if ($r) {
// 			$filteredProducts[] = $value;
// 		}
// 	} 

// 	return $filteredValues;
// }

// function odd($number) {
// 	return $number % 2 === 0;
// }

// $result = array_filter( [ 1, 2, 3,4, 5 ], 'odd' );

// function getClientById($clients, $theClientId) {
// 	$filteredClients = array_filter($clients, function ($client) use ($theClientId) {
// 		echo
// 		return $client === $theClientId;
// 	});

// 	if (count($filteredClients) === 0) {
// 		return null;
// 	}
// 	return array_values($filteredClients)[0];
// }

// if (is_null(getProductById($products, 3))) {
// 	// echo "There is no product with that id";	
// } else {
// 	// echo 'The name of the product with id ' . 3 . ' is ' . getProductById($products, 3)['name'];
// }	

// // for ($x = 0; $x < count($orders); $x++) { 
// // 	if($orders[$x]['products'] === $products[$x]['id']){
// // 		echo "asd";
// // 	}
// // }


// foreach ( $orders as $order ) {
// 	$clientId = $order['client_id'];

// 	$client = getClientById($clients, $clientId);

// 	echo 'The Client name for order with ID ' . $order['id'] . ' is ' . $client['name'] . '<BR/>';

// 	// var_dump($order['id']);
// }

// exit;


