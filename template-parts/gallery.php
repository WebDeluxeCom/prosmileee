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

<div class="gallery-page__section mt60px">
    <div class="default__container">

        <?php if (have_rows('nasha_klinika', $about_page)): ?>
            <?php while (have_rows('nasha_klinika', $about_page)): the_row();

                // Get sub field values.
                $title = get_sub_field('dobavit_zagolovok');
                $descr = get_sub_field('dobavit_opisanie');

                ?>

                <div class="title-default__section title-default__section--row">
                    <p class="title"><?php echo $title ?></p>
                    <p class="descr">
                        <?php echo $descr ?>
                    </p>
                </div>

                <!-- <div class="slider-images owl-carousel mobile">

                    <?php if (have_rows('dobavit_foto')): while (have_rows('dobavit_foto')) : the_row();
                    $image = get_sub_field('vybrat_kartinku');
                    ?>

                        <div class="image" data-aos="zoom-in" data-aos-delay="100">
                            <a href="<?php echo $image ?>" data-lightbox="roadtrip">
                                <img src="<?php echo $image ?>" alt="">
                            </a>
                        </div>

                    <?php endwhile; else : endif; ?>

                </div> -->

                <div class="row">

                    <?php if (have_rows('dobavit_foto')): while (have_rows('dobavit_foto')) : the_row();
                        $image = get_sub_field('vybrat_kartinku');
                        global $i;
                        $i++;
                        ?>

                        <div class="div<?php echo $i ?> image">
                            <a href="<?php echo $image ?>" data-lightbox="roadtrip">
                                <img src="<?php echo $image ?>" alt="">
                            </a>
                        </div>

                    <?php endwhile; else : endif; ?>

                </div>

            <?php endwhile; ?>
        <?php endif; ?>

    </div>
</div>

<div class="hidden-photos" style="display: none">

    <?php if (have_rows('DobavitGalereyu', $about_page)): ?>
        <?php while (have_rows('DobavitGalereyu', $about_page)): the_row();

            ?>

            <?php if (have_rows('dobavit_foto_hidden')): while (have_rows('dobavit_foto_hidden')) : the_row();
                $image = get_sub_field('vybrat_kartinku');
                ?>

                <div class="image">
                    <a href="<?php echo $image ?>" data-lightbox="roadtrip">
                        <img src="<?php echo $image ?>" alt="">
                    </a>
                </div>

            <?php endwhile; else : endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>

</div>