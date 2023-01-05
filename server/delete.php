<?php
require_once('db.php');
$id = $_GET['id'];

$sql = "DELETE FROM `products` WHERE id={$id}";
$query = mysqli_query($conn, $sql);

if($query) {
    echo "<script>alert('Deleted!');</script>";
}
else {
    echo "<script>alert('Failed to delete!');</script>";
}
header("refresh:1;url=../manage.php");
?>