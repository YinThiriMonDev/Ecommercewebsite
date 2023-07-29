<?php
include("admin/confs/authorize.php");
include("admin/confs/Connection.php");

$id=$_POST['id'];
$label=$_POST['label'];
$price=$_POST['price'];
$description=$_POST['description'];
$brandid=$_POST['brandid'];
$cover=$_FILES['cover']['name'];
$tmp=$_FILES['cover']['tmp_name'];

if($cover)
{
    move_uploaded_file($tmp, "admin/covers/$cover");
    $sql="UPDATE mochicosmetics SET label='$label', price='$price', description='$description',
          brandid='$brandid', cover='$cover', customized_date=now() WHERE id=$id";
}

else {
    $sql="UPDATE mochicosmetics SET label='$label', price='$price', description='$description', 
         brandid='$brandid', cover='$cover', customized_date=now() WHERE id=$id";
}

$conn->query($sql);
header("location:mochicosmetics-list.php");
?>