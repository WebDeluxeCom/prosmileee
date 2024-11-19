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

<?php if (have_rows('DobavitGalereyu', $about_page)): ?>
    <?php while (have_rows('DobavitGalereyu', $about_page)): the_row();

        // Get sub field values.
        $title = get_sub_field('dobavit_zagolovok');
        $descr = get_sub_field('dobavit_opisanie');

        ?>

        <div class="smile-page__section mt60px">
            <div class="default__container">
                <div class="title-default__section title-default__section--row">
                    <p class="title"><?php echo $title; ?></p>
                    <p class="descr descr-icon">
                        <a href="https://www.instagram.com/prosmile_hambaravi/" target="_blank">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/icons/instagram.png" alt="">
                        </a>
                        <span><?php echo $descr; ?></span>
                    </p>
                </div>
                <!--<div class="slider-images owl-carousel mobile">
					<?php if (have_rows('dobavit_foto')): while (have_rows('dobavit_foto')) : the_row();
                    $image = get_sub_field('vybrat_kartinku');
                    ?>

    				<div class="image" data-aos="zoom-in" data-aos-delay="100">
						<a href="<?php echo $image ?>" data-lightbox="roadtrip">
							<img src="<?php echo $image ?>" alt="">
						</a>
					</div>

    			    <?php endwhile; else : endif; ?>
				</div>
				<div class="row desktop">
					<?php if (have_rows('dobavit_foto')): while (have_rows('dobavit_foto')) : the_row();
                    $image = get_sub_field('vybrat_kartinku');
                    global $a;
                    $a++;
                    ?>

    				<div class="div<?php echo $a ?> image" data-aos="zoom-in" data-aos-delay="100">
						<a href="<?php echo $image ?>" data-lightbox="roadtrip">
							<img src="<?php echo $image ?>" alt="">
						</a>
					</div>

    			    <?php endwhile; else : endif; ?>
				</div>-->
                <?php echo do_shortcode('[insta-gallery id="0"]'); ?>
            </div>
        </div>

    <?php endwhile; ?>
<?php endif; ?>