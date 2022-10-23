<?php
include 'db_connect.php';
$sql = 'select CategoryID, CategoryName from categories';
$result = $conn->query($sql);
$result_array = array();
while($row = $result->fetch_assoc())
  {
  $result_array[] = $row['CategoryName'];
  }
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search product by category</title>
</head>
<body>
  <header>
    <form action="product.php" method="get">
      <label for="category">
        <select name="category" id="category">
  <?php
      foreach($result_array as $name){
      echo'<option value="'.$name.'">'.$name.'</option>';
      }
  ?>
        </select>
      </label>
      <input type="submit" value="Search" name="submit">
    </form>
  </header>
</body>
</html>