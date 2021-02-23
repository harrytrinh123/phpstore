<?php
include("../partials/connect.php");
if (isset($_POST['update'])) {
  $newid = $_POST['form_id'];
  $newname = $_POST['name'];
  $newprice = $_POST['price'];
  $newdes = $_POST['description'];
  $newcat = $_POST['category'];

  $target = "uploads/";
  $file_path = $target . basename($_FILES["file"]["name"]); //../uploads/pro_A61098_1.jpg
  $file_name = $_FILES["file"]["name"]; //pro_A61098_1.jpg
  $file_tmp = $_FILES["file"]["tmp_name"]; // C:\xampp\tmp\php590C.tmp
  $file_store = "uploads/" . $file_name;

  move_uploaded_file($file_tmp, $file_store);

  $sql = "UPDATE products 
  SET name ='$newname', price ='$newprice', description = '$newdes', category_id = '$newcat', picture = '$file_path'
   WHERE id='$newid'"; 

  if(mysqli_query($connect, $sql)) {
    header('location: productsshow.php');
  } 
}
?>