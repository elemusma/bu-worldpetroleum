<?php

// owl carousel
wp_enqueue_style('owl.carousel.min', get_theme_file_uri('/owl-carousel/owl.carousel.min.css'));
wp_enqueue_style('owl.theme.default', get_theme_file_uri('/owl-carousel/owl.theme.default.min.css'));
// lightbox
wp_enqueue_style('lightbox-css', get_theme_file_uri('/lightbox/lightbox.min.css'));

// start of process
echo '<section class="position-relative ' . get_field('classes') . '" style="' . get_field('style') . '" id="' . get_field('id') . '">';

echo '<div class="container">';
echo '<div class="row justify-content-center">';

echo get_template_part('partials/content-block');

echo '</div>';
echo '</div>';

// echo '<div class="process-carousel owl-carousel owl-theme">';
// echo '</div>';
echo '<div class="row justify-content-center">';


$partnerPhotos = get_field('process_gallery');
$counterPartner = 0;
if( $partnerPhotos ): 
foreach( $partnerPhotos as $partnerPhoto ): 
$counterPartner++;

echo '<div class="col-md-4 col-portfolio overflow-h" style="margin-top:15px;margin-bottom:15px;">';

echo '<div class="position-relative overflow-h" data-aos="fade-up" data-aos-delay="' . $counterPartner . '00">';

echo '<a href="' . wp_get_attachment_image_url($partnerPhoto['id'], 'full') . '" data-lightbox="image-set-process">';

echo wp_get_attachment_image($partnerPhoto['id'], 'full','',[
    'class'=>'w-100',
    'style'=>'height:350px;object-fit:contain;'
]);

echo '<div class="position-absolute pt-4 w-100 text-center bg-accent" style="bottom:0;left:0;">';

// echo wp_get_attachment_image(316,'full','',[
//     'class'=>'h-auto position-absolute',
//     'style'=>'top:-25px;
//     width: 200px;
//     left: 50%;
//     transform: translate(-50%, 0);
//     object-fit: contain;object-position:bottom;'
// ]);

echo '<div class="h-auto position-absolute" style="top:-25px;width:200px;left:50%;transform:translate(-50%, 0);object-fit:containobject-position:bottom;">';
echo '<?xml version="1.0" encoding="UTF-8"?>
<svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 283.49 78.48">
  <defs>
    <style>
      .cls-1 {
        fill: #2b8dbf;
        stroke-width: 0px;
      }
    </style>
  </defs>
  <g id="Layer_1-2" data-name="Layer 1">
    <g id="TptzRC.tif">
      <path class="cls-1" d="M283.49,37v3.95c-3.67,8.34-10.47,13.52-18.57,16.87-8.53,3.53-17.21,6.91-26.12,9.27-25.21,6.69-51,9.58-77.05,10.34-2.94.09-5.87.68-8.8,1.04h-22.92c-2.11-.34-4.22-.95-6.33-.99-20.46-.37-40.74-2.41-60.83-6.17-16.01-3-31.89-6.63-46.42-14.29-4.2-2.21-8.3-4.96-11.7-8.23-6.44-6.19-6.28-13.86.28-19.89,3.36-3.09,7.27-5.78,11.32-7.94,12.85-6.84,26.84-10.53,41.03-13.29C90.39,1.25,123.74-.93,157.39.35c19.27.73,38.43,2.11,57.43,5.33,17.23,2.91,34.19,6.76,50.06,14.32,7.95,3.79,14.86,8.7,18.61,17.01Z"/>
    </g>
  </g>
</svg>';
echo '</div>';

echo '<div class="position-relative pb-1">';
echo '<h4 class="text-white text-shadow" style="margin:0px;transform: translate(0, -30px);font-size:3rem;line-height:0.5;"><em>' . $counterPartner . '</em></h4>';

echo '<h6 class="text-black pt-2 bold">' . $partnerPhoto['title'] . '</h6>';

echo '</div>';
echo '</div>';
echo '</a>';
echo '</div>';
echo '</div>';

endforeach; endif;

echo '</div>';

// <div class="container">
// <div class="row">
// <div class="col-12">

// </div>
// </div>
// </div>

echo '</section>';

// owl carousel
wp_enqueue_script('jquery-min', get_theme_file_uri('/owl-carousel/jquery.min.js'));
wp_enqueue_script('owl-carousel', get_theme_file_uri('/owl-carousel/owl.carousel.min.js'));
wp_enqueue_script('owl-carousel-custom', get_theme_file_uri('/owl-carousel/owl-carousels.js'));
// lightbox
wp_enqueue_script('lightbox-min-js', get_theme_file_uri('/lightbox/lightbox.min.js'));
wp_enqueue_script('lightbox-js', get_theme_file_uri('/lightbox/lightbox.js'));

// end of process