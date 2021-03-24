<?php 
session_start();
if(isset($_SESSION['cart'])) {
    $chker=array_column($_SESSION['cart'], 'item_name');
    if(in_array($_GET['cart_name'], $chker)) {
        echo "<script>
            alert('Product is alread in the cart');
            window.location.href='product.php';
        </script>";
    }
    else {
        $count = count($_SESSION['cart']);
        $_SESSION['cart'][$count] = array('item_id'=>$_GET['cart_id'], 'item_name'=>$_GET['cart_name'], 'item_price'=>$_GET['cart_price']);
        echo "<script>
                alert('Product Added');
                window.location.href='product.php';
            </script>";
    }
} else {
    $_SESSION['cart'][0] = array('item_id'=>$_GET['cart_id'], 'item_name'=>$_GET['cart_name'], 'item_price'=>$_GET['cart_price']);

}
print_r($_SESSION['cart']);
?>