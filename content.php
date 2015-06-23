<?php
/**
 * @package Graphy
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() && ! is_search() ): ?>
		<div class="post-thumbnail" style="background: url('<?php $thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'round' ); echo $thumb_url[0]; ?>') no-repeat;">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('circle'); ?></a>
		</div>
		<?php endif; ?>
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<?php graphy_header_meta(); ?>

	</header><!-- .entry-header -->
	<?php if ( 'content' == get_theme_mod( 'graphy_content' ) && ! ( is_search() || is_archive() ) ) : ?>
	<div class="entry-content">
		<?php the_content( __( '<span class="continue-reading">Continue reading &rarr;</span>', 'graphy' ) ); ?>
		<?php wp_link_pages( array(	'before' => '<div class="page-links">' . __( 'Pages:', 'graphy' ), 'after'  => '</div>', ) ); ?>
	</div><!-- .entry-content -->
	<?php else : ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
		<a href="<?php the_permalink(); ?>" rel="bookmark"><?php _e( '<span class="continue-reading">Continue reading &rarr;</span>', 'graphy' ); ?></a>
	</div><!-- .entry-summary -->
	<?php endif; ?>
</article><!-- #post-## -->
