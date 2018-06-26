<?php
session_start();
if (!isset($_SESSION['start']) && $_SESSION['start'] != 1) {
    die('no auth');
}

$file = '../files/'.$_GET['file'];
header("Content-Disposition: attachment; filename=\"$file\"");
header("Content-Length: " . filesize($file));
header("Content-Type: application/octet-stream;");
readfile($file);
