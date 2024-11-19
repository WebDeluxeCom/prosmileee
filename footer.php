<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package prosmile
 */
?>

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

$fb = get_field('ssylka_na_facebook', $contacts_page);
$in = get_field('ssylka_na_instagram', $contacts_page);

?>

<footer class="footer">
    <div class="footer__container">
        <div class="row">
            <div class="logo">
                <div class="logo-group">
                    <a href="<?php echo get_home_url(); ?>">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/newlogo.png" alt="">
                    </a>
                    <ul>
                        <li><a target="_blank" href="<?php echo $fb ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/icons/fb.svg" alt=""></a></li>
                        <li><a target="_blank" href="<?php echo $in ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/icons/in.svg" alt=""></a></li>
                    </ul>
                </div>
                <div class="desc-group">
                    <p><?php pll_e('Правильный уход за зубами и полостью рта – это один из самых простых и доступных, но в то же время, эффективных методов профилактики.'); ?></p>
                </div>
            </div>
            <div class="menu-list">
                <p class="title"><?php pll_e('Навигация по сайту'); ?></p>
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id' => 'primary-menu',
                    )
                ); ?>
            </div>
            <div class="social-list">
                <p class="title"><?php pll_e('Контакты и информация'); ?></p>
                <div class="social-list__column">
                    <div class="contact-block">
                        <div class="icon">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/icons/time.svg" alt="">
                        </div>
                        <div class="text">
                            <span><?php pll_e('Мы работаем'); ?></span>
                            <p><?php echo $time ?></p>
                        </div>
                    </div>
                    <div class="contact-block">
                        <div class="icon">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/icons/phone.svg" alt="">
                        </div>
                        <div class="text">
                            <span><?php pll_e('Звоните'); ?></span>
                            <a href="tel:<?php echo $phone ?>"><?php echo $phone ?></a>
                        </div>
                    </div>
                    <div class="contact-block">
                        <div class="icon">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/icons/location.svg" alt="">
                        </div>
                        <div class="text">
                            <span><?php pll_e('Мы находимся'); ?></span>
                            <a target="_blank" href="<?php echo $map_link ?>"><?php echo $address ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="row row-bottom">
            <div class="text-block">
                <p><?php pll_e('Правильный уход за зубами и полостью рта – это один из самых простых и доступных, но в то же время, эффективных методов профилактики.'); ?></p>
            </div>
            <div class="contact-block">
                <div class="icon">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/icons/parking.svg" alt="">
                </div>
                <div class="text">
                    <span><?php pll_e('Бесплатная парковка'); ?></span>
                    <p><?php pll_e('1,5 часа в центре города для клиентов клиники'); ?></p>
                </div>
            </div>
            <div class="contact-block">
                <div class="icon">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/icons/location.svg" alt="">
                </div>
                <div class="text">
                    <span><?php pll_e('Мы находимся'); ?></span>
                    <a target="_blank" href="<?php echo $map_link ?>"><?php echo $address ?></a>
                </div>
            </div>
        </div>-->
    </div>
</footer>
<div class="bottom-footer__section">
    <div class="default__container">
        <div class="row">
            <div class="copyright"><?php pll_e('©ProSmile. All Right Reserved'); ?></div>
            <div class="developer">
                <span><?php pll_e('Сделано с любовью'); ?></span>
                <a href="https://web-deluxe.com" target="_blank">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/web.svg" alt="">
                </a>
            </div>
        </div>
    </div>
</div>

</div>

<div id="popup" aria-hidden="true" class="popup">
    <div class="popup__wrapper">
        <div class="popup__content">
            <button data-close type="button" class="popup__close">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"></path>
                </svg>
            </button>
            <div class="popup__text">
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
                <div class="lang-item">
                    <ul class="additional-langs">
                        <?php pll_the_languages(array('show_flags' => 0, 'show_names' => 1, 'hide_current' => 0)); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
