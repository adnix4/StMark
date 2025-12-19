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
        <button id="navToggle" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="hamburger" aria-hidden="false">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
          <ul class="navbar-nav ms-auto">
<?php
// Dynamically list all PHP pages from the pages directory
$pages_dir = __DIR__ . '/../pages';
$pages = [];
if (is_dir($pages_dir)) {
  foreach (scandir($pages_dir) as $file) {
    if ($file[0] === '.') continue; // skip dotfiles
    if (pathinfo($file, PATHINFO_EXTENSION) !== 'php') continue;
    $name = pathinfo($file, PATHINFO_FILENAME);
    $pages[$name] = $file;
  }
  // Ensure 'home' appears first when present
  uksort($pages, function($a, $b){
    if ($a === 'home') return -1;
    if ($b === 'home') return 1;
    return strcmp($a, $b);
  });
}

foreach ($pages as $name => $file) {
  $label = ucwords(str_replace(['-','_'], ' ', $name));
  echo '<li class="nav-item"><a class="nav-link" href="' . htmlspecialchars($base) . '?page=' . htmlspecialchars($name) . '">' . htmlspecialchars($label) . '</a></li>' . "\n";
}
?>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main class="container mb-5">
