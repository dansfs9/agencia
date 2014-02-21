<?php get_header(); ?>

<section class="content">

	<?php get_template_part('inc/page-title'); ?>
	
	<div class="pad group">		
		
		<div class="notebox">
			<?php get_search_form(); ?>
		</div>
		
		<div class="entry">
			<p><?php _e( 'A página que você está tentando acessar não existe, ou foi removida. Por favor use o menu ou a busca para encontrar o que precisa.', 'hueman' ); ?></p>
		</div>
		
	</div><!--/.pad-->
	
</section><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>