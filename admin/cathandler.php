<?php 
include("../partials/connect.php");
$name = $_POST["name"];

$sql = "INSERT INTO categories(name) VALUES('$name')";
$connect->query($sql);
header('location: productsshow.php');
?>