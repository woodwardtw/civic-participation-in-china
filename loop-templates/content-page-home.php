<?php
/**
 * Partial template for content in home.php
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content row">
		<div class="main-text col-md-7">
			<?php
			the_content();
			?>
		</div>		
	</div><!-- .entry-content -->

	<footer class="entry-footer row">
			<div class="col-md-5 offset-md-7 freeze-it">
				<div class="giant">CPCS</div>
				<div class="tag-line">Civic Participation in China Survey</div>
			</div>

		<?php understrap_edit_post_link(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
