<?php

error_reporting( -1);

// Example
if ( is_session_started() === FALSE ) session_start();

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




function is_session_started()
{
    if ( php_sapi_name() !== 'cli' ) {
        if ( version_compare(phpversion(), '5.4.0', '>=') ) {
            return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
        } else {
            return session_id() === '' ? FALSE : TRUE;
        }
    }
    return FALSE;
}
?>
