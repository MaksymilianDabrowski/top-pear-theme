<?php
// simple prot
if (!defined(constant_name: 'ABSPATH')) {
    exit;
}

// import ACF fields
if (function_exists('acf_add_local_field_group')) {
    require_once get_template_directory() . '/includes/acf-fields.php';
}

function top_pear_scripts(): void
{
    // lucide icons
    wp_enqueue_script('lucide-icons', 'https://unpkg.com/lucide@latest', array(), null, true);

    // lucide callback
    wp_enqueue_script('top-pear-main-js', get_template_directory_uri() . '/assets/main-page/js/main.js', array('lucide-icons'), '1.0', true);

    // swiper
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.0');

    // swiper-js hanlder
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.0', true);
    // global css connection
    wp_enqueue_style('top-pear-style', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0');

    // google fonts
    wp_enqueue_style('google-font-poppins', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap', array(), null);

    // js
    wp_enqueue_script(
        'top-pear-main',
        get_template_directory_uri() . '/assets/main-page/js/main.js',
        [],
        array('swiper.js'),
        '1.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'top_pear_scripts');

// custom acf bg section function 

if (!function_exists(function: 'top_pear_get_bg_style')) {
    function top_pear_get_bg_style(string $field_name): string
    {
        $image_url = get_field($field_name);
        if (!empty($image_url)) {
            return "background-image: url('" . esc_url($image_url) . "');";
        }
        return '';
    }
}

// nav menu registration
if (!function_exists(function: 'top_pear_register_menus')) {
    function top_pear_register_menus(): void
    {
        register_nav_menus(
            array(
                'primary' => __('Menu Główne (Navbar)', 'top-pear-theme'),
            )
        );
    }
}

add_action('init', 'top_pear_register_menus');


