<?php
/**
 * prosmile functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package prosmile
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function prosmile_setup()
{
    /*
        * Make theme available for translation.
        * Translations can be filed in the /languages/ directory.
        * If you're building a theme based on prosmile, use a find and replace
        * to change 'prosmile' to the name of your theme in all the template files.
        */
    load_theme_textdomain('prosmile', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
    add_theme_support('title-tag');

    /*
        * Enable support for Post Thumbnails on posts and pages.
        *
        * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
        */
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'menu-1' => esc_html__('Primary', 'prosmile'),
        )
    );

    /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Set up the WordPress core custom background feature.
    add_theme_support(
        'custom-background',
        apply_filters(
            'prosmile_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        )
    );
}

add_action('after_setup_theme', 'prosmile_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function prosmile_content_width()
{
    $GLOBALS['content_width'] = apply_filters('prosmile_content_width', 640);
}

add_action('after_setup_theme', 'prosmile_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function prosmile_widgets_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'prosmile'),
            'id' => 'sidebar-1',
            'description' => esc_html__('Add widgets here.', 'prosmile'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
}

add_action('widgets_init', 'prosmile_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function prosmile_scripts()
{
    wp_enqueue_style('prosmile-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_style_add_data('prosmile-style', 'rtl', 'replace');
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'prosmile_scripts');

function theme_name_scripts()
{
    wp_enqueue_style('style1', get_stylesheet_directory_uri() . '/css/style.css');
    wp_enqueue_style('style2', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css');
    wp_enqueue_style('style3', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
    wp_enqueue_style('style4', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
    wp_enqueue_style('style5', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css');

    wp_enqueue_script('script1', 'https://code.jquery.com/jquery-3.7.1.min.js?_v=20240827112352', array(), '1.0.0', true);
    wp_enqueue_script('script2', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array(), '1.0.0', true);
    wp_enqueue_script('script3', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js', array(), '1.0.0', true);
    wp_enqueue_script('script4', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js?', array(), '1.0.0', true);
    wp_enqueue_script('script5', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '1.0.0', true);
    wp_enqueue_script('script6', get_stylesheet_directory_uri() . '/js/app.js', array(), '1.0.0', true);
    wp_enqueue_script('script7', get_stylesheet_directory_uri() . '/js/index.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'theme_name_scripts');

add_filter('get_the_archive_title_prefix', '__return_empty_string');

add_action('init', function () {
    pll_register_string('mytheme-hello', 'Мы находимся');
    pll_register_string('mytheme-hello', 'Сделано с любовью');
    pll_register_string('mytheme-hello', 'Правильный уход за зубами и полостью рта – это один из самых простых и доступных, но в то же время, эффективных методов профилактики.');
    pll_register_string('mytheme-hello', 'Бесплатная парковка');
    pll_register_string('mytheme-hello', '1,5 часа в центре города для клиентов клиники');
    pll_register_string('mytheme-hello', 'Навигация по сайту');
    pll_register_string('mytheme-hello', 'Контакты и информация');
    pll_register_string('mytheme-hello', 'Мы работаем');
    pll_register_string('mytheme-hello', 'Звоните');
    pll_register_string('mytheme-hello', 'Пишите');
    pll_register_string('mytheme-hello', 'Звоните, Пн-Сб 9:00-17:00');
    pll_register_string('mytheme-hello', 'Записаться на прием');
    pll_register_string('mytheme-hello', 'Сергей Ткачук');
    pll_register_string('mytheme-hello', 'Врач-стоматолог');
    pll_register_string('mytheme-hello', 'Запишитесь <br> на консультацию к нашим <br> опытным стоматологам');
    pll_register_string('mytheme-hello', 'Отзывов о клинике');
    pll_register_string('mytheme-hello', 'Рейтинг положительных отзывов');
    pll_register_string('mytheme-hello', 'Запишитесь <br> к нам на консультацию');
    pll_register_string('mytheme-hello', 'До и после');
    pll_register_string('mytheme-hello', 'Преимущества <br> лечения');
    pll_register_string('mytheme-hello', 'Оснащение и технологии');
    pll_register_string('mytheme-hello', 'Компьютерная томография для диагностики и лечение под увеличением позволяет решить все проблемы');
    pll_register_string('mytheme-hello', 'Высококвалифицированные специалисты');
    pll_register_string('mytheme-hello', 'Врачи клиники проходят обучение у ведущих стоматологов США и Европы, умеют работать с самыми сложными случаями');
    pll_register_string('mytheme-hello', 'Седация');
    pll_register_string('mytheme-hello', 'Безболезненное и комфортное лечение без стресса и тревоги.');
    pll_register_string('mytheme-hello', '©ProSmile. All Right Reserved');
});