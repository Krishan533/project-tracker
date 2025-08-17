<?php
require __DIR__ . '/../config/db.php';

function addClient($data) {
  global $pdo;
  $sql = "INSERT INTO clients (user_id, name, phone, email, address, project_status, files)
          VALUES (:user_id, :name, :phone, :email, :address, :project_status, :files)";
  $stmt = $pdo->prepare($sql);
  return $stmt->execute([
    ':user_id' => $data['user_id'],
    ':name' => $data['name'],
    ':phone' => $data['phone'],
    ':email' => $data['email'],
    ':address' => $data['address'],
    ':project_status' => $data['project_status'],
    ':files' => $data['files'] ?? ''
  ]);
}

function getClientByPhoneOrProject($phone, $user_id) {
  global $pdo;
  $sql = "SELECT * FROM clients WHERE phone = :phone OR user_id = :user_id LIMIT 1";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([':phone' => $phone, ':user_id' => $user_id]);
  return $stmt->fetch();
}

function getAllClients() {
  global $pdo;
  return $pdo->query("SELECT * FROM clients ORDER BY created_at DESC")->fetchAll();
}

function getClientById($id) {
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM clients WHERE client_id = :client_id");
  $stmt->execute([':client_id' => $id]);
  return $stmt->fetch();
}

function updateClient($id, $data) {
  global $pdo;
  $sql = "UPDATE clients SET user_id=:user_id, name=:name, phone=:phone, email=:email,
          address=:address, project_status=:project_status, files=:files WHERE id=:id";
  $stmt = $pdo->prepare($sql);
  return $stmt->execute([
    ':user_id' => $data['user_id'],
    ':name' => $data['name'],
    ':phone' => $data['phone'],
    ':email' => $data['email'],
    ':address' => $data['address'],
    ':project_status' => $data['project_status'],
    ':files' => $data['files'] ?? '',
    ':id' => $id
  ]);
}

function deleteClient($id) {
  global $pdo;
  $stmt = $pdo->prepare("DELETE FROM clients WHERE id = :client_id");
  return $stmt->execute([':id' => $id]);
}
?>
