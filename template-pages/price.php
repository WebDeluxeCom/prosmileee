<?php get_header();
// Template Name: Price
?>

    <main class="page">

        <?php get_template_part('template-parts/pagetitle'); ?>

        <?php if (have_rows('price_group')): ?>
            <?php while (have_rows('price_group')): the_row();

                // Get sub field values.
                $title = get_sub_field('dobavit_zagolovok');

                ?>

                <div class="price-page__section">
                    <div class="default__container">
                        <h2><?php echo $title ?></h2>
                        <div class="price-row">
                            <?php if (have_rows('dobavit_czenu')): while (have_rows('dobavit_czenu')) : the_row();
                                $sub1 = get_sub_field('zagolovok_uslugi');
                                $sub2 = get_sub_field('czena');
                                ?>

                                <div class="column">
                                    <div class="name"><?php echo $sub1 ?></div>
                                    <div class="text"><?php echo $sub2 ?></div>
                                </div>

                            <?php endwhile; else : endif; ?>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>

        <?php if (have_rows('blok_rassrochka')): ?>
            <?php while (have_rows('blok_rassrochka')): the_row();

                // Get sub field values.
                $title = get_sub_field('zagolovok');
                $descr = get_sub_field('opisanie');

                ?>

                <div class="credit-page__section mt60px">
                    <div class="default__container">
                        <div class="row">
                            <div class="left">
                                <h2><?php echo $title ?></h2>
                                <p><?php echo $descr ?></p>
                                <button class="btn-default" data-ripple data-goto="#contact-right">
                                    <?php pll_e('Записаться на прием'); ?>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12" cy="12" r="12" fill="#EAE0D2"/>
                                        <path d="M11 8L15 12L11 16" stroke="#2081EA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="right">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/credit.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>

        <?php get_template_part('template-parts/contact-right'); ?>

    </main>
<?php get_footer(); ?>