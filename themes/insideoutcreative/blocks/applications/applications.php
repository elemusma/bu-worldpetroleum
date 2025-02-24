<?php
echo '<section class="position-relative content-section ' . get_field('classes') . '" style="padding:50px 0;overflow:hidden;' . get_field('style') . '" id="' . get_field('id') . '">';

echo get_template_part('partials/bg-img');

echo '<div class="container">';

echo '<div class="col-12" style="padding:50px 0px;">';

echo wp_get_attachment_image(147,'full','',[
    'class'=>'w-100 h-auto',
    'style'=>''
]);

echo '</div>';

echo '</div>';

echo '<div class="container-fluid">';


echo '<div class="row">';


if(have_rows('sidebar_titles_repeater')):
    echo '<div class="col-lg-3 order-md-2 order-2" data-aos="fade-up" data-aos-delay="200">';
    echo '<ul class="list-unstyled ul-applications">';
    while(have_rows('sidebar_titles_repeater')): the_row();
        echo '<li class="text-accent-green-1 light">' . get_sub_field('title') . '</li>';
    endwhile;
echo '</ul>';
echo '</div>';
endif;


echo '<div class="col-lg-9 order-md-2 order1">';
echo '<div class="row">';
echo '<div class="col-12">';

if(have_rows('top_row_gallery_repeater')):
    echo '<div class="row position-relative justify-content-end">';

        while(have_rows('top_row_gallery_repeater')): the_row(); 



$image = get_sub_field('image'); // test


echo '<div class="col-lg-4 col-md-6 col-top-row-links text-white text-center d-flex justify-content-center overflow-h">';
echo '<div class="overlay-custom position-absolute w-100 h-100 z-1" style="pointer-events:none;"></div>';

echo wp_get_attachment_image($image['id'], 'full', '', [
    'class'=>'w-100 h-100 position-absolute bg-img',
    'style'=>''
]);

echo '<div class="position-relative z-1 w-100">';

echo '<h3 class="mb-0 heading text-uppercase h5">' . get_sub_field('title') . '</h3>';

echo '</div>';

echo '</div>';



        endwhile; 
    echo '</div>';
endif;


echo '</div>';

echo '</div>';


echo '<div class="row">';

echo '<div class="col-lg-5" style="padding:50px 15px;" data-aos="fade-up" data-aos-delay="400">';
echo get_field('content');
echo '</div>';

if(have_rows('bottom_row_gallery')):
echo '<div class="col-lg-7">';
echo '<div class="row position-relative justify-content-start">';

 while(have_rows('bottom_row_gallery')): the_row(); 
 $image = get_sub_field('image');

echo '<div class="col-md-6 col-bottom-row-links text-white text-center d-flex justify-content-center overflow-h">';

echo '<div class="overlay-custom position-absolute w-100 h-100 z-1" style="pointer-events:none;"></div>';

if($image) {
    echo wp_get_attachment_image($image['id'], 'full', '', [
        'class'=>'w-100 h-100 position-absolute bg-img',
        'style'=>''
    ]);
}

echo '<div class="position-relative z-1 w-100">';

if(get_sub_field('title')) {
    echo '<h3 class="mb-0 heading text-uppercase h5">' . get_sub_field('title') . '</h3>';
}

echo '</div>';
echo '</div>';



endwhile; 
echo '</div>';
echo '</div>'; // end of col-md-7
endif;
echo '</div>'; // end of row

echo '</div>';

echo '</div>';



echo '</div>';

echo '<div class="container">';

echo '<div class="col-12" style="padding-top:100px;">';

echo wp_get_attachment_image(234,'full','',[
    'class'=>'w-100 h-auto',
    'style'=>''
]);

echo '</div>';

echo '</div>';

echo '</section>';
?>