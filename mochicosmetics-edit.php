<html>
<head>
<title>Edit Mochi Cosmetics</title>
<link rel="stylesheet" href="admin/css/style.css">

<style>
form label{
    display:black;
    margin-top:8px;
}
</style>
</head>

<body>

<?php 
include("admin/confs/authorize.php");
   include("admin/confs/Connection.php");
   
   $id=$_GET['id'];
   $result=$conn->prepare("SELECT * FROM mochicosmetics WHERE id=$id");
   $result->execute(['$id']);
   $row= $result->fetch(PDO::FETCH_ASSOC);

?>
  
  <h1>Edit Mochi Cosmetics</h1>
  <ul class="menu">
 <li><a href="mochicosmetics-list.php">Manage Mochi Cosmetics</a></li>
 <li><a href="mochibrand-list.php">Manage Mochi Brand</a></li>
 <li><a href="orders.php">Manage Orders</a></li>
 <li><a href="logout.php">Logout</a></li>
 </ul>
  
  <form action="mochicosmetics-update.php" method="POST" enctype="multipart/form-data">
  
  <input type="hidden" name="id" value="<?php echo $row['id']?>">
  
  <label for="label">Mochi Cosmetics Label</label>
  <input type="text" name="label" id="label"
               value="<?php echo $row['label']?>">
               
  <label for="price">Price</label>
  <input type="text" name="price" id="price"
               value="<?php echo $row['price'] ?>">
               
  <label for="description">Description</label>
  <input type="text" name="description" id="description"
         value="<?php echo $row['description']?>">
        
          
    <label for="brand">Brand</label>
    <select name="brandid" id="brand">
    <option value="0">----Choose----</option>
    
    <?php 
    $mochi=$conn->prepare("SELECT id,name FROM mochibrand");
    $mochi->execute();
    while($brand=$mochi->fetch(PDO::FETCH_ASSOC))
    {
    
    ?> 
    
    <option value="<?php echo $brand['id']?>"
    <?php if($brand['id']==$row['brandid']) echo "selected"?>   >
    <?php echo $brand['name']?>
    
    
    </option>
    
    <?php }?>
    
    </select>
    
    <br><br>
    <img src="admin/covers/<?php echo $row['cover']?>" alt="" height="150">
    <label for="cover">Change Cover</label>
    <input type="file" name="cover" id="cover">
    <br><br>
    <input type="submit" value="Update Mochi Cosmetics">
    <a href="mochicosmetics-list.php">Back</a>
  </form>
</body>

</html>
