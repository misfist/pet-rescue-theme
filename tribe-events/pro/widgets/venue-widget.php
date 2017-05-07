<?php
/**
 * Events Pro Venue Widget
 * This is the template for the output of the venue widget. 
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/widgets/venue-widget.php
 *
 * @package TribeEventsCalendarPro
 * 
 * 
 * @cmsms_package 	Pet Rescue
 * @cmsms_version 	1.1.7
 */


if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$events_label_plural = tribe_get_event_label_plural();

?>

<div class="tribe-venue-widget-wrapper">
	<div class="tribe-venue-widget-venue">
		<?php if (has_post_thumbnail($venue_ID)) { ?>
			<div class="tribe-venue-widget-thumbnail">
				<?php echo get_the_post_thumbnail($venue_ID, 'related-event-thumbnail' ); ?>
			</div>
		<?php } ?>
		<div class="tribe-venue-widget-venue-name">
			<?php echo tribe_get_venue_link($venue_ID); ?>
		</div>
		<div class="tribe-venue-widget-address">
			<?php echo tribe_get_meta_group( $venue_ID, 'tribe_event_venue' ) ?>
		</div>
	</div>

	<?php if ( 0 === $events->post_count ): ?>
		<?php printf( __( 'No upcoming %s.', 'tribe-events-calendar-pro' ),  strtolower( $events_label_plural ) ); ?>
	<?php else: ?>
	<?php do_action( 'tribe_events_venue_widget_before_the_list' ); ?>
	<ul class="tribe-venue-widget-list hfeed vcalendar">
		<?php while ( $events->have_posts() ): ?>
			<?php $events->the_post(); ?>
			<li class="vevent <?php tribe_events_event_classes() ?>">
				<h3 class="entry-title summary"><a href="<?php echo esc_url( tribe_get_event_link() ); ?>"><?php echo get_the_title( get_the_ID() ) ?></a></h3>
				<div class="cmsms_widget_event_info">
					<div class="duration">
						<?php if ( tribe_get_cost( get_the_ID() ) != '' ): ?>
							<div class="tribe-events-event-cost"><?php 
								echo tribe_get_cost( get_the_ID(), true );
							?></div>
							<span class="tribe-events-divider">|</span>
						<?php endif; ?>
						<?php echo tribe_events_event_schedule_details(); ?>
					</div>
				</div>
				
				<?php
				echo cmsms_divpdel('<div class="cmsms_event_widget_content entry-content">' . "\n" . 
					wpautop(theme_excerpt(20, false)) . 
				'</div>' . "\n");
				?>
				
				<a href="<?php echo esc_url( tribe_get_event_link() ); ?>" rel="bookmark" class="cmsms_read_more"><?php esc_html_e('Read More', 'pet-rescue'); ?><span class="cmsms_wrap_arrow"><span class="cmsms_next_arrow"><span></span></span></span></a>
			</li>
	<?php endwhile;	?>
	</ul>
	<?php do_action( 'tribe_events_venue_widget_after_the_list' ); ?>
	<?php endif; ?>
	<p class="tribe-events-widget-link">
		<a href="<?php echo esc_url( tribe_get_venue_link( $venue_ID, false ) ); ?>"><?php printf( __( 'View all %s at this %s', 'the-events-calendar' ), $events_label_plural, tribe_get_venue_label_singular() ); ?></a>
	</p>
</div>
