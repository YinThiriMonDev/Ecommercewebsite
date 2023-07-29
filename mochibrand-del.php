<?php
include("admin/confs/authorize.php");
include ("admin/confs/Connection.php");

$id=$_GET['id'];
$mochi=$conn->prepare("DELETE FROM mochibrand where id=$id");
$mochi->execute([$id]);

header("location:mochibrand-list.php");
?>