<?php
require __DIR__ . '/../includes/auth.php';
ensure_auth();
require __DIR__ . '/../includes/functions.php';
$clients = getAllClients();
$total = count($clients);
$completed = array_sum(array_map(fn($c)=> $c['project_status']==='Completed'?1:0, $clients));
$progress = $total ? intval(($completed/$total)*100) : 0;
$title = "Dashboard";
include __DIR__ . '/../includes/partials/header.php';
?>
<div class="row g-3">
  <div class="col-12">
    <div class="p-4 hero card-elevated">
      <h2 class="mb-1">Welcome back, <?php echo htmlspecialchars($_SESSION['admin']); ?> 👋</h2>
      <p class="text-muted mb-0">Track, manage and update client projects at a glance.</p>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card card-elevated p-3">
      <div class="d-flex justify-content-between align-items-center">
        <div>
          <div class="text-muted small">Total Projects</div>
          <div class="display-6"><?php echo $total; ?></div>
        </div>
        <i class="bi bi-kanban-fill fs-1 text-primary"></i>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card card-elevated p-3">
      <div class="text-muted small">Completed</div>
      <div class="display-6"><?php echo $completed; ?></div>
      <div class="progress progress-small mt-2">
        <div class="progress-bar" role="progressbar" style="width: <?php echo $progress; ?>%;"></div>
      </div>
      <div class="small text-muted mt-1"><?php echo $progress; ?>% complete</div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card card-elevated p-3">
      <div class="text-muted small">Pending</div>
      <div class="display-6"><?php echo max($total - $completed, 0); ?></div>
      <i class="bi bi-hourglass-split position-absolute end-0 top-0 m-3 text-warning fs-3"></i>
    </div>
  </div>



  <div class="col-12" id="list">
    <div class="card card-elevated p-3">
      <div class="d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Projects</h5>
      </div>
      <div class="table-responsive mt-3">
        <table id="projects-table" class="table align-middle">
          <thead>
            <tr>
              <th>ID</th><th>user ID</th><th>Name</th><th>Phone</th><th>Status</th><th>Created</th><th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($clients as $c): ?>
              <tr>
                <td><?php echo $c['client_id']; ?></td>
                <td><?php echo htmlspecialchars($c['user_id']); ?></td>
                <td><?php echo htmlspecialchars($c['name']); ?></td>
                <td><?php echo htmlspecialchars($c['phone']); ?></td>
                <td><span class="badge badge-status <?php echo str_replace(' ', '\\ ', htmlspecialchars($c['project_status'])); ?>"><?php echo htmlspecialchars($c['project_status']); ?></span></td>
                <td><?php echo htmlspecialchars($c['created_at']); ?></td>
                <td>
                  <a class="btn btn-sm btn-outline-primary" href="edit_project.php?id=<?php echo $c['client_id']; ?>"><i class="bi bi-pencil-square"></i></a>
                  <a class="btn btn-sm btn-outline-danger btn-delete" href="delete_project.php?id=<?php echo $c['client_id']; ?>"><i class="bi bi-trash"></i></a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php include __DIR__ . '/../includes/partials/footer.php'; ?>
