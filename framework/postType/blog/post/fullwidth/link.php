<?php
/**
 * @package 	WordPress
 * @subpackage 	Pet Rescue
 * @version 	1.1.7
 * 
 * Blog Post Full Width Link Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsms_option = cmsms_get_global_options();


$cmsms_post_link_text = get_post_meta(get_the_ID(), 'cmsms_post_link_text', true);

$cmsms_post_link_address = get_post_meta(get_the_ID(), 'cmsms_post_link_address', true);

if ($cmsms_post_link_text == '') {
	$cmsms_post_link_text = esc_html__('Enter link text', 'pet-rescue');
}

if ($cmsms_post_link_address == '') {
	$cmsms_post_link_address = '#';
}

?>

<!--_________________________ Start Link Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php 
	echo '<div class="cmsms_post_info">' . 
		'<span class="cmsms_post_format_img cmsms_theme_icon_globe"></span>';
		
		if ($cmsms_option[CMSMS_SHORTNAME . '_blog_post_date']) {
			cmsms_post_date('post');
		}
		
		
		if (!post_password_required()) {
			echo '<header class="cmsms_post_header entry-header">' . 
				'<h3 class="cmsms_post_title entry-title">' . 
					'<a href="' . esc_url($cmsms_post_link_address) . '" target="_blank">' . $cmsms_post_link_text . '</a>' . 
				'</h3>' . 
				'<p class="cmsms_post_subtitle">' . $cmsms_post_link_address . '</p>' . 
			'</header>';
		} else {
			echo '<header class="cmsms_post_header entry-header">' . 
				'<h3 class="cmsms_post_title entry-title">' . $cmsms_post_link_text . '</h3>' . 
			'</header>';
		}
		
		
		if (
			$cmsms_option[CMSMS_SHORTNAME . '_blog_post_author'] || 
			$cmsms_option[CMSMS_SHORTNAME . '_blog_post_cat'] || 
			$cmsms_option[CMSMS_SHORTNAME . '_blog_post_tag']
		) {
			echo '<div class="cmsms_post_cont_info">';
			
				cmsms_post_author('post');
				
				cmsms_post_category('post');
				
				cmsms_post_tags('post');
			
			echo '</div>';
		}
	echo '</div>';
	
	
	echo '<div class="cmsms_post_content entry-content">';
		
		the_content();
		
		wp_link_pages(array( 
			'before' => '<div class="subpage_nav" role="navigation">' . '<strong>' . esc_html__('Pages', 'pet-rescue') . ':</strong>', 
			'after' => '</div>', 
			'link_before' => ' [ ', 
			'link_after' => ' ] ' 
		));
		
		echo '<div class="cl"></div>' . 
	'</div>';
?>
</article>
<!--_________________________ Finish Link Article _________________________ -->

