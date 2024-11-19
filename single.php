<?php get_header(); ?>
    <main class="page">

        <div class="pagetitle-page__section">
            <div class="default__container">
                <div class="row" data-aos="zoom-in" data-aos-delay="0">
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

        <div class="content-page__section">
            <div class="default__container">
                <div class="row" data-aos="zoom-in" data-aos-delay="0">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>

        <?php get_template_part('template-parts/contact-left'); ?>

        <?php if (have_rows('before-after')) { ?>
            <div class="before-page__section mt60px">
                <div class="default__container">
                    <div class="title-default" data-aos="zoom-in" data-aos-delay="0">
                        <h2><?php pll_e('До и после'); ?></h2>
                    </div>
                    <div class="row">
                        <div class="before-after__slider owl-carousel">
                            <?php if (have_rows('before-after')): while (have_rows('before-after')) : the_row();
                                $before = get_sub_field('before');
                                $after = get_sub_field('after');
                                ?>

                                <div class="item">
                                    <div class="item-images">
                                        <img src="<?php echo $before ?>" alt="Результат ДО">
                                        <img src="<?php echo $after ?>" alt="Результат ПОСЛЕ">
                                    </div>
                                </div>

                            <?php endwhile; else : endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

        <div class="advantages-page__section mt60px">
            <div class="default__container">
                <div class="row">
                    <div class="left">
                        <h2 data-aos="zoom-in" data-aos-delay="0"><?php pll_e('Преимущества <br> лечения'); ?></h2>
                        <div class="advantages-section">
                            <div class="column" data-aos="zoom-in" data-aos-delay="0">
                                <div class="icon">
                                    <svg width="66" height="66" viewBox="0 0 66 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="1" y="1" width="64" height="64" rx="16" stroke="#FAE8D5"/>
                                        <rect x="9" y="9" width="48" height="48" rx="10" fill="#FAE8D5"/>
                                        <line x1="33" y1="25" x2="33" y2="41" stroke="black" stroke-width="2" stroke-linecap="round"/>
                                        <line x1="41" y1="33" x2="25" y2="33" stroke="black" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                </div>
                                <div class="text">
                                    <p class="title"><?php pll_e('Оснащение и технологии'); ?></p>
                                    <p class="descr"><?php pll_e('Компьютерная томография для диагностики и лечение под увеличением позволяет решить все проблемы'); ?></p>
                                </div>
                            </div>
                            <div class="column" data-aos="zoom-in" data-aos-delay="0">
                                <div class="icon">
                                    <svg width="66" height="66" viewBox="0 0 66 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="1" y="1" width="64" height="64" rx="16" stroke="#FAE8D5"/>
                                        <rect x="9" y="9" width="48" height="48" rx="10" fill="#FAE8D5"/>
                                        <line x1="33" y1="25" x2="33" y2="41" stroke="black" stroke-width="2" stroke-linecap="round"/>
                                        <line x1="41" y1="33" x2="25" y2="33" stroke="black" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                </div>
                                <div class="text">
                                    <p class="title"><?php pll_e('Высококвалифицированные специалисты'); ?></p>
                                    <p class="descr"><?php pll_e('Врачи клиники проходят обучение у ведущих стоматологов США и Европы, умеют работать с самыми сложными случаями'); ?></p>
                                </div>
                            </div>
                            <div class="column" data-aos="zoom-in" data-aos-delay="0">
                                <div class="icon">
                                    <svg width="66" height="66" viewBox="0 0 66 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="1" y="1" width="64" height="64" rx="16" stroke="#FAE8D5"/>
                                        <rect x="9" y="9" width="48" height="48" rx="10" fill="#FAE8D5"/>
                                        <line x1="33" y1="25" x2="33" y2="41" stroke="black" stroke-width="2" stroke-linecap="round"/>
                                        <line x1="41" y1="33" x2="25" y2="33" stroke="black" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                </div>
                                <div class="text">
                                    <p class="title"><?php pll_e('Седация'); ?></p>
                                    <p class="descr"><?php pll_e('Безболезненное и комфортное лечение без стресса и тревоги.'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/single/advantages.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <?php get_template_part('template-parts/team'); ?>

        <?php get_template_part('template-parts/contact-right'); ?>

    </main>
<?php get_footer(); ?>