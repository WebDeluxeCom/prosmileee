<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package prosmile
 */

get_header();
?>

    <main class="page">

        <div class="pagetitle-page__section">
            <div class="default__container">
                <div class="row" data-aos="zoom-in" data-aos-delay="0">
                    <h1><?php pll_e('Ошибка 404. Страницы не найдено'); ?></h1>
                    <a href="<?php echo get_home_url(); ?>" class="btn-default" data-ripple>
                        <?php pll_e('На главную'); ?>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="12" r="12" fill="#EAE0D2"/>
                            <path d="M11 8L15 12L11 16" stroke="#2081EA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <?php

        $posts = get_posts(array(
            'posts_per_page' => -1,
            'post_type' => 'page',
            'meta_key' => 'stranicza_o_nas',
            'meta_value' => '1'
        ));

        if ($posts): foreach ($posts as $post): setup_postdata($post);
            $about_page = get_the_ID();
        endforeach;
            wp_reset_postdata(); endif;

        ?>

        <?php if (have_rows('DobavitGalereyu', $about_page)): ?>
            <?php while (have_rows('DobavitGalereyu', $about_page)): the_row();

                // Get sub field values.
                $title = get_sub_field('dobavit_zagolovok');
                $descr = get_sub_field('dobavit_opisanie');

                ?>

                <div class="smile-page__section mt60px" style="padding: 0px!important; background: transparent">
                    <div class="default__container">
                        <div class="title-default__section title-default__section--row">
                            <p class="title"><?php echo $title; ?></p>
                            <p class="descr descr-icon">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/icons/instagram.png" alt="">
                                <span><?php echo $descr; ?></span>
                            </p>
                        </div>
                        <div class="slider-images owl-carousel mobile">
                            <?php if (have_rows('dobavit_foto')): while (have_rows('dobavit_foto')) : the_row();
                                $image = get_sub_field('vybrat_kartinku');
                                ?>

                                <div class="image" data-aos="zoom-in" data-aos-delay="100">
                                    <a href="<?php echo $image ?>" data-lightbox="roadtrip">
                                        <img src="<?php echo $image ?>" alt="">
                                    </a>
                                </div>

                            <?php endwhile; else : endif; ?>
                        </div>
                        <div class="row desktop">
                            <?php if (have_rows('dobavit_foto')): while (have_rows('dobavit_foto')) : the_row();
                                $image = get_sub_field('vybrat_kartinku');
                                global $a;
                                $a++;
                                ?>

                                <div class="div<?php echo $a ?> image" data-aos="zoom-in" data-aos-delay="100">
                                    <a href="<?php echo $image ?>" data-lightbox="roadtrip">
                                        <img src="<?php echo $image ?>" alt="">
                                    </a>
                                </div>

                            <?php endwhile; else : endif; ?>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>

    </main>

<?php
get_footer();
