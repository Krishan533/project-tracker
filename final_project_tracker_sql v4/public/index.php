<?php $title="Submit & Track"; include __DIR__ . '/../includes/partials/header1.php'; ?>
<div class="row g-4">
  <div class="col-lg-6">
    <div class="card card-elevated p-4">
      <h4 class="mb-3">Submit Your Project</h4>
      <form action="submit.php" method="post" class="vstack gap-3">
      

        <div><label class="form-label">User ID:</label><input class="form-control" type="text" name="user_id" required></div>
        <div class="row g-3">
          <div class="col-md-6"><label class="form-label">Name</label><input class="form-control" type="text" name="name" required></div>
          <div class="col-md-6"><label class="form-label">Phone</label><input class="form-control" type="text" name="phone" required></div>
        </div>
        <div><label class="form-label">Email</label><input class="form-control" type="email" name="email" required></div>
        <div><label class="form-label">Address</label><textarea class="form-control" name="address" rows="2"></textarea></div>
        <div><label class="form-label">Status</label>
          <select class="form-select" name="project_status"><option>Pending</option><option>In Progress</option><option>Completed</option></select>
        </div>
        <button class="btn btn-primary" type="submit"><i class="bi bi-send"></i> Submit</button>
      </form>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="card card-elevated p-4">
      <h4 class="mb-3">Track Your Project</h4>
      <form action="track.php" method="get" class="vstack gap-3">
        <div><label class="form-label">Phone</label><input class="form-control" type="text" name="phone"></div>
        <div><label class="form-label">user ID</label><input class="form-control" type="text" name="user_ID"></div>
        <button class="btn btn-outline-secondary" type="submit"><i class="bi bi-search"></i> Search</button>
      </form>
    </div>
  </div>
</div>
<?php include __DIR__ . '/../includes/partials/footer.php'; ?>
