<?php
require 'C:\wamp\www\final_project_tracker_sql\config\db.php';
require 'C:\wamp\www\final_project_tracker_sql\includes\auth.php';

if (isset($_GET['client_id'])) {
    $client_id = htmlspecialchars($_GET['client_id']);
} else {
    $client_id = "Not Found";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Success</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            text-align: center;
            padding: 50px;
        }
        .card {
            background: #fff;
            padding: 20px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 400px;
        }
        .client-id {
            font-size: 20px;
            font-weight: bold;
            color: green;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>✅ Registration Successful!</h2>
        <h2>Thank you! 🎉</h2>
    <p>Your project has been submitted successfully.</p>
        <p>Your Client ID is:</p>
        <p class="client-id">#
        <?php echo $client_id; ?></p>
        <a href="index.php">Go Back to Home</a>
    </div>
</body>
</html>


