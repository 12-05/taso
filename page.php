<?php 

get_header(); ?>



<div id="main-content" class="main-content">

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php if( have_rows('segmente') ): ?>
    <?php while( have_rows('segmente') ): the_row(); ?>
            <?php include get_stylesheet_directory().'/layouts/'.get_row_layout().'.php'; ?>
    <?php endwhile; ?>
<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
	
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();