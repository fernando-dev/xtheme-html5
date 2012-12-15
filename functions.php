<?php
/* Sidebar
**************************************************************/
if ( function_exists('register_sidebar') )
register_sidebar(array(
    'name' => 'Sidebar',
    'before_widget' => '<article class="sidebox">',
    'after_widget' => '</article>',
    'before_title' => '<header><h3 class="sidetitle"></header>',
    'after_title' => '</h3>',
));

/* Thumb image post
**************************************************************/
if ( function_exists( 'add_theme_support' ) )
{
    add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );
    add_image_size( 'post-thumb', 150, 120, true );
    add_image_size( 'image-slider', 900, 250, true );
}

?>