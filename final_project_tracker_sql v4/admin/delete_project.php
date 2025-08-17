<?php
require __DIR__ . '/../includes/auth.php';
ensure_auth();
require __DIR__ . '/../includes/functions.php';

$id = isset($_GET['client_id']) ? (int)$_GET['client_id'] : 0;
if ($id) { deleteClient($id); }
header("Location: /final_project_tracker_sql/admin/dashboard.php");
exit;
