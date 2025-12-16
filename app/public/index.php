<?php
// Simple page router - safe whitelist approach
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$allowed = ['home','about','ministries','events','contact'];
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