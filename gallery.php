<?php
session_start();
require_once 'header.php';

if (!empty($_SESSION['id']) && isset($_SESSION['id'])) {

    $galleryId = '';
    if (isset($_GET['galleryId']) && !empty($_GET['galleryId'])) {
        $galleryId = rawurldecode($_GET['galleryId']);
    }


    $directory = __DIR__ . "/galleries-mini/$galleryId/";

    $pictures = array_diff(scandir($directory), array('..', '.'));

    echo '<div class="main d-flex flex-wrap justify-content-center">';
    foreach ($pictures as $picture) {
        $bigPicture = str_replace('_mini', '', $picture);
        echo "<a href='galleries/" . rawurlencode($galleryId) . "/" . $bigPicture . "' target='_blank'><img class='picture' src='galleries-mini/" . rawurlencode($galleryId) . "/" . $picture . "' loading='lazy' alt=''></a>";
    }
    echo '</div>';
}
require_once 'footer.php';
