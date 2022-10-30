<?php
session_start();
include '../db_connect.php'; //relative path ../ refer to upper 1 level
$conn->begin_transaction();
try{
    if(!isset($_SESSION['user']['cartID'])) {
        $sql = "insert into cart(email) values('{$_SESSION['user']['email']}')" ;
        $conn->query($sql);
        $_SESSION['user']['cartID'] = $conn->insert_id;
    }
    $sql = 'insert into cart_details(cartID, ProductID, Units)';
    $sql .= ' values(?, ?, 1) on duplicate key';
    $sql .= ' update Units = Units+1';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ii', $_SESSION['user']['cartID'], $_GET['ProductID']);
    $stmt->execute();
    $stmt->close();
    $conn->commit();
} 
catch(Exception $e) {
    echo "Error: {$e->getMessage()}";
    $conn->rollback();
}
$conn->close();
header("location: ../product.php?category={$_GET['category']}");
?>