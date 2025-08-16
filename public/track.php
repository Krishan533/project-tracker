<?php
require __DIR__ . '/../includes/functions.php';
$title = "Track Project";
$phone = $_GET['phone'] ?? '';
$user_ID = $_GET['user_ID'] ?? '';
$client = null;
if ($phone || $user_ID) {
  $client = getClientByPhoneOrProject($phone, $user_ID);
}
include __DIR__ . '/../includes/partials/header.php';
?>
<div class="card card-elevated p-4">
  <h4 class="mb-3">Track Project</h4>
  <form method="get" class="row g-3">
    <div class="col-md-6">
    <div class="col-md-6">
      <label class="form-label">user ID</label>
      <input class="form-control" type="text" name="user_ID" value="<?php echo htmlspecialchars($user_ID); ?>">
    </div>
    <br>OR<br>
      <label class="form-label">Phone</label>
      <input class="form-control" type="text" name="phone" value="<?php echo htmlspecialchars($phone); ?>">
    </div>
    
    <div class="col-12"><button class="btn btn-secondary" type="submit">Search</button></div>
  </form>
</div>

<?php if ($client): ?>
  <div class="card card-elevated p-4 mt-3">
    <div class="row">
      <div class="col-md-6">
        <h5 class="mb-3">Project Details</h5>
        <p><strong>user ID:</strong> <?php echo htmlspecialchars($client['user_id']); ?></p>
        <p class="mb-1"><strong>Name:</strong> <?php echo htmlspecialchars($client['name']); ?></p>
        <p class="mb-1"><strong>Phone:</strong> <?php echo htmlspecialchars($client['phone']); ?></p>
        <p class="mb-1"><strong>Email:</strong> <?php echo htmlspecialchars($client['email']); ?></p>
      </div>
      <div class="col-md-6">
        <h5 class="mb-3">Status</h5>
        <div class="progress mb-2" role="progressbar" aria-label="Progress">
          <?php
            $map = ['Pending'=>20,'In Progress'=>60,'Completed'=>100];
            $pct = $map[$client['project_status']] ?? 0;
          ?>
          <div class="progress-bar" style="width: <?php echo $pct; ?>%"></div>
        </div>
        <span class="badge bg-primary"><?php echo htmlspecialchars($client['project_status']); ?></span>
        <div class="text-muted small mt-2">Created: <?php echo htmlspecialchars($client['created_at']); ?></div>
      </div>
    </div>
  </div>
<?php elseif($phone || $user_ID): ?>
  <div class="alert alert-warning mt-3">No project found for given details.</div>
<?php endif; ?>

<?php include __DIR__ . '/../includes/partials/footer.php'; ?>
