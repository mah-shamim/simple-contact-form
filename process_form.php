<?php
require 'db.php';

try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $stmt = $pdo->prepare("INSERT INTO messages (name, email, message) VALUES (:name, :email, :message)");
        $stmt->execute(['name' => $name, 'email' => $email, 'message' => $message]);

        require 'send_email.php';

        $email_body = "Name: $name\nEmail: $email\nMessage:\n$message";
        mail($to, $subject, $email_body, $headers);

        echo 'Message sent successfully!';
    }
} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}
?>
