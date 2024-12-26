<?php get_header();
// Template Name: Work
?>

    <main class="page">

        <?php get_template_part('template-parts/pagetitle'); ?>
		
		
		<div class="work-page__section">
			<div class="default__container">
				<div class="row">
					<div class="left">
						<ul>
							<li><?php pll_e('Стоматолог');?></li>
							<li><?php pll_e('Полная / частичная занятость');?></li>
						</ul>
						<ul>
							<li><?php pll_e('Ортодонт');?></li>
							<li><?php pll_e('Полная / частичная занятость');?></li>
						</ul>
						<ul>
							<li><?php pll_e('Стоматолог');?></li>
							<li><?php pll_e('Полная / частичная занятость');?></li>
						</ul>
					</div>
					<div class="right">
						<?php echo do_shortcode('[contact-form-7 id="af1cf69" title="Контактная форма - Контакты"]');?>
					</div>
				</div>
			</div>
		</div>

        <?php get_template_part('template-parts/gallery'); ?>

    </main>
<?php get_footer(); ?>