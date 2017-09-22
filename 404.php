<?php get_header(); get_template_part('cabecalho-img' ); ?>



<div class="conteudo">
	<main>
		<section class="meio">
			<div class="container">
				<div class="row">

					<div class="404 col-md-9">

						<header>
							<h1>Página não encontrada</h1>
							<p>Infelizmente,a página que você tentou acessar não existe neste site!</p>



						</header>
						<div class="erro">
							<p>Que tal fazer uma pesquisa?</p>
							<?php get_search_form( ); ?>
							
							<?php the_widget('WP_Widget_Recent_Posts',array('title'=>'Últimos posts','number'=>3)) ?>

						</div>



					</div>
					
				</div>
			</div>
		</section>

	</main>	
</div>
<?php get_footer(); ?>
