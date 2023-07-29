<html>
<head>
<title>New Mochi Brand</title>
<link rel="stylesheet" href="admin/css/style.css">
</head>
<body>
<h1>New Mochi Brand</h1>
<?php include("admin/confs/authorize.php");?>

<ul class="menu">
 <li><a href="mochicosmetics-list.php">Manage Mochi Cosmetics</a></li>
 <li><a href="mochibrand-list.php">Manage Mochi Brand</a></li>
 <li><a href="orders.php">Manage Orders</a></li>
 <li><a href="logout.php">Logout</a></li>
 </ul>

<form action="mochibrand-add.php" method="post">
<label for="name">Mochi Brand Name</label>
<input type="text" name="name">


<br><br>
<input type="submit" name="insert" value="Add Mochi Brand">
</form>

</body>
</html>
