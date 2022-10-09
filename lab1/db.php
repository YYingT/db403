<h1>Northwind Categories</h1>
<ul>
<?php
$mysqli = new mysqli('db403-mysql', 'root', 'P@ssw0rd', 'northwind');
$sql = 'select * from categories';
$result = $mysqli->query($sql);
while($row = $result->fetch_assoc()) {
  echo '<li>'.$row['CategoryName'].'</li>';
}
?>
</ul>