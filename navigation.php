<?php
if (isset($_SESSION['id'])) {
    $directory = __DIR__ . "/galleries-mini/";
    $folders = array_diff(scandir($directory), array('..', '.'));
?>
    <nav class="">
        <ul class="">
        <?php

        foreach ($folders as $folder) {
            $url = rawurlencode($folder);
            echo "<li class=''>
                <a class='' href='/gallery.php?galleryId=$url'>$folder</a>
            </li>";
        }
    }
    echo '</ul>';

        ?>
    </nav>