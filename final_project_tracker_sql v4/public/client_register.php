<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt = $conn->prepare("INSERT INTO clients (first_name, last_name, email, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $firstName, $lastName, $email, $password);

    if ($stmt->execute()) {
        // Get auto-generated client ID
        $client_id = $conn->insert_id;

        // Redirect to success page with ID
        header("Location: success.php?client_id=" . $client_id);
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>
