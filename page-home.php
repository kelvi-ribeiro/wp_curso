<?php get_header(); ?>
<div class="conteudo">
	<main>
		<section class="slide">
			<div class="container">Slide</div>
		</section>
		<section class="servicos">
			<div class="container">Serviços</div>
		</section>
		<section class="meio">
			<div class="container">
				<div class="row">
					<aside class="barra-lateral col-md-3">
						<?php get_sidebar('home'); ?>
					</aside>
					<div class="noticias col-md-9">
						<div class="row">
							<?php 

							$destaque = new WP_Query('post_type=post&posts_per_page=1&cat=14');

							if($destaque->have_posts()):
								while($destaque->have_posts()):
									$destaque->the_post();
									?>
									<div class="col-md-12">
									<?php get_template_part('content','destaque') ?>
									</div>
									<?php
								endwhile;
								wp_reset_postdata();
							else:
						 ?>
							<p>Nao tem nada ainda pra mostrar</p>
						<?php 
						endif;
						?>

						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="mapa">
			<div class="container">Mapa</div>
		</section>
	</main>	
</div>
<?php get_footer(); ?>



