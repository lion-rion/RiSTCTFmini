<?php
$filename = isset($_GET['f']) ? str_replace('../', '', $_GET['f']) : '';
$path = 'images/' . $filename;

if (!file_exists($path) || !is_file($path)) {
    http_response_code(404);
    exit;
}

header('Content-Type: ' . mime_content_type($path));
header('Content-Length: ' . filesize($path));
readfile($path);