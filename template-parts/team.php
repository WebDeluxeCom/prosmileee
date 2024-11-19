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

<div class="personal-page__section mt60px">
    <div class="default__container">

        <?php if (have_rows('NashiVrachi', $about_page)): ?>
            <?php while (have_rows('NashiVrachi', $about_page)): the_row();

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
                <div class="row">
                    <div class="slider-personal owl-carousel">

                        <?php if (have_rows('DobavitDoktora')): while (have_rows('DobavitDoktora')) : the_row();
                            $sub1 = get_sub_field('vybrat_kartinku');
                            $sub2 = get_sub_field('dobavit_imya');
                            $sub3 = get_sub_field('dobavit_dolzhnost');
                            $sub4 = get_sub_field('dobavit_opyt');
                            $sub5 = get_sub_field('link');
                            ?>

                            <a href="<?php echo $sub5 ?>" class="item">
                                <div class="image">
                                    <img src="<?php echo $sub1 ?>" alt="<?php echo $sub2 ?>">
                                </div>
                                <div class="descr">
                                    <p class="name"><?php echo $sub2 ?></p>
                                    <p class="desc"><?php echo $sub3 ?></p>
                                    <div class="stage"><?php echo $sub4 ?></div>
                                </div>
                            </a>

                        <?php endwhile; else : endif; ?>

                    </div>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>

    </div>
</div>