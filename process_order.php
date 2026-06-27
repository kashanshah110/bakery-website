<?php
require_once 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $address = $_POST['address'] ?? '';
    $item = $_POST['item'] ?? '';
    $quantity = $_POST['quantity'] ?? 0;
    $cardName = $_POST['cardName'] ?? '';
    $cardNumber = $_POST['cardNumber'] ?? '';
    $expiry = $_POST['expiry'] ?? '';
    $cvv = $_POST['cvv'] ?? '';

    if (!empty($name) && !empty($email) && !empty($item) && $quantity > 0) {
        try {
            $stmt = $pdo->prepare("INSERT INTO orders (customer_name, email, address, item_name, quantity, card_holder, card_number, expiry, cvv) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute([$name, $email, $address, $item, $quantity, $cardName, $cardNumber, $expiry, $cvv]);
            
            echo "<script>alert('Order placed successfully!'); window.location.href='order.php';</script>";
        } catch (PDOException $e) {
            echo "<script>alert('Error placing order: " . $e->getMessage() . "'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('Please fill all required fields.'); window.history.back();</script>";
    }
} else {
    header("Location: order.php");
    exit();
}
?>
