<div class="pagetitle-page__section">
    <div class="default__container">
        <div class="row">
            <h1><?php the_field('page_title'); ?></h1>
            <button class="btn-default" data-ripple data-goto="#<?php the_field('contact_link'); ?>">
                <?php pll_e('Записаться на прием'); ?>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="12" r="12" fill="#EAE0D2"/>
                    <path d="M11 8L15 12L11 16" stroke="#2081EA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
    </div>
</div>