<?php
include("admin/confs/authorize.php");
?>

<!doctype html>
<html>
<head>
  <title>Mochi Order List</title>
  <link rel="stylesheet" href="admin/css/style.css">
</head>
<body>

<h1> Mochi Order List </h1>
<ul class="menu">
  <li><a href="mochicosmetics-list.php">Manage Mochi Cosmetics</a></li>
  <li><a href="mochibrand-list.php">Manage Mochi Brand</a></li>
  <li><a href="orders.php">Manage Orders</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>

<?php 
  include("admin/confs/Connection.php");
  $orders= $conn->query("SELECT * FROM orders");
?>

<ul class="orders">
  <?php while($order=$orders->fetch(PDO::FETCH_ASSOC))
  { 
    ?>
      <?php if($order['order_status']):?>
      <li class="delivered">
      <?php else: ?>
     <li>
      <?php endif; ?>

     <div class="order">
         <b><?php echo $order['cust_name']?></b>
         <i><?php  echo $order['cust_email']?></i>
         <span><?php echo $order['cust_phoneno']?></span>
         <p><?php echo $order['cust_address']?></p>
         <?php if($order['order_status']): ?>
<a href="order-status.php?id=<?php echo $order['id'] ?> &status=0">
            Undo</a>
         <?php else: ?>
            <a href="order-status.php?id=<?php echo $order['id'] ?>&status=1">
            Mark as delivered</a>
            <?php  endif; ?>
         </div>
         <div class="items">
           <?php 
               $order_id=$order['id'];
               $items= $conn->query("SELECT order_articles.*, mochicosmetics.label FROM order_articles
                   LEFT JOIN mochicosmetics ON order_articles.mochicosmetics_id=mochicosmetics.id WHERE order_articles.order_id=$order_id");

             while($item=$items->fetch(PDO::FETCH_ASSOC)){
               ?>
             <b>
               <?php  echo $item['label'] ?>
               ( <?php  echo $item['qty']?>)
            </b>

            <?php }?>
         </div>
         </li>
         <?php }?>
</ul>
</body>
</html>