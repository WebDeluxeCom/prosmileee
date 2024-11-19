<?php get_header();
// Template Name: Contact

$phone = get_field('PhoneNumber');
$address = get_field('adres');
$map_link = get_field('ssylka_na_kartu');
$mail = get_field('pochta');
$iframe_map = get_field('iframe_map');

?>

    <main class="page">

        <?php get_template_part('template-parts/pagetitle'); ?>

        <div class="contact-page__section mt60px">
            <div class="default__container">
                <div class="row">
                    <div class="column">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/contact/1.svg" alt="">
                        <div class="text">
                            <p><?php pll_e('Мы находимся'); ?></p>
                            <a target="_blank" href="<?php echo $map_link ?>"><?php echo $address ?></a>
                        </div>
                    </div>
                    <div class="column">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/contact/2.svg" alt="">
                        <div class="text">
                            <p><?php pll_e('Звоните, Пн-Сб 9:00-17:00'); ?></p>
                            <a href="tel:<?php echo $phone ?>"><?php echo $phone ?></a>
                        </div>
                    </div>
                    <div class="column">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/contact/3.svg" alt="">
                        <div class="text">
                            <p><?php pll_e('Пишите'); ?></p>
                            <a href="mailto:<?php echo $mail ?>"><?php echo $mail ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="iframe-page__section mt60px">
            <div class="default__container">
                <?php echo $iframe_map ?>
            </div>
        </div>

        <?php get_template_part('template-parts/contact-right'); ?>

    </main>
<?php get_footer(); ?>