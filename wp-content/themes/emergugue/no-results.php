<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package GeneratePress
 */
 
// No direct access, please
if ( ! defined( 'ABSPATH' ) ) exit;
?>

<section class="no-results not-found">
	<div class="inside-article">
		<?php do_action( 'generate_before_content'); ?>
		<header class="entry-header">
			<h1 class="entry-title"><?php _e( 'No hay nada por acá...', 'generatepress' ); ?></h1>
		</header><!-- .entry-header -->
		<?php do_action( 'generate_after_entry_header'); ?>
		<div class="entry-content">
			
				<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

					<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'generatepress' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

				<?php elseif ( is_search() ) : ?>

					<p><?php _e( 'Lo siento, pero no he encontrado resultados con los términos introducidos. Inténtalo de nuevo con otras palabras...', 'generatepress' ); ?></p>
					<?php get_search_form(); ?>

				<?php else : ?>

					<p><?php _e( 'Parece que no he podido encontrar lo que buscar. Sin embargo, utilizar el buscador te puede ayudar...', 'generatepress' ); ?></p>
					<?php get_search_form(); ?>

				<?php endif; ?>
			
		</div><!-- .entry-content -->
		<?php do_action( 'generate_after_content'); ?>
	</div><!-- .inside-article -->
</section><!-- .no-results -->
