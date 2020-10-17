<?php
// https://stackoverflow.com/questions/13568440/retrieve-image-orientation-in-php
list($width, $height) = getimagesize("galleries/test/$i.jpg");
if ($width > $height) {
    //echo "Landscape $i";
    echo  "<img class='pictureL' src='galleries/test/$i.jpg' alt=''>";
} else {
    echo "Portrait or Square";
    echo  `<img class="pictureP" src="galleries/test/$i.jpg" alt="">`;;
}
