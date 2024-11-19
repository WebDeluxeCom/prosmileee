<?php get_header();
// Template Name: Doctor Single
?>

    <main class="page">

        <div class="pagetitle-page__section">
            <div class="default__container">
                <div class="row">
                    <h1><?php echo get_the_title(); ?></h1>
                    <button class="btn-default" data-ripple data-goto="#contact-right">
                        <?php pll_e('Записаться на прием'); ?>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="12" r="12" fill="#EAE0D2"/>
                            <path d="M11 8L15 12L11 16" stroke="#2081EA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="about-content__section doctor-content__section mt60px">
            <div class="default__container">
                <div class="row">
                    <div class="left">
                        <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php echo get_the_title(); ?>">
                    </div>
                    <div class="right">
                        <h2><?php echo get_the_title(); ?></h2>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>

        <?php get_template_part('template-parts/team'); ?>

        <?php get_template_part('template-parts/smile'); ?>

        <?php get_template_part('template-parts/contact-right'); ?>

    </main>
<?php get_footer(); ?>