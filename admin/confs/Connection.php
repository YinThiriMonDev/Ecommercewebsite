<?php
try
{
    
    $conn=new PDO('mysql:host=localhost;dbname=mochi',"root","");
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
}
catch(Exception $e){
    echo "Connection failed". $e->getMessage();
}
?>