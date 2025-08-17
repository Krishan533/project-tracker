<?php
require __DIR__ . '/../includes/functions.php';

$required = ['user_id','name','phone','email'];
foreach ($required as $r) {
  if (empty($_POST[$r])) {
    die("Missing required field: $r");
  }
}

$data = [
  'user_id' => trim($_POST['user_id']),
  'name' => trim($_POST['name']),
  'phone' => trim($_POST['phone']),
  'email' => trim($_POST['email']),
  'address' => trim($_POST['address'] ?? ''),
  'project_status' => trim($_POST['project_status'] ?? 'Pending'),
  'files' => ''
];

if (addClient($data)) {
  header("Location: success.php?pid=" . urlencode($data['user_id']));
  exit;
} else {
  echo "Error saving data.";
}
