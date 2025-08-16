<?php
require __DIR__ . '/../includes/auth.php';
ensure_auth();
require __DIR__ . '/../includes/functions.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
if ($id) { deleteClient($id); }
header("Location: /final_project_tracker_sql/admin/dashboard.php");
exit;
