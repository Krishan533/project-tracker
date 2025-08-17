<?php
require __DIR__ . '/../includes/auth.php';
$title = "Admin Login";
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (login($_POST['username'], $_POST['password'])) {
    header("Location: /final_project_tracker_sql/admin/dashboard.php");
    exit;
  } else {
    $error = "Invalid credentials";
  }
}
include __DIR__ . '/../includes/partials/header.php';
?>
<div class="row justify-content-center">
  <div class="col-12 col-md-6 col-lg-4">
    <div class="card card-elevated p-4 mt-4">
      <h3 class="mb-3">Admin Login</h3>
      <?php if($error): ?><div class="alert alert-danger"><?php echo $error; ?></div><?php endif; ?>
      <form method="post" class="vstack gap-3">
        <div>
          <label class="form-label">Username</label>
          <input class="form-control" type="text" name="username" required>
        </div>
        <div>
          <label class="form-label">Password</label>
          <input class="form-control" type="password" name="password" required>
        </div>
        <button class="btn btn-primary w-100" type="submit"><i class="bi bi-box-arrow-in-right"></i> Login</button>
      </form>
    </div>
  </div>
</div>
<?php include __DIR__ . '/../includes/partials/footer.php'; ?>
