<?php get_header();
// Template Name: About
?>

    <main class="page">

        <?php get_template_part('template-parts/pagetitle'); ?>

        <div class="about-content__section mt60px">
            <div class="default__container">
                <?php if (have_rows('informaczionnyj_blok')): ?>
                    <?php while (have_rows('informaczionnyj_blok')): the_row();

                        // Get sub field values.
                        $image = get_sub_field('dobavit_foto');
                        $descr = get_sub_field('dobavit_opisanie');

                        ?>

                        <div class="row">
                            <div class="left" style="background-image: url('<?php echo $image ?>');">
                            </div>
                            <div class="right">
                                <?php echo $descr ?>
                            </div>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

        <?php get_template_part('template-parts/gallery'); ?>

        <?php get_template_part('template-parts/team'); ?>

        <?php get_template_part('template-parts/reviews'); ?>

        <?php get_template_part('template-parts/smile'); ?>

        <?php get_template_part('template-parts/contact-right'); ?>

    </main>
<?php get_footer(); ?>