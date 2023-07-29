<?php
include("admin/confs/authorize.php");
include ("admin/confs/Connection.php");

$id=$_GET['id'];
$mochi=$conn->prepare("DELETE FROM mochicosmetics where id=$id");
$mochi->execute([$id]);

header("location:mochicosmetics-list.php");
?>