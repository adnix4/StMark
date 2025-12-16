<?php
// header.php - meta, CSS, and navigation
// Detect base path for proper asset/link URLs
$base = rtrim(dirname($_SERVER['PHP_SELF']), '/\\') ?: '/';
if ($base !== '/') $base .= '/';
?><!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>St. Mark Lutheran Church Eau Claire WI </title>
  <meta name="description" content="St. Mark Lutheran Church and School Eau Claire Wisconsin - A welcoming community of faith. Join us for worship, ministries, and events.">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo $base; ?>assets/css/styles.css">
</head>
<body>
  <header class="site-header mb-4">
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
      <div class="container">
        <a class="navbar-brand fw-bold" href="<?php echo $base; ?>"><img src="<?php echo $base; ?>assets/images/logo.png" alt="St. Mark Logo" style="height: 40px; margin-right: 10px;"> St. Mark</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="<?php echo $base; ?>?page=home">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo $base; ?>?page=about">About</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo $base; ?>?page=ministries">Ministries</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo $base; ?>?page=events">Events</a></li>
            <li class="nav-item"><a class="nav-link btn btn-primary text-white ms-2" href="<?php echo $base; ?>?page=contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main class="container mb-5">
