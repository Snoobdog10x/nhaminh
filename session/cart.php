<?php
require_once("./Class/OrderItem.php");
session_start();

function get_Item($productID, $phoneCom, $phoneModel)
{
    foreach ($_SESSION['cart'] as $item) {
       if( $item->isOrderItem($productID,$phoneCom,$phoneModel)){
           return $item;
       }
    }
    return null;
}
if (!isset($_SESSION['cart'])) {

    $_SESSION['cart'] = array();
}

//update item
if (isset($_REQUEST['index']) && isset($_REQUEST['quantity'])) {
    $index = $_REQUEST['index'];
    $_SESSION['cart'][$index]->quantity = $_REQUEST['quantity'];
    if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }
}
//delete item
if (isset($_REQUEST['index']) && !isset($_REQUEST['quantity'])) {
    $index = $_REQUEST['index'];
    array_splice($_SESSION['cart'], $index, 1);
    if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }
}
//add cart
if (isset($_REQUEST['productID'])) {
    $productID = $_REQUEST['productID'];
    $phoneCom = $_REQUEST['phoneCom'];
    $phoneModel = $_REQUEST['phoneModel'];
    $price = $_REQUEST['price'];
    $item = get_Item($productID, $phoneCom, $phoneModel);
    if ($item == null) {
        $item = new OrderItem($productID, $phoneCom, $phoneModel, 1, $price);
        array_push($_SESSION['cart'], $item);
    } else {
        $item->quantity += 1;
    }
    if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }
}
