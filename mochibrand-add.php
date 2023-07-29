<?php
include("admin/confs/authorize.php");
include("admin/confs/Connection.php");

if(isset($_POST['insert']))
{
    $name=$_POST['name'];
    $sql="INSERT INTO mochibrand (name,created_date,customized_date)
            VALUES('$name',now(),now())";
    $conn->query($sql);
    
    header("location:mochibrand-list.php");
}