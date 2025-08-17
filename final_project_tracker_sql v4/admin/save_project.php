<?php
require __DIR__ . '/../includes/auth.php';
ensure_auth();
require __DIR__ . '/../includes/functions.php';

$mode = $_POST['mode'] ?? 'create';
$data = [
  'user_id' => $_POST['user_id'],
  'name' => $_POST['name'],
  'phone' => $_POST['phone'],
  'email' => $_POST['email'],
  'address' => $_POST['address'] ?? '',
  'project_status' => $_POST['project_status'] ?? 'Pending',
  'files' => ''
];

if ($mode === 'create') {
  addClient($data);
} else if ($mode === 'update') {
  $id = (int)$_POST['id'];
  updateClient($id, $data);
}
header("Location: /final_project_tracker_sql/admin/dashboard.php");
exit;
