<?php 
include("../partials/connect.php");
$name = $_POST["name"];
$price = $_POST["price"];
$description = $_POST["description"];
$category = $_POST["category"];

$target = "../uploads/";
$file_path = $target.basename($_FILES["file"]["name"]); //../uploads/pro_A61098_1.jpg
$file_name = $_FILES["file"]["name"]; //pro_A61098_1.jpg
$file_tmp = $_FILES["file"]["tmp_name"]; // C:\xampp\tmp\php590C.tmp
$file_store = "../uploads/".$file_name;

echo $file_tmp;

move_uploaded_file($file_tmp, $file_store);

$sql = "INSERT INTO products(name, price, picture, description, category_id) VALUES('$name', '$price', '$file_path', '$description', '$category')";
$connect->query($sql)
?>