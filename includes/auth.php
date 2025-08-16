<?php
session_start();
require __DIR__ . '/../config/db.php';

function login($username, $password) {
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM admin_users WHERE username = :u LIMIT 1");
  $stmt->execute([':u' => $username]);
  $user = $stmt->fetch();
  if ($user && password_verify($password, $user['password'])) {
    $_SESSION['admin'] = $user['username'];
    return true;
  }
  return false;
}

function ensure_auth() {
  if (!isset($_SESSION['admin'])) {
    header("Location: /final_project_tracker_sql/admin/index.php?err=login_required");
    exit;
  }
}

function logout() {
  session_destroy();
  header("Location: /final_project_tracker_sql/admin/index.php");
  exit;
}
?>
