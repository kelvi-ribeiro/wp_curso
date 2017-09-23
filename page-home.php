<?php get_header(); ?>
<div class="conteudo">
	<main>
		<section class="slide">
			<?php motoPressSlider( "home-slider" ) ?>
		</section>
		<section class="servicos">
			<div class="container">Serviços</div>
		</section>
		<section class="meio">
			<div class="container">
				<div class="row">
					<aside class="barra-lateral col-md-4">
						<?php get_sidebar('home'); ?>
					</aside>
					<div class="noticias col-md-8">
						<div class="row">
							<?php 
							$TAMANHO='col-md-12';
							$OP_CONTENT='destaque';

							$itens = get_categories(array('14','18','28'));

							//echo '<pre>';
							//var_dump($itens);
							//echo '</pre>'
							foreach ($itens as $item):
								$args = array(
									'category__in'=> $item->cat_ID,
									'posts_per_page'=>1
								);

								$consulta = new WP_Query($args);

								if($consulta->have_posts()):
									while($consulta->have_posts()):
										$consulta->the_post();
										?>
											<div class="<?php echo $TAMANHO; ?>">
											<?php get_template_part('content',$OP_CONTENT);?>
											</div>
										

										<?php
										$TAMANHO = 'col-md-6';
										$OP_CONTENT = 'secundaria';

									endwhile;
									wp_reset_postdata();
								endif;

								endforeach;
							
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



