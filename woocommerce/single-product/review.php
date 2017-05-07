<?php
/**
 * Review Comments Template
 *
 * Closing li is left out on purpose!.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/review.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see     http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.0
 * 
 * @cmsms_package 	Pet Rescue
 * @cmsms_version 	1.1.6
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
<li itemprop="reviews" itemscope itemtype="http://schema.org/Review" <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">

	<div id="comment-<?php comment_ID(); ?>" class="comment_container comment-body">
		<div class="alignleft">
			<?php echo get_avatar( $comment, apply_filters( 'woocommerce_review_gravatar_size', '100' ), '', get_comment_author() ); ?>
		</div>
		<div class="comment-text comment-content">
		<?php 
			cmsms_woocommerce_rating('cmsms_theme_icon_star_empty', 'cmsms_theme_icon_star_full', true, $comment->comment_ID); 
		?>
			<time class="published" itemprop="datePublished" datetime="<?php echo get_comment_date( 'c' ); ?>">
				<?php echo get_comment_date( get_option( 'date_format' ), 'woocommerce' ); ?>
			</time>
			<h4 class="fn" itemprop="author"><?php comment_author(); ?></h4>
			<div class="cl"></div>
		<?php
			if ( get_option( 'woocommerce_review_rating_verification_label' ) === 'yes' )
				if ( wc_customer_bought_product( $comment->comment_author_email, $comment->user_id, $comment->comment_post_ID ) )
					echo '<em class="verified">(' . __( 'verified owner', 'woocommerce' ) . ')</em> ';
		?>
			<div itemprop="description" class="description"><?php comment_text(); ?></div>
		<?php 
			if ($comment->comment_approved == '0') {
				echo '<p class="meta"><em>' . __( 'Your comment is awaiting approval', 'woocommerce' ) . '</em></p>';
			}
		?>
		</div>
		<div class="cl"></div>
	</div>
