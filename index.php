<?php
session_start();
require_once 'header.php';
if (!empty($_SESSION['id']) && isset($_SESSION['id'])) {
    require_once 'main.php';
} else {
    require_once 'login.php';
}

require_once 'footer.php';
