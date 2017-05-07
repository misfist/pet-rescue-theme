<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 * 
 * @cmsms_package 	Pet Rescue
 * @cmsms_version 	1.1.8
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;


/**
 * woocommerce_before_single_product hook
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );


if ( post_password_required() ) {
	echo get_the_password_form();
	return;
}
?>

<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class('cmsms_single_product'); ?>>
	<div class="cmsms_product_left_column">
	<?php 
		woocommerce_show_product_loop_sale_flash();
		
		$availability = $product->get_availability();

		if (esc_attr($availability['class']) == 'out-of-stock') {
			echo apply_filters('woocommerce_stock_html', '<span class="' . esc_attr( $availability['class'] ) . '">' . esc_html( $availability['availability'] ) . '</span>', $availability['availability']);
		}
		
		
		woocommerce_show_product_images();
	?>
	</div>
	<div class="summary entry-summary cmsms_product_right_column">
	<?php 
		woocommerce_template_single_title();
		
		cmsms_woocommerce_rating('cmsms_theme_icon_star_empty', 'cmsms_theme_icon_star_full');
		
		woocommerce_template_single_price();
		
		woocommerce_template_single_excerpt();
		
		woocommerce_template_single_add_to_cart();
		
		woocommerce_template_single_meta();
		
		woocommerce_template_single_sharing();
	?>
	</div>
	<div class="cl"></div>
	<?php
		/**
		 * woocommerce_after_single_product_summary hook
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_output_related_products - 20
		 */
		do_action( 'woocommerce_after_single_product_summary' );
	?>

	<meta itemprop="url" content="<?php the_permalink(); ?>" />

</div><!-- #product-<?php the_ID(); ?> -->

<?php do_action( 'woocommerce_after_single_product' ); ?>

