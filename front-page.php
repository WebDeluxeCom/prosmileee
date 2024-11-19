<?php get_header(); ?>
    <main class="page">

        <?php if (have_rows('glavnyj_banner')): ?>
            <?php while (have_rows('glavnyj_banner')): the_row();

                // Get sub field values.
                $sub1 = get_sub_field('vybrat_foto');
                $sub2 = get_sub_field('zadnij_fon');
                $sub3 = get_sub_field('dobavit_zagolovok');
                $sub4 = get_sub_field('opisanie');

                ?>

                <div class="hero-page__section" style="background-image: url('<?php echo $sub2 ?>');">
                    <div class="default__container">
                        <div class="row">
                            <div class="left">
                                <h1><?php echo $sub3 ?></h1>
                                <p><?php echo $sub4 ?></p>
                                <button class="btn-default" data-ripple data-goto="#contact-right">
                                    <?php pll_e('Записаться на прием'); ?>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12" cy="12" r="12" fill="#fff"/>
                                        <path d="M11 8L15 12L11 16" stroke="#2081EA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="right">
                                <img src="<?php echo $sub1 ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>

        <?php get_template_part('template-parts/services'); ?>

        <?php get_template_part('template-parts/contact-left'); ?>

        <?php get_template_part('template-parts/gallery'); ?>

        <?php get_template_part('template-parts/reviews'); ?>

        <?php get_template_part('template-parts/smile'); ?>

        <?php get_template_part('template-parts/contact-right'); ?>

    </main>
<?php get_footer(); ?>