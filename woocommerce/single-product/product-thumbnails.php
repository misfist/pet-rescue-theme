<?php
/**
 * Single Product Thumbnails
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-thumbnails.php.
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
 * @version     3.0.2
 * 
 * @cmsms_package 	Pet Rescue
 * @cmsms_version 	1.1.8
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $product, $woocommerce;

$attachment_ids = $product->get_gallery_image_ids();

if ( $attachment_ids ) {
	echo '<div class="thumbnails cmsms_product_thumbs">';
		foreach ($attachment_ids as $attachment_id) {
			$image_link = wp_get_attachment_url($attachment_id);
			
			if (!$image_link) {
				continue;
			}
			
			$image = wp_get_attachment_image($attachment_id, apply_filters('single_product_small_thumbnail_size', 'shop_thumbnail'));
			$image_title = esc_attr(get_the_title($attachment_id));
			
			echo apply_filters('woocommerce_single_product_image_thumbnail_html', sprintf('<a href="%s" class="cmsms_product_thumb" title="%s" rel="ilightbox[cmsms_product_gallery]">%s</a>', $image_link, $image_title, $image), $attachment_id, $post->ID);
		}
	echo '</div>';
}
