<?php
$file_path = 'K-HUB/vocab_study.zip';

if (isset($_POST['download'])) {
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($file_path) . '"');
    header('Content-Length: ' . filesize($file_path));
    readfile($file_path);
    exit();
}
?>
