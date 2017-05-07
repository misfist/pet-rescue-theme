<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.2
 * 
 * @cmsms_package 	Pet Rescue
 * @cmsms_version 	1.1.8
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $woocommerce, $product;


echo '<div class="images cmsms_product_images">';
	if (method_exists($product, 'get_available_variations')) {
		$cmsms_product_variable_items = $product->get_available_variations();
		
		
		echo '<div class="dn">';
		foreach ($cmsms_product_variable_items as $cmsms_product_variable_item) {
			if ($cmsms_product_variable_item['image_link'] != '') {
				echo '<a href="' . esc_url($cmsms_product_variable_item['image_link']) . '" itemprop="image" title="' . esc_attr($cmsms_product_variable_item['image_title']) . '" rel="ilightbox[cmsms_product_gallery]"></a>';
			}
		}
		echo '</div>';
	}
	
	
	if (has_post_thumbnail()) {
		$image_title = 	esc_attr(get_the_title(get_post_thumbnail_id()));
		$image_link = 	wp_get_attachment_url(get_post_thumbnail_id());
		$image = 		get_the_post_thumbnail($post->ID, apply_filters('single_product_large_thumbnail_size', 'shop_single'), array('title' => $image_title));
		
		
		echo apply_filters('woocommerce_single_product_image_html', sprintf('<a href="%s" itemprop="image" class="woocommerce-main-image cmsms_product_image" title="%s" rel="ilightbox[cmsms_product_gallery]">%s</a>', $image_link, $image_title, $image), $post->ID);
	} else {
		echo apply_filters('woocommerce_single_product_image_html', sprintf('<img src="%s" alt="%s" />', wc_placeholder_img_src(), esc_html__('Placeholder', 'woocommerce')), $post->ID);
	}
	
	
	do_action('woocommerce_product_thumbnails');

echo '</div>';

