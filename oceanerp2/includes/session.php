<?php
if(!session_start())
     session_start();
 if (!isset($_SESSION['username'])) {
        header("Location: /oceanerp2/index.php");
        exit();
    }
?>
