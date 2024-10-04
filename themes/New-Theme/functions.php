<?php

function sampath_new_theme(){
    wp_enqueue_style( 'New-Theme Style' , get_stylesheet_uri() , array() , '1.0' , 'all' );
   
}
add_action( 'wp_enqueue_scripts' , 'sampath_new_theme' );


