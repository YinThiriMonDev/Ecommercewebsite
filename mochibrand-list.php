<html>
<head><title>Brand List</title></head>
<link rel="stylesheet" href="admin/css/style.css">
<style>
form label{
 display:block;
 margin-top:8px;
 }
</style>
<body>
<h1>Mochi Brand List</h1>
<ul class="menu">
 <li><a href="mochicosmetics-list.php">Manage Mochi Cosmetics</a></li>
 <li><a href="mochibrand-list.php">Manage Mochi Brand</a></li>
 <li><a href="orders.php">Manage Orders</a></li>
 <li><a href="logout.php">Logout</a></li>
 </ul>

<?php 
include("admin/confs/authorize.php");
include("admin/confs/Connection.php");

$mochi=$conn->query("SELECT * FROM mochibrand");?>

<ul>
<?php while($row=$mochi->fetch(PDO::FETCH_ASSOC))
{?>
<li title="<?php echo $row['id']?>">
[<a href="mochibrand-del.php?id=<?php echo $row['id']?>">Del </a>]
[<a href="mochibrand-edit.php?id=<?php echo $row['id']?>">Edit </a>]
		<?php echo $row['name']?>
</li>
<?php } ?>
</ul>

<a href="mochibrand-new.php" class="new">New MochiBrand</a>
</body>
</html>
