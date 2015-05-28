<?php
session_start() ;
 function autoLoader ($cName) {
     include( dirname(__FILE__)."/libs/".$cName. ".php");
 }
 spl_autoload_register("autoLoader");
     



//unset($_SESSION['cart']);
 
 if(!isset($_SESSION['cart'])){
     $_SESSION['cart'] = new Cart(0);
 }

$_SESSION['cart']->add(new Product(15, 1, 153, 'ebay','','bekini', 230));
$_SESSION['cart']->add(new Product(5, 1, 153, 'ebay', '', 'bycles', 123));

echo '<br> total:'.$_SESSION['cart']->getTotal();
echo '<pre>';
print_r($_SESSION['cart']);
echo '</pre>';

/*

unset($_SESSION['cart']);


$products = [
    [
        'ID' => 5,
        'cart_id' => 1,
        'unique_store_id' => 250,
        'store' => 'ebay',
        'img' => '',
        'title' => 'bekini',
        'price' => 432,
        'status' => ''
    ],
    [
        'ID' => 5,
        'cart_id' => 1,
        'unique_store_id' => 153,
        'store' => 'ebay',
        'img' => '',
        'title' => 'bycles',
        'price' => 123,
        'status' => ''
    ]
];

$_SESSION['cart'] = new Cart(0, new Address(0), $products);


echo '<br> total:'.$_SESSION['cart']->getTotal();
echo '<pre>';
print_r($_SESSION['cart']);
echo '</pre>';
*/
?>