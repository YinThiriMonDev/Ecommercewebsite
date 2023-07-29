<?php
include("admin/confs/authorize.php");
include("admin/confs/Connection.php");
//new hl ka hr twy ko yuu tl
$label= $_POST['label']; // phone new ka name nat tuu ya ml
$price=$_POST['price'];
$description=$_POST['description'];
$brandid=$_POST['brandid'];
$cover=$_FILES['cover']['name'];
$tmp=$_FILES['cover']['tmp_name']; // change kwint ma shi //file upload lote phot

if($cover){
    move_uploaded_file($tmp, "admin/covers/$cover"); //file htae payy tr
}

$sql="INSERT INTO mochicosmetics(label,price,description,brandid,cover,created_date,customized_date)
 	VALUES('$label','$price','$description','$brandid','$cover',now(),now())"; //database htl ko htae tr database name nat tuu ya ml // value ka htae mae hr twy thu ka a paw mhr kyay nyar tae variable twy

$conn->query($sql);

header("location:mochicosmetics-list.php");


?>