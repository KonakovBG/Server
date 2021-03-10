<?php

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

function getProductById($products, $product_id){
	foreach ($products as $product) {
		if ($product['id'] === $product_id){
			return($product);
		}
	}

	return null;
}

function getClientById($clients, $client_id){
	foreach ($clients as $client){
		if ($client['id'] === $client_id){
			return $client;
		}
	}

	return null;
}
function getOrderbyId($orders, $order_id) {
	foreach ($orders as $order) {
		if($order['id'] === $order_id){
			return $order;
		}
	}

	return null;
}

function getProductId($products , $product_id){
	return array_find($products, function($product) use ($product_id){
		return $product['id'] === $product_id;
	});

	// $filteredProducts = array_filter($products , function($product) use ($product_id){
	// 	return $product['id'] === $product_id;
	// });

	// return count($filteredProducts) > 0 $filteredProducts[0] : null;
}

function array_find($haystack, $callback) {
	$filtered = array_filter($haystack, $callback);
		
	return count($filtered) > 0 ? array_pop($filtered): null;
}

 var_dump(getProductId($products , 2));

