<?php

function woodcp_header_image_height() {
    echo 125;
}

add_filter('twentyten_header_image_height','woodcp_header_image_height');
?>
