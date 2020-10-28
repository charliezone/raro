<?php

function raro_setup(){
    add_theme_support( 'post-thumbnails' );
}

add_action('after_setup_theme', 'raro_theme_setup');
 
/**
 * Load translations for raro_theme
 */
function raro_theme_setup(){
    load_theme_textdomain('raro', get_template_directory() . '/languages');
}

function raro_styles_scripts() {
    wp_enqueue_style( 'font-oswald', 'https://fonts.googleapis.com/css?family=Oswald:300,400,700');
    wp_enqueue_style( 'font-montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:400,700');
    wp_enqueue_style( 'raro-theme-style', get_template_directory_uri() . '/assets/css/style.css', array('font-oswald', 'font-montserrat') );
    wp_enqueue_style( 'raro-custom-style', get_stylesheet_uri(), array('raro-theme-style') );

    //wp_register_script( 'raro_jquery_version', get_template_directory_uri() . '/assets/js/jquery.min.js', null, '', true );
    //wp_add_inline_script( 'raro_jquery_version', 'var raro_jquery_version = $.noConflict(true);' );

    wp_enqueue_script( 'script-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'script-wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('script-bootstrap'), '', true );
    wp_enqueue_script( 'script-stellar', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js', array('script-wow'), '', true );
    wp_enqueue_script( 'script-magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.js', array('script-stellar'), '', true );
    wp_enqueue_script( 'script-owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('script-magnific-popup'), '', true );
    wp_enqueue_script( 'script-rev-slider-themepunch-tools', get_template_directory_uri() . '/assets/js/rev-slider/jquery.themepunch.tools.min.js', array('script-owl-carousel'), '', true );
    wp_enqueue_script( 'script-rev-slider-themepunch', get_template_directory_uri() . '/assets/js/rev-slider/jquery.themepunch.revolution.min.js', array('script-rev-slider-themepunch-tools'), '', true );
    wp_enqueue_script( 'script-rev-slider-extension-actions', get_template_directory_uri() . '/assets/js/rev-slider/revolution.extension.actions.min.js', array('script-rev-slider-themepunch'), '', true );
    wp_enqueue_script( 'script-rev-slider-extension-carousel', get_template_directory_uri() . '/assets/js/rev-slider/revolution.extension.carousel.min.js', array('script-rev-slider-extension-actions'), '', true );
    wp_enqueue_script( 'script-rev-slider-extension-kenburn', get_template_directory_uri() . '/assets/js/rev-slider/revolution.extension.kenburn.min.js', array('script-rev-slider-extension-carousel'), '', true );
    wp_enqueue_script( 'script-rev-slider-extension-layeranimation', get_template_directory_uri() . '/assets/js/rev-slider/revolution.extension.layeranimation.min.js', array('script-rev-slider-extension-kenburn'), '', true );
    wp_enqueue_script( 'script-rev-slider-extension-migration', get_template_directory_uri() . '/assets/js/rev-slider/revolution.extension.migration.min.js', array('script-rev-slider-extension-layeranimation'), '', true );
    wp_enqueue_script( 'script-rev-slider-extension-navigation', get_template_directory_uri() . '/assets/js/rev-slider/revolution.extension.navigation.min.js', array('script-rev-slider-extension-migration'), '', true );
    wp_enqueue_script( 'script-rev-slider-extension-parallax', get_template_directory_uri() . '/assets/js/rev-slider/revolution.extension.parallax.min.js', array('script-rev-slider-extension-navigation'), '', true );
    wp_enqueue_script( 'script-rev-slider-extension-slideanims', get_template_directory_uri() . '/assets/js/rev-slider/revolution.extension.slideanims.min.js', array('script-rev-slider-extension-parallax'), '', true );
    wp_enqueue_script( 'script-rev-slider-extension-video', get_template_directory_uri() . '/assets/js/rev-slider/revolution.extension.video.min.js', array('script-rev-slider-extension-slideanims'), '', true );
    wp_register_script( 'script-interface', get_template_directory_uri() . '/assets/js/interface.js', array('script-rev-slider-extension-video'), '', true );
    $site_info = array('languaje' => pll_current_language());
    wp_localize_script( 'script-interface', 'site_info', $site_info );
    wp_enqueue_script('script-interface');
    wp_enqueue_script( 'script-custom', get_template_directory_uri() . '/assets/js/custom.js', array('script-interface'), '', true );
}

function raro_head_styles_scripts(){
    ob_start();
    ?>
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png">
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-114x114.png">
    <?php 
    $content = ob_get_contents();
    /* Clean buffer */
    ob_end_clean();
    echo $content;
}

add_action( 'after_setup_theme', 'raro_setup' );
add_action( 'wp_head', 'raro_head_styles_scripts' );
add_action( 'wp_enqueue_scripts', 'raro_styles_scripts' );