<?php
$filename = isset($_GET['f']) ? str_replace('../', '', $_GET['f']) : '';

$path = 'images/' . $filename;

if (strlen($path) > 25) {
    echo "Too long path.";
    exit;
}

if (!file_exists($path) || !is_file($path)) {
    http_response_code(404);
    exit;
}

if ($path == "images/../flag.txt") {
    $path = "images/.private/flag.txt";
    header('Content-Type: ' . mime_content_type($path));
    header('Content-Length: ' . filesize($path));
    readfile($path);
    exit;
} else{
    header('Content-Type: ' . mime_content_type($path));
    header('Content-Length: ' . filesize($path));
    readfile($path);
}




