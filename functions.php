<?php
function flowtixchat_enqueue_scripts() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_style('theme-css', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_script('theme-js', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'flowtixchat_enqueue_scripts');
?>
