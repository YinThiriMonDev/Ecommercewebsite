<html>
<head>
<title>New Mochi Cosmetics</title>
<link rel="stylesheet" href="admin/css/style.css">

<style>
form label{
     display:block;
     margin-top:8px;
}
</style>
</head>
<body>
<h1>New Mochi Cosmetics</h1>

<ul class="menu">
 <li><a href="mochicosmetics-list.php">Manage Mochi Cosmetics</a></li>
 <li><a href="mochibrand-list.php">Manage Mochi Brand</a></li>
 <li><a href="orders.php">Manage Orders</a></li>
 <li><a href="logout.php">Logout</a></li>
 </ul>

<form action="mochicosmetics-add.php" method="post" enctype="multipart/form-data">

<label for="label">Cosmetics Label</label>
<input type="text" name="label">

<label for="price">Cosmetics Price</label>
<input type="text" name="price">

<label for="description">Description</label>
<input type="text" name="description">

<label for="brandid">Brand</label>
<select name="brandid" id="brand">
<option value="0">----Choose----</option>
<?php 
include("admin/confs/authorize.php");
    include("admin/confs/Connection.php");
    $mochi=$conn->query("SELECT id,name FROM mochibrand");
    while($row=$mochi->fetch(PDO::FETCH_ASSOC))
    {
?>

	<option value="<?php echo $row['id']?>">
	<?php echo $row['name']?>
	</option>
	
	<?php 
    }
	?>
</select>
<br><br>
<label for="cover">Cover</label>
<input type="file" name="cover">
<br><br>
<input type="submit" name="new" value="Add Mochi Cosmetics">

<a href="mochicosmetics-list.php">Back</a>
</form>
</body>
</html>
