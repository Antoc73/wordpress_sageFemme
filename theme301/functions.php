<?php   
    //add image size
    add_image_size('banner', 1400 , 800, ['center','center']);
    add_image_size('square', 400 , 400, ['center','center']);

    wp_enqueue_style('style', get_template_directory_uri() . '/css/csstest.css');
?>