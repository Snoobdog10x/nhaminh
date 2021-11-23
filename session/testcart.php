<?php
session_start();
var_dump($_SESSION['cart']);
?>
<form method="GET" action="cart.php">
    <input type="hidden" name="productID" value="id" id="">
    <input type="hidden" name="phoneCom" value="samsung" id="">
    <input type="hidden" name="phoneModel" value="j6" id="">
    <input type="hidden" name="price" value="500" id="">
    <button type="submit"> add</button>
</form>
<button onclick="location.href = 'cart.php?index=0&&quantity=100';">update</button>
<button onclick="location.href = 'cart.php?index=0';">delete</button>