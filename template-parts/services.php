<?php

$posts = get_posts(array(
    'posts_per_page' => -1,
    'post_type' => 'page',
    'meta_key' => 'services_page',
    'meta_value' => '1'
));

if ($posts): foreach ($posts as $post): setup_postdata($post);
    $services_page = get_the_ID();
endforeach;
    wp_reset_postdata(); endif;

?>

<?php if (have_rows('dobavit_uslugi', $services_page)): ?>
    <?php while (have_rows('dobavit_uslugi', $services_page)): the_row();

        // Get sub field values.
        $title = get_sub_field('zagolovok_bloka');
        $descr = get_sub_field('opisanie_bloka');

        ?>

        <div class="services-page__section">
            <div class="default__container">
                <div class="title-default__section title-service__section--row">
                    <p class="title"><?php echo $title ?></p>
                    <div class="descr">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/icons/animals.svg" alt="">
                        <p><?php echo $descr ?></p>
                    </div>
                </div>
                <div class="row">

                    <?php if (have_rows('dobavit_blok')): while (have_rows('dobavit_blok')) : the_row();
                        $sub1 = get_sub_field('zagolovok');
                        $sub2 = get_sub_field('opisanie');
                        $sub3 = get_sub_field('dobavit_ikonku');
                        ?>

                        <div class="column">
                            <div class="col-top">
                                <p class="name"><?php echo $sub1 ?></p>
                                <p class="desc"><?php echo $sub2 ?></p>
                                <div class="absolute">
                                    <img src="<?php echo $sub3 ?>" alt="<?php echo $sub1 ?>">
                                </div>
                            </div>
                            <div class="col-bot">
                                <ul>
                                    <?php
                                    $featured_posts = get_sub_field('vybrat_uslugi');
                                    if ($featured_posts): ?>
                                        <?php foreach ($featured_posts as $featured_post):
                                            $permalink = get_permalink($featured_post->ID);
                                            $title = get_the_title($featured_post->ID);
                                            ?>
                                            <li>
                                                <a href="<?php echo esc_url($permalink); ?>"><?php echo esc_html($title); ?></a>
                                            </li>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>

                    <?php endwhile; else : endif; ?>

                </div>
            </div>
        </div>

    <?php endwhile; ?>
<?php endif; ?>