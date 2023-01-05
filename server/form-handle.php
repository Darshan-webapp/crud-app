<?php
$product_name = $_POST['product_name'];
$price = $_POST['price'];
$qty = $_POST['qty'];

if(empty($product_name)) {
    echo "Please fill the product name!";
    die();
}

if(empty($price)){
    echo "please fill the price";
    die();
}
    if($price <=0 || $price >10000) {
        echo "price must be between 1-10000.";
        die();
    }

  if(empty($qty)){
    echo "please fill the qty";
    die();
  }  
    if($qty <=0 || $qty >10){
        echo "quantity must be between 1-10.";
        die();
    }

require_once('db.php');

$sql = "INSERT INTO `products` (`product_name`, `price`, `qty`) VALUES ('{$product_name}', '{$price}', '{$qty}')";
$query = mysqli_query($conn, $sql);

if($query) {
 echo "<script>alert('Data is saved')</script>";
}
else {
    echo "<script>alert(' Data could not be saved!')";
}
header("refresh:1;url=../index.php");

