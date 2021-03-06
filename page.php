<?php
/**
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
 
$pageRoot = getRoot($post);
$section = get_post($pageRoot);
$isRoot = $section->ID == $post->ID;


get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
		
		<?php get_template_part('inc/breadcrumbs', 'child'); ?>

		<div id="stage" class="inner group" role="main">

			<?php get_template_part('inc/postHead'); ?>
			
			<div id="content" class="allContent group">

				<?php get_template_part( 'inc/content', 'page' ); ?>

			</div>
		
		</div><!-- end div#stage -->
		
	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>