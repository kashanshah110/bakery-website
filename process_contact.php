<?php
require_once 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    if (!empty($name) && !empty($email) && !empty($message)) {
        try {
            $stmt = $pdo->prepare("INSERT INTO contact_messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
            $stmt->execute([$name, $email, $subject, $message]);
            
            echo "<script>alert('Message sent successfully!'); window.location.href='contact.php';</script>";
        } catch (PDOException $e) {
            echo "<script>alert('Error sending message: " . $e->getMessage() . "'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('Please fill all required fields.'); window.history.back();</script>";
    }
} else {
    header("Location: contact.php");
    exit();
}
?>
