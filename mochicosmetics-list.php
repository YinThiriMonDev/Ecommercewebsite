<html>
<head>
<title>Mochi Cosmetics List</title>
<link rel="stylesheet" href="admin/css/style.css">
<style>
form label{
    display:black;
    margin-top:8px;
}
</style>
</head>
<body>
<h1>Mochi Cosmetics List</h1>
<ul class="menu">
 <li><a href="mochicosmetics-list.php">Manage Mochi Cosmetics</a></li>
 <li><a href="mochibrand-list.php">Manage Mochi Brand</a></li>
 <li><a href="orders.php">Manage Orders</a></li>
 <li><a href="logout.php">Logout</a></li>
 </ul>

<?php 
include("admin/confs/authorize.php");
include("admin/confs/Connection.php");

$mochi=$conn->query ("SELECT mochicosmetics.*,mochibrand.name
   FROM mochicosmetics LEFT JOIN mochibrand
   ON mochicosmetics.brandid=mochibrand.id
   ORDER BY mochicosmetics.created_date DESC");
?>

<ul class="mochi">
<?php while($row=$mochi->fetch(PDO::FETCH_ASSOC)){ ?>
 
 <li>
 <img src="admin/covers/<?php echo $row['cover']?>"
 alt="" align="left" height="140">
 <b><?php echo $row['label']?></b>
 <i><?php echo $row['price']?></i>
 <b><?php echo $row['description']?></b>
 <div><?php echo $row['name']?></div>
 
 [<a href="mochicosmetics-del.php?id=<?php echo $row['id']?>" class="del">del</a>]
 [<a href="mochicosmetics-edit.php?id=<?php echo $row['id']?>">edit</a>]
 
 <br><br><br><br><br><br>
 <br><br><br>
 </li>
 <?php 
}
 ?>
 </ul>
 <a href="mochicosmetics-new.php" class="New">New Mochi Cosmetics</a>
</body>
</html>
