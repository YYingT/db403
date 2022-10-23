<?php
include 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
</head>
<body>
  <?php
$sql = "select ProductName, UnitsInStock from products where CategoryID=1";
$result = $conn->query($sql);
  ?>
<table>
      <thead>
    <tr>
    <td width="30%"><b>Product Name</td></b>
    <td width="30%"><b>Units in stock</td></b>
    </tr>
      </thead>
   <?php while($row = $result->fetch_assoc()): ?>
  <tr>
   <td><?php echo $row['ProductName']; ?></td>
   <td><?php echo $row['UnitsInStock']; ?></td>
   </tr>
 <?php endwhile ?>
    </tbody>
</table>
</body>
</html>