<?php
/**
 * @package 	WordPress
 * @subpackage 	Pet Rescue
 * @version 	1.1.7
 * 
 * Likes Functions
 * Changed by CMSMasters
 * 
 */


function cmsmsLike($show = true) {
	if (class_exists('Cmsms_Content_Composer')) {
		$post_ID = get_the_ID();
		
		
		$ip = $_SERVER['REMOTE_ADDR'];
		
		$ip_name = str_replace('.', '-', $ip);
		
		
		$likes = (get_post_meta($post_ID, 'cmsms_likes', true) != '') ? get_post_meta($post_ID, 'cmsms_likes', true) : '0';
		
		
		$ipPost = new WP_Query(array( 
			'post_type' => 		'cmsms_like', 
			'post_status' => 	'draft', 
			'post_parent' => 	$post_ID, 
			'name' => 			$ip_name 
		));
		
		
		$ipCheck = $ipPost->posts;
		
		
		if (isset($_COOKIE['like-' . $post_ID]) || count($ipCheck) != 0) {
			$counter = '<a href="#" onclick="return false;" id="cmsmsLike-' . $post_ID . '" class="cmsmsLike active cmsms_theme_icon_heart"><span>' . $likes . '</span></a>';
		} else {
			$counter = '<a href="#" onclick="cmsmsLike(' . $post_ID . '); return false;" id="cmsmsLike-' . $post_ID . '" class="cmsmsLike cmsms_theme_icon_heart"><span>' . $likes . '</span></a>';
		}
	} else {
		$counter = '';
	}
	
	
	if ($show != true) {
		return $counter;
	} else {
		echo $counter;
	}
}

