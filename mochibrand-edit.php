<html>
<head>
<title> Edit Mochi Brand</title>
<link rel="stylesheet" href="admin/css/style.css">
</head>
<body>

<h1>Edit Mochi Brand</h1>
<ul class="menu">
 <li><a href="mochicosmetics-list.php">Manage Mochi Cosmetics</a></li>
 <li><a href="mochibrand-list.php">Manage Mochi Brand</a></li>
 <li><a href="orders.php">Manage Orders</a></li>
 <li><a href="logout.php">Logout</a></li>
 </ul>

<?php 
include("admin/confs/authorize.php");
include("admin/confs/Connection.php");

$id=$_GET['id'];
$mochi=$conn->prepare("SELECT * FROM mochibrand WHERE id=$id");
$mochi->execute([$id]);

$row=$mochi->fetch(PDO::FETCH_ASSOC);
?>
<form action="mochibrand-update.php" method="post">
<input type="hidden" name="id" value="<?php  echo $row['id']?>">

<label for="name"> Mochi Brand Name</label>
<input type="text" name="name" value="<?php  echo $row['name']?>">

<br><br>
<input type="submit" value="Update Mochi Brand">
</form>
</body>
</html>