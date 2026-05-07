<?php
// router.php
if (preg_match('/\.(?:png|jpg|jpeg|gif|webp|css|js|xml|txt)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$file = __DIR__ . $path;

if (is_dir($file)) {
    if (file_exists($file . '/index.php')) {
        $file .= '/index.php';
    } else {
        $file .= '/index.html'; // Fallback
    }
} else if (!file_exists($file)) {
    $file .= '.php';
}

if (file_exists($file)) {
    include $file;
} else {
    http_response_code(404);
    echo "404 Not Found";
}
?>
