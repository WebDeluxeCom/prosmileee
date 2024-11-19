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

<div class="reviews-page__section mt60px">
    <div class="default__container">
        <div class="statistic">
            <div class="column col01">
                <span class="big">512</span>
                <span class="txt"><?php pll_e('Отзывов о клинике'); ?></span>
            </div>
            <div class="column col02">
                <div class="big-group">
                    <span class="big">4,8\5</span>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/icons/star.svg" alt="">
                </div>
                <span class="txt"><?php pll_e('Рейтинг положительных отзывов'); ?></span>
            </div>
            <div class="column col03 social">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/icons/google.png" alt="">
                <div class="group">
                    <span class="txt">4,7/5</span>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/icons/star.svg" alt="">
                </div>
            </div>
            <div class="column col04 social">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/icons/facebook.png" alt="">
                <div class="group">
                    <span class="txt">5/5</span>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/icons/star.svg" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="reviews-slider owl-carousel">

                <?php if (have_rows('dobavit_otzyvy', $about_page)): while (have_rows('dobavit_otzyvy', $about_page)) : the_row();
                    $sub1 = get_sub_field('fotografiya');
                    $sub2 = get_sub_field('imya');
                    $sub3 = get_sub_field('otzyv');
                    ?>

                    <div class="item">
                        <div class="image">
                            <img src="<?php echo $sub1 ?>" alt="<?php echo $sub2 ?>">
                        </div>
                        <div class="descr">
                            <p class="name"><?php echo $sub2 ?></p>
                            <p class="desc"><?php echo $sub3 ?></p>
                            <div class="star">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/icons/star.svg" alt="">
                            </div>
                        </div>
                    </div>

                <?php endwhile; else : endif; ?>

            </div>
            <div class="navigation">
                <button class="prev">
                    <svg width="20" height="36" viewBox="0 0 20 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.680985 15.8992L13.8409 0.783569C14.7505 -0.26119 16.2214 -0.261189 17.1213 0.783569L19.3081 3.29544C20.2177 4.34019 20.2177 6.02959 19.3081 7.06323L9.98972 17.7887L19.3178 28.503C20.2274 29.5478 20.2274 31.2372 19.3178 32.2708L17.1309 34.7938C16.2214 35.8385 14.7505 35.8385 13.8506 34.7938L0.69066 19.6781C-0.228602 18.6334 -0.228601 16.944 0.680985 15.8992Z" fill="#010E04" fill-opacity="0.75"/>
                    </svg>
                </button>
                <button class="next">
                    <svg width="20" height="33" viewBox="0 0 20 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.319 14.4658L6.15905 0.712926C5.24946 -0.237642 3.77865 -0.237642 2.87874 0.712927L0.69186 2.99834C-0.217724 3.94891 -0.217724 5.486 0.69186 6.42645L10.0103 16.1849L0.68219 25.9333C-0.227396 26.8839 -0.227396 28.421 0.68219 29.3615L2.86906 31.657C3.77865 32.6075 5.24947 32.6075 6.14938 31.657L19.3093 17.9041C20.2286 16.9535 20.2286 15.4164 19.319 14.4658Z" fill="#010E04" fill-opacity="0.75"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>