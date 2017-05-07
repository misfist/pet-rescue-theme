<?php
/**
 * @package 	WordPress
 * @subpackage 	Pet Rescue
 * @version 	1.1.8
 * 
 * Theme Primary Color Schemes Rules
 * Created by CMSMasters
 * 
 */


function cmsms_theme_colors_primary() {
	$cmsms_option = cmsms_get_global_options();
	
	
	$cmsms_color_schemes = cmsms_color_schemes_list();
	
	
	unset($cmsms_color_schemes['header']);
	
	unset($cmsms_color_schemes['header_top']);
	
	unset($cmsms_color_schemes['header_bottom']);
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Pet Rescue
 * @version 	1.1.8
 * 
 * Theme Primary Color Schemes Rules
 * Created by CMSMasters
 * 
 */

";
	
	
	foreach ($cmsms_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsms_color_scheme_{$scheme} " : '');
		
		
		$cmsms_heading = explode('|', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_heading']);
		
		$cmsms_bg = explode('|', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']);
		
		$cmsms_bd = explode('|', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']);
		
		
		$custom_css .= "
/***************** Start {$title} Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	" . (($scheme == 'default') ? "body," : '') . (($scheme != 'default') ? ".cmsms_color_scheme_{$scheme}," : '') . "
	{$rule}.footer_inner, 
	{$rule}.tweet_time:before,
	{$rule}input[type=text],
	{$rule}input[type=search],
	{$rule}input[type=number],
	{$rule}input[type=email],
	{$rule}input[type=password],
	{$rule}input[type=submit],
	{$rule}textarea,
	{$rule}select,
	{$rule}option,
	{$rule}.contact_widget_email:before,
	{$rule}.contact_widget_phone:before,
	{$rule}.adress_wrap:before,
	{$rule}.cmsms_pricing_table .cmsms_period, 
	{$rule}.cmsms_counters .cmsms_counter_wrap .cmsms_counter .cmsms_counter_inner .cmsms_counter_title, 
	{$rule}.widget_nav_menu li a:before {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_color']) . "
	}
	
	{$rule}input::-webkit-input-placeholder {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_color']) . "
	}
	{$rule}input:-moz-placeholder {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}a,
	{$rule}h1 a:hover,
	{$rule}h2 a:hover,
	{$rule}h3 a:hover,
	{$rule}h4 a:hover,
	{$rule}h5 a:hover,
	{$rule}h6 a:hover,
	{$rule}.color_2,
	{$rule}.footer_inner a,
	{$rule}.cmsms_icon_list_items.cmsms_color_type_icon .cmsms_icon_list_icon:before,
	{$rule}.img_placeholder_small:hover,
	{$rule}q:before,
	{$rule}blockquote:before,
	{$rule}.cmsms_sitemap_wrap .cmsms_sitemap > li > a:hover, 
	{$rule}.cmsms_sitemap_wrap .cmsms_sitemap > li > ul > li > a:hover, 
	{$rule}.cmsms_sitemap_wrap .cmsms_sitemap_category > li > a:hover, 
	{$rule}.post .cmsms_post_header .cmsms_post_title a, 
	{$rule}.tribe_events .cmsms_post_header .cmsms_post_title a, 
	{$rule}.cmsmsLike:hover:before,
	{$rule}.cmsmsLike.active:before,
	{$rule}.cmsms_post_comments:hover:before,
	{$rule}.cmsms_search_post_comments:hover:before,
	{$rule}.cmsms_slider_post_comments:hover:before,
	{$rule}.cmsms_project_comments:hover:before,
	{$rule}.cmsms_slider_project_comments:hover:before,
	{$rule}.cmsms_profile_comments:hover:before, 
	{$rule}.cmsms_read_more:hover, 
	{$rule}.post_nav .cmsms_prev_post a:hover, 
	{$rule}.post_nav .cmsms_next_post a:hover, 
	{$rule}#cancel-comment-reply-link, 
	{$rule}.portfolio .project .project_outer .project_inner .cmsms_project_header .cmsms_project_title a, 
	{$rule}.cmsms_profile .entry-title a, 
	{$rule}.cmsms_profile .pl_social_list li a:hover, 
	{$rule}.cmsms_posts_slider .post .cmsms_slider_post_cont .cmsms_slider_post_header .cmsms_slider_post_title a, 
	{$rule}.cmsms_posts_slider .project .slider_project_outer .slider_project_inner .cmsms_slider_project_header .cmsms_slider_project_title a {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}mark, 
	{$rule}.cmsms_table tr.cmsms_table_row_header td,
	{$rule}.cmsms_table tr.cmsms_table_row_header th,
	{$rule}.cmsms_icon_box.cmsms_icon_box_top:before,
	{$rule}.cmsms_icon_box.cmsms_icon_box_left_top:before,
	{$rule}.cmsms_icon_box.cmsms_icon_box_left:before,
	{$rule}.cmsms_tabs .cmsms_tabs_list .cmsms_tabs_list_item.current_tab > a,
	{$rule}.cmsms_tabs .cmsms_tabs_list .cmsms_tabs_list_item > a:hover,
	{$rule}.cmsms_icon_list_items.cmsms_color_type_bg .cmsms_icon_list_item .cmsms_icon_list_icon,
	{$rule}.cmsms_icon_list_items.cmsms_color_type_icon .cmsms_icon_list_item:hover .cmsms_icon_list_icon,
	{$rule}.cmsms_stats.stats_mode_bars .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner,
	{$rule}.button:hover,
	{$rule}.current > .button,
	{$rule}.button.current,
	{$rule}input[type=submit]:hover,
	{$rule}input[type=button]:hover,
	{$rule}button:hover,
	{$rule}.related_posts > ul li > a:hover,
	{$rule}.related_posts > ul li > a.current,
	{$rule}.cmsms_wrap_pagination ul li .page-numbers:hover, 
	{$rule}.cmsms_dropcap.type2, 
	{$rule}.cmsms_wrap_pagination ul li .page-numbers.current, 
	{$rule}.responsive_nav, 
	{$rule}.cmsms_header_cart_link, 
	{$rule}.cmsms_button:hover,
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsms_table tr.cmsms_table_row_header td,
	{$rule}.cmsms_table tr.cmsms_table_row_header th,
	{$rule}.cmsms_table tr.cmsms_table_row_header td:first-child,
	{$rule}.cmsms_table tr.cmsms_table_row_header th:first-child,
	{$rule}.cmsms_table tr.cmsms_table_row_header td:last-child,
	{$rule}.cmsms_table tr.cmsms_table_row_header th:last-child,
	{$rule}.cmsms_tabs .cmsms_tabs_list .cmsms_tabs_list_item.current_tab > a,
	{$rule}.cmsms_tabs .cmsms_tabs_list .cmsms_tabs_list_item > a:hover,
	{$rule}.cmsms_icon_list_items.cmsms_color_type_border .cmsms_icon_list_item .cmsms_icon_list_icon:after,
	{$rule}.related_posts > ul li > a:hover,
	{$rule}.related_posts > ul li > a.current {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Secondary Color */
	{$rule}.post .cmsms_post_info .cmsms_post_format_img, 
	{$rule}.tribe_events .cmsms_post_info .cmsms_post_format_img, 
	{$rule}.cmsms_button,
	{$rule}.cmsms_wrap_arrow, 
	{$rule}.cmsms_toggles .cmsms_toggle_wrap:hover .cmsms_toggle_plus, 
	{$rule}.cmsms_toggles .cmsms_toggle_wrap.current_toggle .cmsms_toggle_plus, 
	{$rule}.owl-buttons > div:hover, 
	{$rule}.owl-pagination .owl-page:hover, 
	{$rule}.owl-pagination .owl-page.active, 
	{$rule}.cmsms_search .cmsms_search_post .cmsms_search_post_number {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_second']) . "
	}
	
	{$rule}.cmsms_toggles .cmsms_toggle_wrap:hover .cmsms_toggle_plus, 
	{$rule}.cmsms_toggles .cmsms_toggle_wrap.current_toggle .cmsms_toggle_plus, 
	{$rule}.owl-buttons > div:hover, 
	{$rule}.owl-pagination .owl-page:hover, 
	{$rule}.owl-pagination .owl-page.active, 
	{$rule}.cmsms_hover_slider .cmsms_hover_slider_thumbs > li a:hover, 
	{$rule}.cmsms_hover_slider .cmsms_hover_slider_thumbs > li.hovered_item a {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_second']) . "
	}
	/* Finish Secondary Color */
	
	
	/* Start Highlight Color */
	{$rule}a:hover,
	{$rule}.footer_inner a:hover,
	{$rule}.footer_inner nav > div > ul > li:hover > a,
	{$rule}.footer_inner nav > div > ul > li.current-menu-item > a,
	{$rule}.footer_inner nav > div > ul > li.current_page_item > a,
	{$rule}.footer_inner nav > div > ul > li.current-menu-ancestor > a,
	{$rule}.cmsms_toggles .cmsms_toggles_filter > a.current_filter,
	{$rule}.widget_nav_menu ul li.current-menu-item a,
	{$rule}.widget_nav_menu ul li.current_page_item a,
	{$rule}.img_placeholder_small,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=\"checkbox\"] + span.wpcf7-list-item-label:after,
	{$rule}.cmsms-form-builder .check_parent input[type=\"checkbox\"]+label:after, 
	{$rule}.post .cmsms_post_info .cmsms_post_date, 
	{$rule}.tribe_events .cmsms_post_info .cmsms_post_date, 
	{$rule}.post .cmsms_post_cont_info, 
	{$rule}.tribe_events .cmsms_post_cont_info, 
	{$rule}.cmsms_search_post_cont_info, 
	{$rule}.cmsms_search_post_date, 
	{$rule}.post_comments .commentlist .comment-body .comment-content .published, 
	{$rule}#cancel-comment-reply-link:hover, 
	{$rule}.comment-respond .comment-form .comment-notes, 
	{$rule}.comment-respond .comment-form .logged-in-as, 
	{$rule}.portfolio .project .project_outer .project_inner .cmsms_project_cont_info, 
	{$rule}.cmsms_profile .pl_subtitle, 
	{$rule}.profiles.opened-article .profile .cmsms_profile_header .cmsms_profile_subtitle, 
	{$rule}.cmsms_posts_slider .post .cmsms_slider_post_cont .cmsms_slider_post_date, 
	{$rule}.cmsms_posts_slider .post .cmsms_slider_post_cont .cmsms_slider_post_cont_info, 
	{$rule}.cmsms_posts_slider .project .slider_project_outer .slider_project_inner .cmsms_slider_project_cont_info {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.cmsms-form-builder .check_parent input[type=\"radio\"]+label:after,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=\"radio\"] + span.wpcf7-list-item-label:after {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	{$rule}h1,
	{$rule}h2,
	{$rule}h3,
	{$rule}h4,
	{$rule}h5,
	{$rule}h6,
	{$rule}h1 a,
	{$rule}h2 a,
	{$rule}h3 a,
	{$rule}h4 a,
	{$rule}h5 a,
	{$rule}h6 a,
	{$rule}.search_bar_wrap button[type=submit][class^=\"cmsms-icon-\"],
	{$rule}.search_bar_wrap button[type=submit][class*=\" cmsms-icon-\"],
	{$rule}.search_bar_wrap button[type=submit][class^=\"cmsms_theme_icon_\"],
	{$rule}.search_bar_wrap button[type=submit][class*=\" cmsms_theme_icon_\"],
	" . (($scheme == 'default') ? "#slide_top:hover," : '') . "
	{$rule}.cmsms_notice .notice_close,
	{$rule}.cmsms_icon_box.cmsms_icon_top:before,
	{$rule}.cmsms_tabs .cmsms_tabs_list .cmsms_tabs_list_item > a,
	{$rule}.related_posts > ul li > a,
	{$rule}.cmsms_img_rollover_wrap .img_placeholder:before, 
	{$rule}#wp-calendar thead th,
	{$rule}.cmsms_pricing_table .cmsms_pricing_item .cmsms_price_wrap .cmsms_currency, 
	{$rule}.cmsms_pricing_table .cmsms_pricing_item .cmsms_price_wrap .cmsms_price, 
	{$rule}.cmsms_pricing_table .cmsms_pricing_item .cmsms_price_wrap .cmsms_coins,
	{$rule}.cmsms_sitemap_wrap .cmsms_sitemap > li > a, 
	{$rule}.cmsms_sitemap_wrap .cmsms_sitemap > li > ul > li > a, 
	{$rule}.cmsms_sitemap_wrap .cmsms_sitemap > li > ul > li > ul li a:before, 
	{$rule}.cmsms_sitemap_wrap .cmsms_sitemap_category > li > a, 
	{$rule}.cmsms_sitemap_wrap .cmsms_sitemap_category > li > ul li a:before, 
	{$rule}.cmsms_sitemap_wrap .cmsms_sitemap_archive > li a:before, 
	{$rule}.post .cmsms_post_header .cmsms_post_title a:hover, 
	{$rule}.tribe_events .cmsms_post_header .cmsms_post_title a:hover, 
	{$rule}.cmsmsLike,
	{$rule}.cmsms_post_comments,
	{$rule}.cmsms_search_post_comments,
	{$rule}.cmsms_slider_post_comments,
	{$rule}.cmsms_project_comments,
	{$rule}.cmsms_slider_project_comments,
	{$rule}.cmsms_profile_comments,
	{$rule}.cmsmsLike:hover,
	{$rule}.cmsms_post_comments:hover,
	{$rule}.cmsms_search_post_comments:hover,
	{$rule}.cmsms_slider_post_comments:hover,
	{$rule}.cmsms_project_comments:hover,
	{$rule}.cmsms_slider_project_comments:hover,
	{$rule}.cmsms_profile_comments:hover, 
	{$rule}.cmsms_read_more, 
	{$rule}.post.format-quote .cmsms_quote_author, 
	{$rule}.post.format-link .cmsms_post_header .cmsms_post_subtitle, 
	{$rule}.cmsms_button, 
	{$rule}.post_nav .cmsms_prev_post a, 
	{$rule}.post_nav .cmsms_next_post a, 
	{$rule}.portfolio .project .project_outer .project_inner .cmsms_project_header .cmsms_project_title a:hover, 
	{$rule}.cmsms_profile .entry-title a:hover, 
	{$rule}.cmsms_profile .pl_social_list li a, 
	{$rule}.cmsms_breadcrumbs .cmsms_breadcrumbs_inner, 
	{$rule}.cmsms_toggles .cmsms_toggle_wrap .cmsms_toggle_title > a, 
	{$rule}.cmsms_posts_slider .post .cmsms_slider_post_cont .cmsms_slider_post_header .cmsms_slider_post_title a:hover, 
	{$rule}.cmsms_posts_slider .post .cmsms_slider_post_cont .cmsms_slider_post_quote_content, 
	{$rule}.cmsms_posts_slider .post .cmsms_slider_post_cont .cmsms_slider_post_quote_author, 
	{$rule}.cmsms_posts_slider .post .cmsms_slider_post_cont .cmsms_slider_post_header .cmsms_slider_post_subtitle, 
	{$rule}.cmsms_posts_slider .post.format-aside .cmsms_slider_post_cont .cmsms_slider_post_content,
	{$rule}.cmsms_posts_slider .post.format-status .cmsms_slider_post_cont .cmsms_slider_post_content, 
	{$rule}.cmsms_posts_slider .project .slider_project_outer .slider_project_inner .cmsms_slider_project_header .cmsms_slider_project_title a:hover {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.cmsms_icon_list_items .cmsms_icon_list_item .cmsms_icon_list_icon,
	{$rule}.cmsms_stats.stats_mode_circles .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner,
	{$rule}.button,
	{$rule}input[type=submit],
	{$rule}input[type=button],
	{$rule}button,
	{$rule}.cmsms_prev_arrow,
	{$rule}.cmsms_next_arrow,
	{$rule}.cmsms_wrap_pagination ul li .page-numbers, 
	{$rule}.responsive_nav:hover, 
	{$rule}.responsive_nav.active, 
	{$rule}.cmsms_header_cart_link:hover, 
	{$rule}.cmsms_toggles .cmsms_toggle_wrap .cmsms_toggle_plus > span {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}input[type=text]:focus,
	{$rule}input[type=search]:focus,
	{$rule}input[type=email]:focus,
	{$rule}input[type=password]:focus,
	{$rule}textarea:focus,
	{$rule}select:focus,
	{$rule}.cmsms_prev_arrow:before,
	{$rule}.cmsms_next_arrow:before,
	{$rule}.cmsms_prev_arrow:after,
	{$rule}.cmsms_next_arrow:after,
	{$rule}.cmsms_prev_arrow span:before,
	{$rule}.cmsms_next_arrow span:before,
	{$rule}.cmsms_prev_arrow span:after,
	{$rule}.cmsms_next_arrow span:after {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}mark, 
	{$rule}.cmsms_table tr.cmsms_table_row_header td,
	{$rule}.cmsms_table tr.cmsms_table_row_header th,
	" . (($scheme == 'default') ? "#slide_top," : '') . "
	{$rule}.cmsms_icon_box.cmsms_icon_box_left_top:before,
	{$rule}.cmsms_icon_box.cmsms_icon_box_left:before,
	{$rule}.cmsms_icon_box.cmsms_icon_box_top:before,
	{$rule}.cmsms_tabs .cmsms_tabs_list .cmsms_tabs_list_item.current_tab > a,
	{$rule}.cmsms_tabs .cmsms_tabs_list .cmsms_tabs_list_item > a:hover,
	{$rule}.cmsms_icon_list_items.cmsms_color_type_border .cmsms_icon_list_item .cmsms_icon_list_icon:before,
	{$rule}.cmsms_stats.stats_mode_bars .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner,
	{$rule}.cmsms_stats.stats_mode_circles .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner,
	{$rule}.cmsms_button:hover,
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button,
	{$rule}.button,
	{$rule}.button:hover,
	{$rule}input[type=submit],
	{$rule}input[type=submit]:hover,
	{$rule}input[type=button],
	{$rule}input[type=button]:hover,
	{$rule}button,
	{$rule}button:hover,
	{$rule}.related_posts > ul li > a:hover,
	{$rule}.related_posts > ul li > a.current, 
	{$rule}.cmsms_wrap_pagination ul li .page-numbers, 
	{$rule}.cmsms_dropcap.type2, 
	{$rule}.responsive_nav:before,
	{$rule}.cmsms_header_cart_link:before,
	{$rule}.post .cmsms_post_info .cmsms_post_format_img, 
	{$rule}.tribe_events .cmsms_post_info .cmsms_post_format_img, 
	{$rule}.cmsms_img_rollover_wrap .cmsms_img_rollover .cmsms_image_link, 
	{$rule}.cmsms_img_rollover_wrap .cmsms_img_rollover .cmsms_open_link {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	" . (($scheme == 'default') ? "body," : '') . (($scheme != 'default') ? ".cmsms_color_scheme_{$scheme}," : '') . "
	{$rule}input[type=text]:focus,
	{$rule}input[type=search]:focus,
	{$rule}input[type=number]:focus,
	{$rule}input[type=email]:focus,
	{$rule}input[type=password]:focus,
	{$rule}textarea:focus,
	{$rule}select:focus,
	" . (($scheme == 'default') ? ".middle_inner," : '') . "
	" . (($scheme != 'default') ? "{$rule}.bottom_bg," : '') . "
	{$rule}.footer_bg,
	" . (($scheme == 'default') ? "#slide_top:hover," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer," : '') . "
	{$rule}.cmsms_notice .notice_close,
	{$rule}.cmsms_wrap_pagination ul li .page-numbers > span, 
	{$rule}.cmsms_breadcrumbs, 
	{$rule}.cmsms_wrap_arrow > span, 
	{$rule}.cmsms_toggles .cmsms_toggle_wrap .cmsms_toggle_plus, 
	{$rule}.cmsms_toggles .cmsms_toggle_wrap:hover .cmsms_toggle_plus > span, 
	{$rule}.cmsms_toggles .cmsms_toggle_wrap.current_toggle .cmsms_toggle_plus > span {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_wrap_pagination ul li .page-numbers span:before,
	{$rule}.cmsms_wrap_pagination ul li .page-numbers span:after, 
	{$rule}.cmsms_wrap_arrow span:before, 
	{$rule}.cmsms_wrap_arrow span:after {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	{$rule}.cmsms_icon_list_items.cmsms_color_type_icon .cmsms_icon_list_icon_wrap,
	{$rule}.current > .button,
	{$rule}.button.current {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}input[type=text],
	{$rule}input[type=search],
	{$rule}input[type=number],
	{$rule}input[type=email],
	{$rule}input[type=password],
	{$rule}textarea,
	{$rule}select,
	{$rule}option,
	{$rule}.cmsms_table tr.cmsms_table_row_footer td,
	{$rule}.cmsms_table tr.cmsms_table_row_footer th,
	{$rule}.search_bar_wrap,
	{$rule}.search_bar_wrap input[type=text],
	{$rule}.search_bar_wrap input[type=text]:focus,
	" . (($scheme == 'default') ? "{$rule}.headline_outer," : '') . "
	" . (($scheme == 'default') ? "{$rule}.bottom_bg," : '') . "
	{$rule}.cmsms_featured_block,
	{$rule}.widget_nav_menu ul li a:hover,
	{$rule}.widget_nav_menu ul li.current-menu-item > a,
	{$rule}.widget_nav_menu ul li.current_page_item > a,
	{$rule}.cmsms_icon_box.cmsms_icon_box_top,
	{$rule}.cmsms_icon_box.cmsms_icon_box_left,
	{$rule}.cmsms_icon_list_items.cmsms_color_type_icon .cmsms_icon_list_icon,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=\"checkbox\"] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsms-form-builder .check_parent input[type=\"checkbox\"]+label:before,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=\"radio\"] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsms-form-builder .check_parent input[type=\"radio\"]+label:before,
	{$rule}.post .wp-caption, 
	{$rule}.tribe_events .wp-caption, 
	{$rule}.gallery .gallery-item .gallery-icon a[data-caption],
	{$rule}.gallery .gallery-item .gallery-caption,
	{$rule}.cmsms_gallery li.cmsms_caption figure,
	{$rule}.cmsms_img.with_caption,
	{$rule}.related_posts > ul li > a,
	{$rule}.related_posts .related_posts_content .related_posts_content_tab .rel_post_content figure.alignleft, 
	{$rule}.cmsms_tabs .cmsms_tabs_list .cmsms_tabs_list_item > a,
	{$rule}.cmsms_profile.vertical .profile .pl_img .pl_noimg,
	{$rule}.tweet_list li,
	{$rule}.cmsms_toggles.toggles_mode_accordion .cmsms_toggle_wrap, 
	{$rule}.cmsms_clients_slider .cmsms_clients_item:hover, 
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Block Elements Background Color */
	{$rule}.cmsms_tabs.tabs_mode_tab .cmsms_tabs_list .cmsms_tabs_list_item.current_tab > a,
	{$rule}.cmsms_tabs.tabs_mode_tab .cmsms_tabs_list .cmsms_tabs_list_item > a:hover {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg_box']) . "
	}
	
	{$rule}.post .cmsms_post_cont, 
	{$rule}.tribe_events .cmsms_post_cont, 
	{$rule}.post_nav, 
	{$rule}.about_author .about_author_inner, 
	{$rule}.related_posts .related_posts_content, 
	{$rule}.post_comments .commentlist .comment-body, 
	{$rule}.portfolio .project .project_outer, 
	{$rule}.portfolio.puzzle .project .project_outer .project_inner, 
	{$rule}.cmsms_profile.horizontal .profile, 
	{$rule}.cmsms_toggles.toggles_mode_accordion .cmsms_toggle_wrap.current_toggle, 
	{$rule}.cmsms_tabs.tabs_mode_tab .cmsms_tabs_wrap,
	{$rule}.cmsms_tabs.lpr .cmsms_tabs_wrap, 
	{$rule}.cmsms_toggles.toggles_mode_accordion .cmsms_toggle_wrap:hover .cmsms_toggle_plus > span, 
	{$rule}.cmsms_toggles.toggles_mode_accordion .cmsms_toggle_wrap.current_toggle .cmsms_toggle_plus > span, 
	{$rule}.cmsms_quotes_slider .quote_content, 
	{$rule}.owl-buttons > div, 
	{$rule}.owl-buttons > div:hover > span, 
	{$rule}.owl-pagination .owl-page, 
	{$rule}.quote_grid, 
	{$rule}.cmsms_clients_slider .cmsms_clients_item, 
	{$rule}.cmsms_pricing_item {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg_box']) . "
	}
	
	{$rule}.cmsms_quotes_slider .quote_content:after, 
	{$rule}.owl-buttons > div:hover span:before, 
	{$rule}.owl-buttons > div:hover span:after {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg_box']) . "
	}
	/* Finish Block Elements Background Color */
	
	
	/* Start Borders Color */
	{$rule}.content_wrap:before,
	{$rule}.cmsms_profile.vertical .profile:before,
	{$rule}.cmsms_icon_list_items.cmsms_icon_list_type_block .cmsms_icon_list_item:before,
	{$rule}.cmsms_sitemap_wrap .cmsms_sitemap > li:before, 
	{$rule}.post.format-chat .cmsms_chat .cmsms_chat_item:after, 
	{$rule}.post.format-quote .cmsms_quote_author:before, 
	{$rule}.post.format-link .cmsms_post_header .cmsms_post_subtitle:before, 
	{$rule}.blog.timeline:before, 
	{$rule}.post.cmsms_timeline_type:before, 
	{$rule}.cmsms_posts_slider .post .cmsms_slider_post_cont .cmsms_slider_post_quote_author:before, 
	{$rule}.cmsms_posts_slider .post .cmsms_slider_post_cont .cmsms_slider_post_header .cmsms_slider_post_subtitle:before {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	@media only screen and (max-width: 950px) {
		{$rule}.content_wrap .sidebar:before {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
		}
	}
	
	{$rule}input[type=text],
	{$rule}input[type=search],
	{$rule}input[type=email],
	{$rule}input[type=password],
	{$rule}textarea,
	{$rule}select,
	{$rule}option,
	{$rule}.search_bar_wrap,
	{$rule}.cmsms_breadcrumbs,
	" . (($scheme == 'default') ? "#slide_top:hover," : '') . "
	{$rule}.cmsms_notice .notice_close,
	{$rule}.cmsms_tabs.tabs_mode_tab .cmsms_tabs_wrap,
	{$rule}.cmsms_tabs.lpr .cmsms_tabs_wrap,
	{$rule}.cmsms_tabs .cmsms_tabs_list .cmsms_tabs_list_item > a,
	{$rule}.cmsms_icon_wrap .cmsms_simple_icon, 
	{$rule}.cmsms_icon_box.cmsms_icon_box_top,
	{$rule}.cmsms_icon_box.cmsms_icon_box_left,
	{$rule}.cmsms_icon_list_items.cmsms_icon_list_type_block .cmsms_icon_list_item,
	{$rule}.cmsms_icon_list_items.cmsms_color_type_bg .cmsms_icon_list_icon:after,
	{$rule}.cmsms_icon_list_items.cmsms_color_type_icon .cmsms_icon_list_icon:after,
	{$rule}.related_posts > ul li > a,
	{$rule}.cmsms_img.with_caption,
	{$rule}.cmsms_pricing_table .cmsms_pricing_item,
	{$rule}.tweet_list li,
	{$rule}.img_placeholder_small,
	{$rule}.widget_custom_popular_projects_entries .img_placeholder,
	{$rule}.widget_custom_latest_projects_entries .img_placeholder,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=\"checkbox\"] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsms-form-builder .check_parent input[type=\"checkbox\"]+label:before,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=\"radio\"] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsms-form-builder .check_parent input[type=\"radio\"]+label:before,
	{$rule}.wp-caption, 
	{$rule}.gallery .gallery-item .gallery-icon a[data-caption],
	{$rule}.gallery .gallery-item .gallery-caption,
	{$rule}.cmsms_gallery li.cmsms_caption figure,
	{$rule}.cmsms_profile.vertical .profile .pl_img .pl_noimg, 
	{$rule}.post.cmsms_default_type, 
	{$rule}.tribe_events.cmsms_default_type, 
	{$rule}.post .cmsms_post_cont, 
	{$rule}.tribe_events .cmsms_post_cont, 
	{$rule}.post_nav, 
	{$rule}.post_nav .cmsms_post_meta, 
	{$rule}.about_author .about_author_inner, 
	{$rule}.related_posts .related_posts_content, 
	{$rule}.post_comments .commentlist .comment-body, 
	{$rule}.portfolio .project .project_outer .project_inner, 
	{$rule}.portfolio.large_gap .project .project_outer, 
	{$rule}.portfolio.opened-article .project .cmsms_project_header, 
	{$rule}.portfolio.opened-article .project .project_sidebar .project_details .project_details_item, 
	{$rule}.portfolio.opened-article .project .project_sidebar .project_features .project_features_item, 
	{$rule}.cmsms_profile.horizontal .profile, 
	{$rule}.profiles.opened-article .profile .cmsms_profile_header, 
	{$rule}.profiles.opened-article .profile .profile_sidebar .profile_details .profile_details_item, 
	{$rule}.profiles.opened-article .profile .profile_sidebar .profile_features .profile_features_item, 
	{$rule}.cmsms_toggles .cmsms_toggle_wrap .cmsms_toggle_plus, 
	{$rule}.cmsms_toggles.toggles_mode_accordion .cmsms_toggle_wrap, 
	{$rule}.cmsms_quotes_slider .quote_content, 
	{$rule}.cmsms_quotes_slider .quote_content:before, 
	{$rule}.owl-buttons > div, 
	{$rule}.owl-pagination .owl-page, 
	{$rule}.quote_grid, 
	{$rule}.quote_grid:before, 
	{$rule}.quote_grid:after, 
	{$rule}.quote_grid .quote_vert, 
	{$rule}.quote_grid .quotes_list, 
	{$rule}.quote_grid .cmsms_quote, 
	{$rule}.cmsms_posts_slider .post .cmsms_slider_post_cont, 
	{$rule}.cmsms_clients_slider .owl-wrapper-outer, 
	{$rule}.cmsms_hover_slider .cmsms_hover_slider_thumbs > li a, 
	{$rule}.cmsms_search_post_footer {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.cmsms_table tr:first-child td,
	{$rule}.bottom_bg,
	{$rule}.widget_nav_menu ul li a,
	{$rule}.cmsms_pricing_item .cmsms_price_wrap:after, 
	{$rule}.cmsms_pricing_item .cmsms_price_wrap:before, 
	{$rule}.tweet_list li:first-child {
		" . cmsms_color_css('border-top-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.cmsms_table tr td,
	{$rule}.cmsms_table tr th,
	{$rule}hr,
	{$rule}.cmsms_divider,
	{$rule}.sidebar .widget,
	{$rule}.cmsms_widget_divider {
		" . cmsms_color_css('border-bottom-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.cmsms_pricing_table .cmsms_pricing_item:first-child, 
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best, 
	{$rule}.cmsms_table tr td:first-child, 
	{$rule}.cmsms_table tr th:first-child, 
	{$rule}.footer_inner nav > div > ul > li {
		" . cmsms_color_css('border-' . (is_rtl() ? 'right' : 'left') . '-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.cmsms_table tr td:last-child,
	{$rule}.cmsms_table tr th:last-child {
		" . cmsms_color_css('border-' . (is_rtl() ? 'left' : 'right') . '-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.cmsms_clients_slider .cmsms_clients_item {
		-webkit-box-shadow:" . (is_rtl() ? '' : '-') . "1px 0 0 rgba(" . hex2rgb($cmsms_bd[0]) . ", " . ((int) $cmsms_bd[1] / 100) . ");
		-moz-box-shadow:" . (is_rtl() ? '' : '-') . "1px 0 0 rgba(" . hex2rgb($cmsms_bd[0]) . ", " . ((int) $cmsms_bd[1] / 100) . ");
		box-shadow:" . (is_rtl() ? '' : '-') . "1px 0 0 rgba(" . hex2rgb($cmsms_bd[0]) . ", " . ((int) $cmsms_bd[1] / 100) . ");
	}
	
	{$rule}.cmsms_clients_slider .cmsms_clients_item {
		-webkit-box-shadow:-1px 0 0 rgba(" . hex2rgb($cmsms_bd[0]) . ", " . ((int) $cmsms_bd[1] / 100) . ");
		-moz-box-shadow:-1px 0 0 rgba(" . hex2rgb($cmsms_bd[0]) . ", " . ((int) $cmsms_bd[1] / 100) . ");
		box-shadow:-1px 0 0 rgba(" . hex2rgb($cmsms_bd[0]) . ", " . ((int) $cmsms_bd[1] / 100) . ");
	}
	/* Finish Borders Color */
	
	
	/* Start Custom Rules */
	{$rule}::selection {
		" . cmsms_color_css('background', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . ";
	}
	
	{$rule}::-moz-selection {
		" . cmsms_color_css('background', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_img_rollover_wrap:hover .cmsms_img_rollover, 
	{$rule}.portfolio.puzzle .project .project_outer:hover .cmsms_img_rollover_wrap .cmsms_img_rollover {
		background-color:rgba(" . hex2rgb($cmsms_heading[0]) . ", 0.5);
	}
	
	{$rule}.cmsms_img_rollover_wrap .cmsms_img_rollover .cmsms_img_rollover_divider {
		background-color:rgba(" . hex2rgb($cmsms_bg[0]) . ", 0.55);
	}
	
	{$rule}.cmsms_notice .notice_close:hover {
		color:#dd0000;
	}
	
	{$rule}.portfolio.small_gap .project .project_outer {
		-webkit-box-shadow:0 0 0 1px rgba(" . hex2rgb($cmsms_bd[0]) . ", " . ((int) $cmsms_bd[1] / 100) . ");
		-moz-box-shadow:0 0 0 1px rgba(" . hex2rgb($cmsms_bd[0]) . ", " . ((int) $cmsms_bd[1] / 100) . ");
		box-shadow:0 0 0 1px rgba(" . hex2rgb($cmsms_bd[0]) . ", " . ((int) $cmsms_bd[1] / 100) . ");
	}
	";
	
	
	if ($scheme == 'default') {
	$cmsms_def_heading = explode('|', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_heading']);
	
	$cmsms_def_bg = explode('|', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']);
	
	
	$custom_css .= "
	#slide_top {
		background-color:rgba(" . hex2rgb($cmsms_def_heading[0]) . ", 0.5);
		border-color:rgba(" . hex2rgb($cmsms_def_bg[0]) . ", 0.15);
	}
	";
	}
	
	
	$custom_css .= "
	{$rule}.footer_bg {
		-webkit-box-shadow:inset 0 1px 0 0 rgba(" . hex2rgb($cmsms_bd[0]) . ", " . ((int) $cmsms_bd[1] / 100) . ");
		-moz-box-shadow:inset 0 1px 0 0 rgba(" . hex2rgb($cmsms_bd[0]) . ", " . ((int) $cmsms_bd[1] / 100) . ");
		box-shadow:inset 0 1px 0 0 rgba(" . hex2rgb($cmsms_bd[0]) . ", " . ((int) $cmsms_bd[1] / 100) . ");
	}
	/* Finish Custom Rules */

/***************** Finish {$title} Color Scheme Rules ******************/


/***************** Start {$title} Button Color Scheme Rules ******************/
	
	{$rule}.cmsms_button.cmsms_but_bg_hover {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_bg_hover:hover, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_bg_hover {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsms_button.cmsms_but_bg_slide_left, 
	{$rule}.cmsms_button.cmsms_but_bg_slide_right, 
	{$rule}.cmsms_button.cmsms_but_bg_slide_top, 
	{$rule}.cmsms_button.cmsms_but_bg_slide_bottom, 
	{$rule}.cmsms_button.cmsms_but_bg_expand_vert, 
	{$rule}.cmsms_button.cmsms_but_bg_expand_hor, 
	{$rule}.cmsms_button.cmsms_but_bg_expand_diag {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_bg_slide_left:hover, 
	{$rule}.cmsms_button.cmsms_but_bg_slide_right:hover, 
	{$rule}.cmsms_button.cmsms_but_bg_slide_top:hover, 
	{$rule}.cmsms_button.cmsms_but_bg_slide_bottom:hover, 
	{$rule}.cmsms_button.cmsms_but_bg_expand_vert:hover, 
	{$rule}.cmsms_button.cm.sms_but_bg_expand_hor:hover, 
	{$rule}.cmsms_button.cmsms_but_bg_expand_diag:hover, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_bg_slide_left, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_bg_slide_right, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_bg_slide_top, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_bg_slide_bottom, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_bg_expand_vert, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_bg_expand_hor, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_bg_expand_diag {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_bg_slide_left:after, 
	{$rule}.cmsms_button.cmsms_but_bg_slide_right:after, 
	{$rule}.cmsms_button.cmsms_but_bg_slide_top:after, 
	{$rule}.cmsms_button.cmsms_but_bg_slide_bottom:after, 
	{$rule}.cmsms_button.cmsms_but_bg_expand_vert:after, 
	{$rule}.cmsms_button.cmsms_but_bg_expand_hor:after, 
	{$rule}.cmsms_button.cmsms_but_bg_expand_diag:after {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	
	{$rule}.cmsms_button.cmsms_but_shadow {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_shadow:hover, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_shadow {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsms_button.cmsms_but_icon_dark_bg, 
	{$rule}.cmsms_button.cmsms_but_icon_light_bg, 
	{$rule}.cmsms_button.cmsms_but_icon_divider {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_icon_dark_bg:hover, 
	{$rule}.cmsms_button.cmsms_but_icon_light_bg:hover, 
	{$rule}.cmsms_button.cmsms_but_icon_divider:hover, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_dark_bg, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_light_bg, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_divider {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_icon_divider:after {
		" . cmsms_color_css('border-right-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_icon_inverse {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_icon_inverse:before {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_icon_inverse:after {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_icon_inverse:hover, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_inverse {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_icon_inverse:hover:before, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_inverse:before {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_icon_inverse:hover:after, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_inverse:after {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	
	{$rule}.cmsms_button.cmsms_but_icon_slide_left, 
	{$rule}.cmsms_button.cmsms_but_icon_slide_right {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_icon_slide_left:hover, 
	{$rule}.cmsms_button.cmsms_but_icon_slide_right:hover, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_slide_left, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_slide_right {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsms_button.cmsms_but_icon_hover_slide_left, 
	{$rule}.cmsms_button.cmsms_but_icon_hover_slide_right, 
	{$rule}.cmsms_button.cmsms_but_icon_hover_slide_top, 
	{$rule}.cmsms_button.cmsms_but_icon_hover_slide_bottom {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_icon_hover_slide_left:hover, 
	{$rule}.cmsms_button.cmsms_but_icon_hover_slide_right:hover, 
	{$rule}.cmsms_button.cmsms_but_icon_hover_slide_top:hover, 
	{$rule}.cmsms_button.cmsms_but_icon_hover_slide_bottom:hover, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_hover_slide_left, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_hover_slide_right, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_hover_slide_top, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_hover_slide_bottom {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}

/***************** Finish {$title} Button Color Scheme Rules ******************/


";
	}
	
	
	return $custom_css;
}

