<?php
session_start();

if ($_GET['start'] == 1) {
    $_SESSION['start'] = 1;
}
?>
<a href="?start=1">Start</a>
<a href="download.php?file=db.sql">Download</a>
