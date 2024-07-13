<?php
echo '<section class="position-relative big-image-section" style="" id="">';

$image = get_field('big_image');

echo wp_get_attachment_image($image['id'],'full','',[
    'class'=>'w-100 h-auto',
    'style'=>''
]);

echo '</section>';

?>