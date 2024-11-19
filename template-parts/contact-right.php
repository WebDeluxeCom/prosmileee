<div class="contact-right__section mt60px" id="contact-right">
    <div class="default__container">
        <div class="row">
            <div class="left">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/bg/contact-right.webp" alt="">
                <div class="absolute">
                    <div class="img">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/icons/user.png" alt="">
                    </div>
                    <div class="txt">
                        <span class="name"><?php pll_e('Сергей Ткачук'); ?></span>
                        <span class="desc"><?php pll_e('Врач-стоматолог'); ?></span>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="contact-form__default">
                    <p class="title"><?php pll_e('Запишитесь <br> на консультацию к нашим <br> опытным стоматологам'); ?></p>
                    <div class="calendar-form">
                        <?php echo do_shortcode('[hp-calendar]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>