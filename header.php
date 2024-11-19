<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package prosmile
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap&_v=20240830160226" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>> <?php wp_body_open(); ?>

<?php

$posts = get_posts(array(
    'posts_per_page' => -1,
    'post_type' => 'page',
    'meta_key' => 'stranicza_kontaktov',
    'meta_value' => '1'
));

if ($posts): foreach ($posts as $post): setup_postdata($post);
    $contacts_page = get_the_ID();
endforeach;
    wp_reset_postdata(); endif;

$phone = get_field('PhoneNumber', $contacts_page);
$address = get_field('adres', $contacts_page);
$map_link = get_field('ssylka_na_kartu', $contacts_page);
$time = get_field('grafik_raboty', $contacts_page);

?>

<div class="wrapper">
    <header class="header" data-scroll-show>
        <div class="header__container">
            <div class="row">
                <div class="col">
                    <div class="logo">
                        <a href="<?php echo get_home_url(); ?>">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/newlogo.png" alt="">
                        </a>
                    </div>
                    <div class="menu">
                        <?php wp_nav_menu(
                            array(
                                'theme_location' => 'menu-1',
                                'menu_id' => 'primary-menu',
                            )
                        ); ?>
                    </div>
                </div>
                <div class="col">
                    <div class="icon-group">
                        <div class="icon">
							<span>
								<img src="<?php echo get_stylesheet_directory_uri() ?>/img/icons/location.svg" alt="">
							</span>
                        </div>
                        <div class="text">
                            <span><?php pll_e('Мы находимся'); ?></span>
                            <a target="_blank" href="<?php echo $map_link ?>"><?php echo $address ?></a>
                        </div>
                    </div>
                    <div class="icon-group">
                        <div class="icon">
							<span>
								<img src="<?php echo get_stylesheet_directory_uri() ?>/img/icons/phone.svg" alt="">
							</span>
                        </div>
                        <div class="text">
                            <span><?php echo $time ?></span>
                            <a href="tel:<?php echo $phone ?>"><?php echo $phone ?></a>
                        </div>
                    </div>
                    <div class="lang-items">
                        <button id="js-langs">
                            <span><?php echo pll_current_language(); ?></span>
                        </button>
                        <ul class="additional-langs">
                            <?php pll_the_languages(array('show_flags' => 0, 'show_names' => 1, 'hide_current' => 1)); ?>
                        </ul>
                    </div>
                    <div class="burger-menu">
                        <button type="button" id="js-burger" data-popup="#popup">
                            <svg width="26" height="22" viewBox="0 0 26 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M26 1L8.9407e-07 0.999998" stroke="#171412"></path>
                                <path d="M26 11L8.9407e-07 11" stroke="#171412"></path>
                                <path d="M26 21L8.9407e-07 21" stroke="#171412"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>