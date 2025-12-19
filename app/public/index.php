<?php
// Simple page router - safe whitelist approach
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Build allowed pages from the pages directory so new pages (e.g. christmas, easter) work
$allowed = [];
$pages_dir = __DIR__ . '/pages';
if (is_dir($pages_dir)) {
    foreach (scandir($pages_dir) as $file) {
        if ($file[0] === '.') continue;
        if (pathinfo($file, PATHINFO_EXTENSION) !== 'php') continue;
        $allowed[] = pathinfo($file, PATHINFO_FILENAME);
    }
}

if (!in_array($page, $allowed)) {
    http_response_code(404);
    $page = 'home';
}
// include header
include __DIR__ . '/inc/header.php';

// include page content
include __DIR__ . '/pages/' . $page . '.php';

// include footer
include __DIR__ . '/inc/footer.php';

?>