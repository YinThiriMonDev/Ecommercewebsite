<?php
include("admin/confs/authorize.php");
include("admin/confs/Connection.php");

$id=$_POST['id'];
$name= $_POST['name'];

$mochi=$conn->prepare("UPDATE mochibrand SET name='$name' WHERE id=$id");
$mochi->execute([$name,$id]);

header("location:mochibrand-list.php");
?>
