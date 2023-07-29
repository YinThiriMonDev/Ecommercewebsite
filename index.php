<?php
session_start();

include("admin/confs/Connection.php");

$cart=0;
if(isset($_SESSION['cart']))
{
    foreach ($_SESSION['cart'] as $qty)
    {
        $cart+=$qty;
    }
}

if(isset($_GET['id']))
{
    $brandid=$_GET['id'];
    $product=$conn->query("SELECT * FROM mochicosmetics WHERE brandid=$brandid");
    
}
else
{
    $product=$conn->query("SELECT * FROM mochicosmetics");
    
}

$brand=$conn->query("SELECT * FROM mochibrand");
?>

<!doctype html>
<html>
<head>
<title>Mochi Cosmetics Store</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container-fluid" style="background-image: url(admin/covers/g1.jpg)";>
 <h1>Mochi Cosmetics Store</h1>
 
 <div class="info">
  <a href="view-cart.php">
   (<?php echo $cart ?>) product in your cart
  </a>
 </div>

  <div class="sidebar">
  <ul class="cats">
   <li>
     <b><a href="index.php">All brand</a></b>
   </li>
   <?php 
   while($row=$brand->fetch(PDO::FETCH_ASSOC))
    { ?> 
   <li>
    <a href="index.php?id=<?php echo $row['id']?>">
      <?php echo $row['name']?>
    </a>
   </li>
    <?php
    }
    ?>
  </ul>
  </div> 
 

<div class="main">
  <ul class="product">
<?php 
while ($row=$product->fetch(PDO::FETCH_ASSOC))
{?>
<li>
<img src="admin/covers/<?php echo $row['cover']?>" height="150">
<b>
<br>
 <a href="mochicosmetics-detail.php?id=<?php  echo $row['id']?>">
 <?php echo $row ['label']?>
 </a>
</b>

<i>$<?php  echo $row['price']?></i>

<a href="add-to-cart.php?id=<?php  echo $row['id']?>" class="add-to-cart">Add to Cart</a>

</li>
<?php 
}
?>
</ul>
</div>

<div class="footer">
&copy;<?php  echo date("Y")?>.All right reserved.
<a href="home.php">HOME</a>
</div>
</body>

</html>