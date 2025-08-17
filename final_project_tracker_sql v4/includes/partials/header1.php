<?php if (session_status() === PHP_SESSION_NONE) session_start(); ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title ?? 'Project Tracker'; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="/final_project_tracker_sql/public/assets/css/app.css">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg bg-white border-bottom sticky-top">
  <div class="container-fluid">
      <i class="bi bi-kanban"></i> Final Project Tracker
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topnav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="topnav" class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto align-items-lg-center gap-2">
        <?php if(isset($_SESSION['admin'])): ?>
          <li class="nav-item"><a class="btn btn-primary btn-sm" href="#`"><i class="bi bi-circle-half"></i> FACEBOOK</a></li>
          <li class="nav-item"><a class="btn btn-primary btn-sm" href="#`"><i class="bi bi-circle-half"></i> TIKTOK</a></li>
          <li class="nav-item"><a class="btn btn-primary btn-sm" href="#`"><i class="bi bi-circle-half"></i> TELEGRAM</a></li>

          <li class="nav-item"><a class="btn btn-primary btn-sm" href="#`"><i class="bi bi-box-arrow-right"></i> my portfillo</a></li>
        <?php else: ?>
          <li class="nav-item"><a class="btn btn-primary btn-sm" href="#">my portfillo</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid">
  <div class="row">
    <?php if(isset($_SESSION['admin'])): ?>
      <aside class="col-12 col-md-3 col-lg-2 border-end bg-white min-vh-100 p-0">
        <div class="list-group list-group-flush py-3">
          
        <a href="/final_project_tracker_sql/public/index.php##add" class="list-group-item list-group-item-action">
            <i class="bi bi-plus-square"></i> Add Project
        </a>
        </div>
      </aside>
      <main class="col-12 col-md-9 col-lg-10 p-4">
    <?php else: ?>
      <main class="col-12 p-3 p-md-5">
    <?php endif; ?>
