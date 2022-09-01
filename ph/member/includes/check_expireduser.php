<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: ../login/index.php');
    // exit;
}else if($_SESSION['user_type'] != "member"){
    header('Location: ../login/index.php');
}
