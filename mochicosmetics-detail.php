<!doctype html>
<html>
<head>
<title>Mochi Cosmetics Detail</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>Mochi Cosmetics Detail</h1>
<?php 
  include("admin/confs/Connection.php");
  $id=$_GET['id'];
  $mochicosmetics=$conn->query("SELECT * FROM mochicosmetics WHERE id=$id");
  $row=$mochicosmetics->fetch(PDO::FETCH_ASSOC);
?>

<div class="detail">
<a href="index.php" class="back">&laquo; Go Back</a>

<img src="admin/covers/<?php echo $row['cover']?>">

<h2><?php echo $row['label']?></h2>
<i>$<?php echo $row['price']?></i>
<b><?php echo $row['description']?></b>
<a href="add-to-cart.php?id=<?php echo $id ?>" class="add-to-cart">
   Add to cart
</a>

</div>

<div class="footer">
 &copy;<?php echo date("Y")?>.All rights reserved.
 </div>
</body>
</html>
