<?php
$filename = $_GET['file'];
$filepath = "uploads/" . $filename;

if (file_exists($filepath)) {
  header('Content-Type: application/octet-stream');
  header('Content-Disposition: attachment; filename="' . basename($filepath) . '"');
  header('Content-Length: ' . filesize($filepath));
  readfile($filepath);
} else {
  echo "File not found.";
}
?>
