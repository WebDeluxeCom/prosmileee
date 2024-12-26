<?php get_header();
// Template Name: Thanks
?>

    <main class="page">

        <div class="error-404__page">
			<div class="default__container">
				<div class="row">
					<picture>
						<source srcset="https://fonts.gstatic.com/s/e/notoemoji/latest/1f514/512.webp" type="image/webp">
						<img src="https://fonts.gstatic.com/s/e/notoemoji/latest/1f514/512.gif" alt="🔔" width="32" height="32">
					</picture>
					<h1><?php pll_e('Благодарим за обращение')?></h1>
					<p><?php pll_e('Наши менеджеры ознакомятся с Вашим резюме и свяжутся с вами')?></p>
					<a href="<?php echo get_home_url();?>"><?php pll_e('Вернуться на главную')?></a>
				</div>
			</div>
		</div>

    </main>
<?php get_footer(); ?>