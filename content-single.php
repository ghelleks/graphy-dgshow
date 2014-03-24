<?php
/**
 * @package Graphy
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php graphy_header_meta(); ?>
<?php /* GH: got rid of thumbnail here */ ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array(	'before' => '<div class="page-links">' . __( 'Pages:', 'graphy' ), 'after'  => '</div>', ) ); ?>
	</div><!-- .entry-content -->
	<?php graphy_footer_meta(); ?>
</article><!-- #post-## -->
