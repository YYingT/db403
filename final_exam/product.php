<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Northwind - Product & Review</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
  <img src="images/northwind.png" alt="" id="logo">
  <span id="company">Northwind Traders</span>
</header>
<h1 class="title">All reviews</h1>
<div id="main">
  <a href="review.php">More review</a>
  <table>
    <thead>
      <tr>
        <th>Product name</th>
        <th>Detail</th>
        <th>Attachment</th>
      </tr>
    </thead>
    <tbody>
<?php
include 'db_connect.php';
$sql = 'select ProductName, Detail, Attachment from products p join reviews r on p.ProductID=r.ProductID';
try {
  $result = $conn->query($sql);
  while($row=$result->fetch_assoc()) {
?>
      <tr>
        <td><?=$row['ProductName']?></td>
        <td><?=$row['Detail']?></td>
        <td><img src="attachments/<?=$row['Attachment']?>"></td>
      </tr>
<?php
  }
}
catch (Exception $e) {
  echo "Error: {$e->getMessage()}";
}
$conn->close();
?>
    </tbody>
  </table>
</div>  
</body>
</html>