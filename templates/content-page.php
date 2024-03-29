<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package wearethoughtfox
 */
?>
<?php while (have_posts()) : the_post(); ?>
<div class="wrapper">
	<div class="article">
		
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'wearethoughtfox' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'wearethoughtfox' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
</div><!-- .article -->
</div><!-- .wrapper -->
<?php endwhile; ?>