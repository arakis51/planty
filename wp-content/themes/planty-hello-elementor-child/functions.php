<?php
/* Child theme generated with WPS Child Theme Generator */

if (! function_exists('b7ectg_theme_enqueue_styles')) {
    add_action('wp_enqueue_scripts', 'b7ectg_theme_enqueue_styles');

    function b7ectg_theme_enqueue_styles()
    {
        wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
        wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
    }
}

function admin_link_shortcode()
{
    if (is_user_logged_in()) {
        return '<a href="' . esc_url(admin_url()) . '">Admin</a>';
    } else {
        echo '<script>
        document.querySelector("#admin").style.display = "none";
        </script>';
    }
    return '';
}
add_shortcode('admin_link', 'admin_link_shortcode');
