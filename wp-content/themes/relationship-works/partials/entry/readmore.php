<?php
/**
 * Displays post entry read more
 *
 * @package OceanWP WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Text
$text = esc_html__( 'Continue Reading', 'oceanwp' );

// Apply filters for child theming
$text = apply_filters( 'ocean_post_readmore_link_text', $text ); ?>

<?php do_action( 'ocean_before_blog_entry_readmore' ); ?>

<div class="clr">
    <a class="btn btn-outline-primary" href="<?php the_permalink(); ?>" title="<?php echo esc_attr( $text ); ?>"><?php echo esc_html( $text ); ?> <i class="far fa-angle-right"></i></a>
</div>

<?php do_action( 'ocean_after_blog_entry_readmore' ); ?>