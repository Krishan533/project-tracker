<?php
require __DIR__ . '/../includes/auth.php';
ensure_auth();
require __DIR__ . '/../includes/functions.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$client = getClientById($id);
if (!$client) { die("Not found"); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Project</title>
  <link rel="stylesheet" href="/final_project_tracker_sql/public/assets/css/style.css">
</head>
<body>
  <section class="card">
    <h2>Edit Project</h2>
    <form action="save_project.php" method="post">
      <input type="hidden" name="mode" value="update">
      <input type="hidden" name="id" value="<?php echo $client['id']; ?>">
      <label>user ID</label><input name="user_id" value="<?php echo htmlspecialchars($client['user_id']); ?>" required>
      <label>Name</label><input name="name" value="<?php echo htmlspecialchars($client['name']); ?>" required>
      <label>Phone</label><input name="phone" value="<?php echo htmlspecialchars($client['phone']); ?>" required>
      <label>Email</label><input type="email" name="email" value="<?php echo htmlspecialchars($client['email']); ?>" required>
      <label>Address</label><textarea name="address"><?php echo htmlspecialchars($client['address']); ?></textarea>
      <label>Status</label>
      <select name="project_status">
        <?php foreach(['Pending','In Progress','Completed'] as $s): ?>
          <option <?php if($client['project_status']===$s) echo 'selected'; ?>><?php echo $s; ?></option>
        <?php endforeach; ?>
      </select>
      <button type="submit">Update</button>
    </form>
  </section>
</body>
</html>
