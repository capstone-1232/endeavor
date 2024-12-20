<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package endeavor-theme
 */

?>

<footer id="colophon" class="site-footer">
	<div class="inner-container">
		<div class="site-info footer-wide-flex">

			<div class="footer-nav">
				<?php bellows('main'); ?>
			</div>

			<div class="hours">
				<h4>Hours:</h4>
				<?php
				$custom_order = array(
					'Sunday',
					'Monday',
					'Tuesday',
					'Wednesday',
					'Thursday',
					'Friday',
					'Saturday'
					
				);
				
				$posts = get_posts(
					array(
						'post_type' => 'hours', // Replace 'hours' with your actual post type slug
						'posts_per_page' => -1, // Retrieve all posts
						'orderby' => 'title',   // Order by post title
						'order' => 'ASC',       // Ascending order
					)
				);
				
				// Collect extra days from ACF that are not in $custom_order
				$extra_days = array();
				
				foreach ($posts as $post) {
					setup_postdata($post);
				
					$day_name = get_field('day'); // Retrieve the 'day' field from ACF
				
					// Add day_name to $extra_days if it's not in $custom_order and not already added
					if (!in_array($day_name, $custom_order) && !in_array($day_name, $extra_days) && !empty($day_name)) {
						$extra_days[] = $day_name;
					}
				}
				
				// Merge the custom order with extra days
				$display_order = array_merge($custom_order, $extra_days);
				
				foreach ($display_order as $day) {
					$post_found = false;
				
					foreach ($posts as $post) {
						setup_postdata($post);
				
						$day_name = get_field('day'); // Retrieve the 'day' field from ACF
				
						// Match the current day in the display order
						if ($day_name === $day) {
							$post_found = true;
				
							// Retrieve ACF fields
							$open = get_field('open');
							$close = get_field('close');
							$closed = get_field('closed');
				
							// Display hours
							if ($closed) {
								echo "<p class=\"weekday\">$day_name: <span class=\"hours-details\">Closed</span></p>";
							} else {
								echo "<p class=\"weekday\">$day_name: <span class=\"hours-details\">$open - $close</span></p>";
							}
				
							break; // Exit the loop once a match is found
						}
					}
				
					wp_reset_postdata(); // Reset post data after each loop iteration
				
					// Optionally handle unmatched days
					if (!$post_found && !in_array($day, $custom_order)) {
						// Optionally show: echo "<p class=\"weekday\">$day: <span class=\"hours-details\">No hours available</span></p>";
					}
				}
				?>

			</div>

			<div class="general-nap">
				<div class="logo">
					<svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 188 73">
						<path stroke="#F2F2F2" stroke-width="2" d="M94 0v72" />
						<path fill-rule="evenodd" clip-rule="evenodd"
							d="M0 30.8C0 13.8 13.8 0 30.6 0A31 31 0 0 1 61 30.8v10.4C61 58.2 47.3 72 30.5 72A31 31 0 0 1 0 41.2z"
							fill="#F2F2F2" />
						<path fill-rule="evenodd" clip-rule="evenodd"
							d="M30.3 1a30 30 0 0 1 29.6 29.8v10.4A30 30 0 0 1 30.3 71 30 30 0 0 1 .7 41.2V30.8A30 30 0 0 1 30.3 1m0 .6c-16 0-29 13.2-29 29.2v10.4c0 16 13 29.2 29 29.2s29-13.2 29-29.2V30.8c0-16-13-29.2-29-29.2"
							fill="#363432" />
						<path fill-rule="evenodd" clip-rule="evenodd"
							d="M10.5 51.4v.4l-.2.3-.3.2-.4.1-.4-.1L9 52l-.3-.4-.7-1.4 3-1.6.7 1.4q.2.4.1 1 0 .3-.4.4l-.5.1zm1.4 3.3-.6 1.4-.4-.7.4-1.3-.3-.5-.9.7-.4-.6 2.8-2 .8 1.3.3.5v.5l-.5.7-.3.2a1 1 0 0 1-1-.2m2.7.9-.5.4 1.1 1.2-.4.5-1.2-1.2-.5.5 1.3 1.3-.5.5-1.8-1.9 2.5-2.3 1.7 1.8-.4.5zm1.9 3.8 1.8-1.5.5.3-.6 2.2L20 59l.6.4-2.7 2.4-.6-.4.5-2.2-1.7 1.5-.5-.4.8-3.5.6.4zm5 .4.6.3-1.4 3-.7-.3zm3 3.2.5-2 .7.2-.8 3.3-.6-.1-1-2.5-.6 2-.7-.2.9-3.3.6.2zm4.2 1.3V64l-.7-.2V63l1.6.3-.3 1.5-.7.3a2 2 0 0 1-1.5-.3l-.7-1V63a2 2 0 0 1 .7-1.1 2 2 0 0 1 1.4-.3l.7.3.5.4-.6.5-.3-.3-.5-.2H28l-.6.4-.1.4v.5l.4.6.4.2zm4.8.7a1.7 1.7 0 0 1-2-1.5 2 2 0 0 1 .4-1.3 2 2 0 0 1 1.1-.7h.8l.3.2.3.1-.3.7-.5-.3H33l-.6.4-.2.4v.4l.2.4.2.3.4.2h.3q.3 0 .5-.2l.3-.3h.1l.5.3-.2.4-.3.2-.4.2zm4.1-1-.7.1a2 2 0 0 1-1.5-1.1 2 2 0 0 1 0-1.4 2 2 0 0 1 1-.9l.7-.1a2 2 0 0 1 1.6 1.1 2 2 0 0 1 0 1.4 2 2 0 0 1-1 1m3.4-3.7.2-1.7.7-.4 1.5 3.1-.7.3-1-1.9-.1 1.6h-.1l-1.4-.7 1 1.9-.7.3-1.5-3 .6-.4zm3.5-1.1.6.8-.6.4-2-2.7 1-.8.6-.3h.4l.5.1.3.3.2.5v.5l-.2.5-.4.3zm3.4-3-1 1 .4.8-.5.6-1.5-3.4.4-.5 3.5 1.2-.5.6zm2-3.6-1.6-1.2.4-.6 2.8 2-.4.4-2.6.2 1.7 1.2-.4.6-2.8-2 .4-.5zm1.4-2.6-2.5.3.4-.8 1.6-.2L50 48l.3-.8 1.3 2.1 1.2.6-.3.7zm-40.7-.4-.6.3.3.6.3.3h.3l.1-.2v-.4zm-1.2.6-.6.3.4.8.2.3h.3l.2-.2-.1-.5zm3 2.5-.8.6.4.6.3.3h.4V54l.2-.3-.1-.4zm25 10.7a1 1 0 0 0 .6-1V62l-.6-.6-.4-.1h-.4a1 1 0 0 0-.6 1v.4l.3.4.7.3zm6-5.6.7.8.4-.3q.3-.1.3-.4v-.4l-.4-.2-.5.2zm3.8-1.8-1-.4.4 1z"
							fill="#F2F2F2" />
						<path fill-rule="evenodd" clip-rule="evenodd"
							d="m33.1 36.9-.8 2v.4l.5.2h3q.3 0 .3-.2l.3-.4.8-1.5v-.5l-.4-.2h-3.3q-.3 0-.4.2m1.2-3.2-.7 2 .1.2h4l.3-.2.6-1.7v-.4q-.2-.3-.4-.2h-3.5q-.3 0-.4.3M35 30l-.2 2v.3l.4.2 3.5-.1q.3 0 .4-.3l.2-2.4-.1-.3-.4-.1-3.4.3q-.3 0-.4.4m0-3.9.1 2.3.2.3.3.1 3.4-.3q.4 0 .4-.5l-.2-2.5-.2-.3h-.3l-3.3.5q-.4 0-.4.4m-.8-3 .5 1.5q.1.3.5.3l3.3-.5.3-.2v-.4q-.2-1-.7-2l-.5-.3-3.1 1-.3.3zM28.3 22l1.2-.9q.7-.3 1.7-.4a3 3 0 0 1 2.1 1.2q.2.3.5.2l3.2-1 .3-.3v-.4a9 9 0 0 0-2.2-2.1c-2-1.3-4.4-2-6.7-1a11 11 0 0 0-4.1 3.2q-.2.2 0 .4 0 .3.2.3l3.4 1q.3 0 .4-.2m-2 2.8 1-1.4V23l-.3-.3-3.3-.9q-.3 0-.4.2l-1.1 2q-.2.2 0 .4l.3.2 3.5.4q.3 0 .4-.3m-1 3.7q0-1 .5-2.1v-.4l-.4-.2-3.4-.3q-.3 0-.5.2l-.5 2.5v.3l.4.2 3.4.1q.4 0 .4-.3m-4 8.9.9 2.1q0 .3.4.3l3.4-.3.3-.1v-.4l-.8-2q0-.4-.4-.4l-3.3.3-.4.1zm-.6-3.6.3 2q.1.4.5.3l3.3-.2q.3 0 .3-.2l.1-.3-.2-1.7q-.1-.4-.5-.4H21l-.3.2zm7.9-10.5 4.7.6q.4 0 .4.3l.5 2.3a.4.4 0 0 1-.5.5l-3.4-.4q-.5 0-.5.4l-.3 2.4v.4l.4.1 3.8.2.3.1.1.4-.4 2.4q-.1.3-.4.3h-3.8q-.3 0-.4.3l-.2 2v.4l.4.2h2.3q.3 0 .4.3v.4l-.7 2-.4.2-3.1.1a.4.4 0 0 1-.5-.2q0-.5-.3-.8c-1.6-4.3-1.5-10.8 1.2-14.7zm1.2-.7 3.3.4v-.1c0-.3-.5-1.3-2-1.5q-.9 0-1.5.3t-.6.7c0 .2.6.1.8.2m-3.2 27.9-2.5 1h-.4l-.2-.3-.2-1v-1.2q0-.4.3-.4L26 48h.3l.2.4v.3q0 .6.3 1v.4l-.3.2m-.5-3.1-2.5.4-.3-.1-.2-.3v-1.4q0-.4.3-.4l2.5-.1q.5 0 .5.4v1q0 .3-.3.5m1.5 3.7-3 1-.2.4.1.4q1.6 1.4 4.3 1.4h2.6q2.6 0 4.1-1.8v-.4l-.2-.3-3-.9h-.5q-.7.7-1.9.7-1 0-2-.5zm5.5-.8 2.6.8h.4l.2-.3v-2.2q0-.4-.4-.4l-2.5-.2H33l-.1.4v.3l-.1 1v.4zm.1-3.1 2.5.2h.4v-1.8q0-.4-.5-.4H33q-.4.1-.4.5v1q.2.4.5.5m-.7-4.4.1 1.3q0 .4.5.4h2.5q.3 0 .4-.5v-1.3q-.1-.4-.6-.4H33q-.4.1-.4.5m-6.3.2.1 1.3q0 .4-.4.4l-2.5.1-.5-.4V43q0-.4.3-.4l2.5-.1q.5 0 .5.4M31 48h1v1q0 .9-.8 1H30v-1q0-.9.9-1m-3.6.1h1q1 0 1.2 1v1h-1a1 1 0 0 1-1.1-1zm3.5-2.6h1l.1 1q0 .9-.9 1h-1l-.1-1q0-.9 1-1m-3.6.1h1.1q1 0 1.1 1v.9h-1a1 1 0 0 1-1.1-1zm-.1-2.8h1q1 0 1.2.8V45h-1q-1 0-1.1-.8zm3.6-.1H32l.1 1.2q0 .9-1 1h-1l-.1-1.3q0-.9 1-1m-3.2-2.2h.4l.2.1V42l-.5.1-.2-.1v-1.5m1.3 0h.6l.1 1.5v.1H29zm1.6-.2h.4l.2.1v1.7h-.6l-.1-1.7m-10-8.5v.3l.2.3.3.1 3.4-.1q.3 0 .4-.4V32q0-1 .2-1.9l-.1-.3-.4-.2-3.3-.1q-.5 0-.5.3zm2.7-.6V31H23zm-1.2 0v.2zm15.6 0h-.1m-15-4.3h.2m1.3.3q-.2 0 0 0m13 0h-.3zm1.2-.4H38v.1zm-14 11.8v-.1H24v.1l.1.2zm.1.4H24v.1h.1zm0-.8V38H24zm8.6 14h.1V52zm-4.9.9h.1zm1-.3h.1v-.1zm1.5-.2v-.1h-.2v.2zm-2 .5h-.2v.1zm3.5-.4v.1h.1m1.2-.6v.1h.1m-2.4 1v.1m0-.4v.1m-3.3-.2v.1m5.4-33.6h.2v-.1h.1v-.1h-.1l-.1-.1H33zm-3.1-.7v.2h.1v-.2h.1v-.1zm-2.5.5h.1v.1h.2v-.1h-.1l-.1-.1zm1 .6v-.2h-.1zm2.4-1.4v.1h.1zm.3-.5v.1h.2zm.4.3v.1h-.1v.1h.2zM28 20.1v.1h.2v-.1zm2.4-.8h.2zv-.1h-.2zm-.6-.9h-.1zm2.8.2v.2h.1zm-3.6.5V19zm5 .4v.1h.1m-6.1.5V20m-.4 0v.1zm6.5-.1v-.1H34m-4.6-.4h.1v-.1zm-2.7.1v-.1zm7.7.7h-.1zm-2.4-.9v-.1h-.1zm-1.5-1v.1h.1m.4.9v.1m1-.6v-.1m.4 1.3v-.1m-4.6 10.4V30m-.3 2.2-.1.1zv.1h.2v-.1zm.8-5.5v.2h.1v.1m0 1.7h.3v-.2h-.2zm.1 2.2.2.1v-.1zl-.1-.1h-.1zm.3-4.4v-.1h-.1v.1m2.4 5.3v-.1H31m-2.8-2.6H28zh.2zm.6-3.9v-.1h-.1v.1m1.5 6.6h-.1v.1m2.3-6.4h-.2zM29 37.3v-.1h-.1v.1m2-6h.1v-.1h-.1zm-2.7 0v.2h.1v-.2m.6-4.8h.1v-.1zm-1 6.8h.1m-.3-3.8h.1v-.1h-.1m3.8 2.4H31v.1h.1m0-7.1h.1v-.1h-.1m.4 6.2h.1v-.1zm-3.5-.5h.2v-.1zm0-3.4v-.1m2.3-1.9-.1-.1v.1m-3 9.8h.1m5.2-3h-.1v.1zm-.2-6.9h.1m-2.8 0v-.2h-.1zm-1 7.3h-.1m-1.3 1.3h-.1M26 42.2V42h-.1zm5 3.6"
							fill="#363432" />
						<path fill-rule="evenodd" clip-rule="evenodd"
							d="m7.5 21.4.7.4 1.2-2.2 1 .5-1.1 2.2.8.4 1.3-2.5 1 .6-1.8 3.6L5.8 22l1.9-3.7 1 .6zm43.7 1-1.3 1.9-.6-1.5 1.1-1.6-.3-.7-1.5.6-.5-1.2 5-2L54 20q.4 1 0 1.7-.2.6-1 1h-1q-.5 0-.8-.5m-37.3-7-2.2-2.1 1-1 3.8 3.7-.7.8-4-.4 2.4 2.1-1 1-3.8-3.7.8-.9zm1-5 1.8-1 1.1-.4H19a3 3 0 0 1 1.6 1.4q.3.4.3 1a3 3 0 0 1-.6 2q-.3.4-.9.7l-1.8 1zm8-2.5.2.8 2.3-.6.3 1.2-2.3.6.2.9 2.7-.7.3 1.1-4 1-1.3-5 4-1 .2 1.2zm8.6 1.7-2 .1L29 11h-1.3l2-5.5H31l2.5 5.3H32zm4.6 0L38 6.6l1.4.2-3.1 5-1.1-.2L34 5.7l1.4.3zm4.9 4.1a3 3 0 0 1-1.3-1.8 3 3 0 0 1 .4-2 3 3 0 0 1 2.8-1.3q.6 0 1 .5a3 3 0 0 1 1.4 1.8 3 3 0 0 1-.4 2A3 3 0 0 1 42 14zm4.8 3.6q-.7-.6-.7-1.6T46 14l2.2-2.1.9 1-2.2 2-.5.8q0 .5.3.8t.8.4q.5 0 .8-.4l2.2-2.1.9 1-2.2 2q-.4.4-.9.6l-.9.2-.8-.3zm6.7 2.2-1.3.5.4 1 .4.5h.5q.4 0 .4-.4v-.6zm-35.9-8.7 1.4 2.6.7-.3.5-.4.3-.5v-.6q0-.3-.2-.5 0-.3-.4-.5l-.4-.3h-.6l-.6.1zM31 8.5 30.4 7l-.5 1.4zm10.6 4.2.6.2h.6q.3 0 .5-.3.3 0 .4-.4l.2-.6-.2-1q0-.4-.4-.5l-.6-.3h-.5l-.5.3-.5.5-.2.5.2 1.2z"
							fill="#F2F2F2" />
						<path fill-rule="evenodd" clip-rule="evenodd"
							d="M2.1 41.1a28.4 28.4 0 0 0 28.2 28.4 28.4 28.4 0 0 0 28.2-28.4V30.9A28.4 28.4 0 0 0 30.3 2.5 28.4 28.4 0 0 0 2.1 30.9zm50.4-21.6-1.3.5.4 1 .4.5h.5q.4 0 .4-.4v-.6zm-11.3-9-.2.6.2 1.2.4.4.6.2h.6l.9-.7.2-.6-.2-1q0-.4-.4-.5l-.6-.3h-.5a2 2 0 0 0-1 .8M30.4 7.2l-.5 1.4h1zM18 13.4l.7-.3.5-.4.3-.5v-.6q0-.3-.2-.5 0-.3-.4-.5-.2-.3-.4-.3h-.6l-.6.1-.7.4zM9.8 51l-.4-.7-.6.3.4.8.2.3h.3l.2-.2zm1 0q.2-.1.2-.3v-.4l-.4-.6-.6.3.3.6.3.3zm2.1 2.9-.1-.4-.5-.7-.7.6.4.6.3.3h.4V54zm33.3 1.8.4 1 .6-.6zm-2.7 2.2.6.8.4-.3q.3-.2.3-.4v-.4l-.4-.2-.5.2zm-6 3.6-.5-.1h-.4a1 1 0 0 0-.6 1v.4l.3.4.7.3h.4a1 1 0 0 0 .6-1V62zM12 40.2v-9A18.4 18.4 0 0 1 30.3 13Q38 13 43 18.3c3.3 3.3 5.4 8 5.4 13v9a18.4 18.4 0 0 1-18.2 18.3A18.4 18.4 0 0 1 12 40.3m-4.2 10 3-1.6.7 1.4q.2.4.1 1 0 .3-.4.4l-.5.1h-.3v.3l-.2.3-.3.2-.4.1-.4-.1L9 52l-.3-.4zm1.8 3.5 2.8-2 .8 1.3.3.5v.5q0 .3-.2.4l-.3.3-.3.2a1 1 0 0 1-1-.2l-.4 1.4-.5-.7.5-1.3-.4-.5-.9.7zM12 57l2.5-2.3 1.7 1.8-.4.5-1.3-1.3-.5.4 1.1 1.2-.4.5-1.2-1.2-.5.5 1.3 1.3-.5.5zm4.3-.2.6.4-.5 2.3 1.8-1.5.5.3-.6 2.2L20 59l.6.4-2.7 2.4-.6-.4.5-2.2-1.7 1.5-.5-.4zm5 3 .7.4-1.4 3-.7-.3zm3.1 3.3.5-2 .7.2-.8 3.3-.6-.1-1-2.5-.6 2-.7-.2.9-3.3.6.2zM27 62a2 2 0 0 1 1.4-.3l.7.3.5.4-.6.5-.3-.3-.5-.2H28l-.6.4-.1.4v.5l.4.6.4.2h.7V64l-.7-.2V63l1.6.3-.3 1.5-.7.3a2 2 0 0 1-1.5-.3l-.7-1V63a2 2 0 0 1 .7-1.1m4.5 1.6a2 2 0 0 1 .3-1.3 2 2 0 0 1 1.2-.7h.7l.3.2.3.1h.1l-.4.7-.5-.3h-.5l-.6.4-.2.4v.4l.2.4.2.3.4.2h.4l.4-.2.3-.3h.1l.5.3-.2.4-.3.2-.4.2h-1a2 2 0 0 1-1.1-.7zm3.6-1.2a2 2 0 0 1 1.2-1.6l.7-.1a2 2 0 0 1 1.6 1.1 2 2 0 0 1 0 1.4 2 2 0 0 1-1 1H37a2 2 0 0 1-1.5-1.1zm5.8-2 .2-1.7.7-.4 1.5 3.1-.7.3-1-1.9-.1 1.6h-.1l-1.4-.7 1 1.9-.7.3-1.5-3 .6-.4zm3.5.1-2-2.7 1-.8.6-.3h.4l.5.1.3.3.2.5v.5l-.2.5-.4.3-.4.4.6.8zm2.3-1.8-1.5-3.4.4-.5 3.5 1.2-.5.6-.8-.3-1 1 .4.8zm3.2-6-1.7-1.2.4-.6 2.8 2-.4.4-2.6.2 1.7 1.2-.4.6-2.8-2 .4-.5zm-1.2-2.3.4-.8 1.6-.2L50 48l.3-.8 1.3 2.1 1.2.6-.3.7-1.2-.6zM10.6 24.4 5.8 22l1.9-3.7 1 .6-1.2 2.5.7.4 1.2-2.2 1 .5-1.1 2.2.8.4 1.3-2.5 1 .6zm39.3-.1-.6-1.5 1.1-1.6-.3-.7-1.5.6-.5-1.2 5-2L54 20q.4 1 0 1.7-.2.6-.9 1H52q-.5 0-.8-.5zm-36.6-4.8-4-3.7.9-.9 3.7.4-2.2-2 1-1 3.8 3.7-.7.8-4-.4 2.4 2.1zm4.2-4.4-2.6-4.7 1.8-1 1.1-.4H19a3 3 0 0 1 1.6 1.4q.3.4.3 1a3 3 0 0 1-.6 2q-.3.4-.9.7zm5.2-2.8L21.3 7l4-1 .2 1.2-2.7.7.3.8 2.3-.6.3 1.2-2.3.6.2.9 2.7-.7.3 1.1zm8.8-2.7-2 .1L29 11h-1.3l2-5.5H31l2.5 5.3H32zm3.7 1.9L34 5.7l1.4.3.7 3.7L38 6.5l1.4.2-3.1 5zm5.8 2.2a3 3 0 0 1-1.3-1.8 3 3 0 0 1 .4-2 3 3 0 0 1 2.8-1.3q.6 0 1.1.5a3 3 0 0 1 1.3 1.8 3 3 0 0 1-.4 2 3 3 0 0 1-2.9 1.3zm4.8 3.6q-.6-.6-.7-1.6T46 14l2.2-2.1 1 1-2.3 2-.5.8q0 .5.3.8t.8.4q.5 0 .8-.4l2.2-2.1 1 1-2.3 2q-.3.4-.9.6l-.9.2-.8-.3z"
							fill="#363432" />
						<path fill-rule="evenodd" clip-rule="evenodd"
							d="M54 39.3q-.5 1-1-.1.4-.5.6-1.1v.2zm-.5-1.9h-.2V37H53l-.4.1h-.2v-.2q-.2 0 0 0v-.3h.1v-.3h-.4L52 36v-.3l.4-.1v-.4l-.1-.1V35l.2-.2h.1l.3.2h.2v-.4l.2-.1h.3l.1.4h.2q0 .1 0 0l.3-.1h.2l.1.2v.2l-.1.2v.2h.4l.1.2v.3l-.4.1-.1.3.2.2v.2l-.2.2h-.1l-.2-.1-.1-.1h-.2v.3l-.1.1zl.2.8c.1.4.4 1.2.8 1.3q.6-.1 1-.7.6-.1 1-.7l-.3-.6-.7-.6-.8-.5h-.2H56c.3 0 1.2 0 1.4-.4q.1-.7-.4-1.1.1-.7-.4-1.2c-.4-.2-1.2.1-1.6.4l-.7.6-.2.1c.3-.5 1.1-2 .7-2.4-.2-.3-.9 0-1.1 0s-1-.2-1.2 0c-.4.5.3 2 .6 2.4l-.1-.1-.6-.5c-.3-.3-1.2-.7-1.6-.5-.3.1-.3.8-.3 1v.1q-.6.5-.4 1.1c.2.5 1.6.5 2.2.4h.2l-.2.1-.7.4c-.3.2-1 .7-1 1.1s.6.6 1 .7c0 .3.4.9.8.8.6 0 1-1.4 1.2-2m0-2q-.5.1-.5.7a.5.5 0 1 0 1-.2q0-.5-.6-.5m.6-.1a1 1 0 0 1-.5 1.5 1 1 0 0 1-1-.8 1 1 0 0 1 .9-1zm-3.7 2.1q-1-.2-.3-1l1.2.2zm1.6-4.8v.7l.1.1v.3h.1l-.5-.2h-.3l-.1-.1h-.1q-.3-1.2.8-.8m3.1 0q1-.2.8.8l-1 .4zm2 3.9q.7.8-.4 1l-.1-.2-.8-.6zM7.7 39.3q-.5 1-1-.1l.5-1.1v.2zm-.6-1.9V37h-.3l-.3.1h-.2l-.1-.2.1-.3v-.3h-.4v-.5l.3-.1.1-.2v-.2l-.2-.1V35l.2-.2h.2l.2.2h.2v-.1l.1-.3.1-.1h.4v.4h.3l.3-.1h.1l.2.2v.2l-.2.2.1.2h.4v.5l-.3.1-.1.3.2.3-.2.3H8l-.2-.1-.1-.1h-.3v.4l-.1.1q0 .5.2.8c0 .4.4 1.2.8 1.3q.6-.1 1-.7c.3-.1.9-.3.9-.7l-.3-.6-.7-.6-.7-.5h-.2 1.2c.3 0 1.2 0 1.4-.4q.1-.7-.4-1.1.1-.7-.4-1.2c-.4-.2-1.3.1-1.6.4l-.8.6-.1.1c.3-.6 1.1-2 .7-2.4-.3-.3-.9 0-1.1 0H6c-.4.5.3 1.9.6 2.4l-.2-.1-.5-.5c-.3-.3-1.2-.7-1.6-.5s-.4.8-.4 1v.1q-.5.5-.4 1.1c.3.5 1.7.5 2.2.4H6l-.1.1-.7.4c-.3.2-1 .7-1 1.1s.6.6.9.7c.1.3.5.9.9.8.6 0 1-1.4 1.1-2m0-2q-.5.1-.4.7a.5.5 0 1 0 1-.2q0-.5-.6-.5m.7-.1a1 1 0 0 1-.5 1.5 1 1 0 0 1-1-.8 1 1 0 0 1 .9-1zM4 37.4q-1-.2-.2-1 .5.3 1.1.2zm1.7-4.8v.8l.1.1v.2l-.5-.2H5v-.1h-.3c0-1 0-1 .9-.8m3 0q1.1-.2 1 .8l-1.2.4q.3-.5.3-1.1m2 3.9q.8.8-.3 1l-.2-.2-.7-.6q.7 0 1.2-.2"
							fill="#F2F2F2" />
						<path d="m181.6 26-24.4 24.6-24.4-24.5 24.5-24.6z" fill="#363432" />
						<path
							d="M132.4 53.7H127v3.2h.8V70l4.6-1.9v-2.8l-2.6.8V63l2.2-.5v-2.8l-2.2.3v-3.2l2.6-.2zm5.5 7.5-1-3.7-.9-3.7h-2.8v2.7h.8v11.2l2-.6v-7.4l1.7 6.9 2-.5V53.8H138zm8.4-7q-.3-.6-1.5-.5h-4.3V56h.8v9.7l3.5-.7q1.2-.2 1.5-.7t.4-1.5v-7.3q0-.9-.4-1.4m-1.6 8.3q0 .3-.3.4l-1 .1V56h1q.3 0 .3.2v6.4m8.2-8.8h-5.4v2h.8v8.8l4.6-.3v-2h-2.6V60h2.2v-2.1h-2.2v-2.2h2.6zm3 0h-1.5v2h.7l-.7 4.2-.7 4.2h2l.2-1.2 2-.8.4 2h2l-.8-5.2-.9-5.2zm1.1 2.1.3 2.2.4 2-1.4.7.4-2.5zm6.9 6.7-.7-4.4-.6-4.4H160v2h1l.7 4.2.6 4.3 3.3.2.8-5.3.8-5.4h-2l-.6 4.4zm9.2-8.3q-.3-.5-1.5-.5h-4.2v2.1h.7V63q0 1 .4 1.5.3.5 1.5.7l1.6.3q1.2 0 1.5-.2.4-.5.4-1.5v-8q0-1-.4-1.5m-1.6 8.6q0 .3-.3.3l-.8-.2q-.3 0-.3-.3v-6.4q0-.3.3-.3h.8q.3 0 .3.4zm7 1.2q0 .3-.3.3l-.9-.2-.2-.4v-10h-2.8V56h.8v8q0 1 .3 1.6.5.6 1.5.9l1.7.5q1 .3 1.5-.2.3-.4.4-1.6V53.7h-2zm8 0q.5 0 .6-.4.4-.6.4-2v-5.1q0-1.5-.4-2.2-.3-.6-1.4-.7h-4.3v2.7l.8.1V68l2 .7v-4h.5l.5 2.3.5 2.5 2 1-.6-3.3zm-1.2-7.4q.2 0 .2.5v3q0 .7-.2.7l-1.1.4v-4.7z"
							fill="#F2F2F2" />
						<path fill-rule="evenodd" clip-rule="evenodd"
							d="m159.3 2 23 24-25 26-24.9-26 25-26zm20 23.1-22-22.8L134.7 26l22.8 23.8L180.2 26z"
							fill="#F2F2F2" />
						<path fill-rule="evenodd" clip-rule="evenodd"
							d="m157.7 5.4 3.9 4q.3.4 0 .6l-9.8 10h2l8.8-8.9.3-.1.3.1 3.8 4 .3.3q.3.4 0 .6l-4.7 4.9h2l3.7-3.8.3-.1.4.1 7 7.3v.5l-.4.2h-36.5l-.4-.2.1-.5 18.3-19 .3-.2q.2 0 .3.2m-.1 41.1 6.7-6.8v-.5q0-.3-.4-.3h-5.1a1 1 0 0 1-.8-.8q0-.8.8-.9h8c1.9 0 1.8-2.4 0-2.4h-2a1 1 0 0 1-.7-.8q0-.8.8-.9h5.1c2 0 1.8-2.5.3-2.5h-9.1a1 1 0 0 1 0-1.9h14c1.6 0 1.5-2 0-2h-35c-1.7 0-1.6 2.6.4 2.6h6.5c1.8 0 1.6 1.9.2 1.9h-3c-1.3 0-1.4 2 0 2H155q.8 0 .8.8t-.8.8h-7c-1.6 0-1.8 2.7 0 2.7h5.8q.7.1.8.8-.1.8-.8.9h-1.5c-1.6 0-1.8 2.3.3 2.3h4a.9.9 0 0 1 0 1.7h-1.8q-.3 0-.4.3l.1.5 2.4 2.5.3.2q.3 0 .4-.2"
							fill="#F2F2F2" />
						<path
							d="M140.7 70.4h-.7v-.2l-.3-.2h-.7l-.2.4-.1.5v.5l.3.3.4.1h.2l.2-.1.2-.2v-.2h.7q0 .3-.2.4l-.6.6h-.5l-.7-.1-.5-.5-.1-.8.1-.8q.2-.4.5-.5.3-.2.7-.2h.5l.4.3.2.3zm3 .5-.1.8-.5.5-.7.2-.7-.2-.5-.5-.1-.8.1-.8.5-.5q.3-.2.7-.2t.7.2q.3 0 .5.5zm-.5 0-.1-.5q0-.3-.3-.4h-.8l-.2.4-.1.5v.5l.3.3.4.1h.4l.3-.4zm1 1.4v-2.9h2v.5h-1.3v.7h1.1v.5h-1v1.2zm2.4 0v-2.9h1.9v.5h-1.3v.7h1.2v.5h-1.2v1.2zm2.3 0v-2.9h2v.5h-1.4v.7h1.3v.5h-1.3v.7h1.4v.5zm2.5 0v-2.9h2v.5H152v.7h1.2v.5H152v.7h1.3v.5zm3.3 0v-2.9h1.2l.6.1.3.4.1.5v.5l-.5.3h-1.3v-.4h1l.1-.2.1-.2V70l-.2-.1h-.7v2.3zm1.6-1.3.7 1.3h-.6l-.7-1.3zm3.7-.1-.1.8-.5.5-.7.2q-.4 0-.7-.2l-.5-.5-.2-.8q0-.5.2-.8t.5-.5.7-.2.7.2q.3 0 .5.5zm-.6 0v-.5l-.3-.4h-.8l-.3.4v1l.3.3.4.1h.4l.2-.4zm1.4 1.4h-.6l1-2.9h.8l1 3h-.7l-.7-2.3zm0-1.1h1.5v.5h-1.5zm4-1-.1-.2-.4-.1h-.2l-.2.1v.4h.1l.2.1h.1l.3.1.3.2.3.1.3.6q0 .3-.2.5l-.4.3h-1.2l-.4-.4-.1-.5h.6v.3l.2.1h.6l.2-.1v-.4h-.2l-.2-.2h-.4l-.5-.3-.3-.5q0-.3.2-.5l.4-.3.5-.1h.6l.4.4.1.5zm1-.3v-.5h2.4v.5h-1v2.4h-.5V70zm2.8 2.4v-2.9h2v.5h-1.4v.7h1.2v.5h-1.2v.7h1.3v.5zm2.4 0v-2.9h1.1l.6.1.4.4v1l-.4.3h-1.3v-.4h.9l.2-.2v-.5l-.2-.1h-.7v2.3zm1.6-1.3.7 1.3h-.7L172 71zm2.6-.7-.1-.3-.4-.1h-.2l-.2.1v.4l.2.1h.2l.3.1.3.2.3.1.2.3v.3l-.1.5-.4.3h-1.2l-.4-.4-.2-.5h.6l.1.3.2.1h.6l.1-.1.1-.2v-.2h-.2l-.3-.2h-.3l-.6-.3-.2-.5.1-.5.4-.3.6-.1h.6l.4.4v.5zm-38.3-1-.3.4-.7.4q-.8.4-.8.7.7.6 1.4-.2.7-.7.4-1.3m-1.9 1.4q-.2-.6.4-1.3.7-.6 1.4-.2 0 .4-.9.8-.8.3-.9.7m44.5-1.4-.3.4q-.2.3-.6.4-.8.4-.9.7.7.6 1.5-.2.6-.7.3-1.3m-1.8 1.4q-.3-.6.3-1.3.8-.6 1.4-.2 0 .4-.9.8-.8.3-.8.7"
							fill="#F2F2F2" />
					</svg>
					<h1 class="screen-reader-text">Endeavor Brewing Company</h1>
				</div>

				<div class="footer-nap">
					<p>Suite 4A, 215 Carnegie Dr.
						St. Albert, AB</p>
					<p><a href="tel:7807523777">780-752-3777</a></p>
					<p><a href="mailto:info@endeavourbrewing.com">info@endeavourbrewing.com</a></p>

				</div>

				<div class="social-media">
					<div>
						<a href="https://www.instagram.com/endeavourbrewing/">
							<svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2.5rem"
								height="2.5rem" title="Instagram Logo">
								<path
									d="M12 0H7Q5.3.3 4.2.7 3 1.1 2.1 2 1 3 .5 4.1t-.5 3a87 87 0 0 0 .5 12.8q.4 1 1.4 2 1 1.1 2.1 1.5 1.1.5 3 .5a87 87 0 0 0 12.8-.5q1.2-.5 2-1.4 1.1-1 1.5-2.1.5-1.1.5-3a87 87 0 0 0-.5-12.8q-.5-1.2-1.4-2Q21 1 19.9.5t-3-.5zm-1 2.2h5.8q1.8.1 2.3.4.8.3 1.4 1t.9 1.3q.2.5.4 2.3a82 82 0 0 1-.4 11.9q-.3.8-1 1.4t-1.3.8q-.5.3-2.3.5A84 84 0 0 1 5 21.3q-.8-.2-1.4-.8t-1-1.5q-.2-.5-.4-2.3A84 84 0 0 1 2.6 5q.3-.8 1-1.4t1.3-.9 2.3-.4zm7.4 2a1.4 1.4 0 1 0 0 2.8 1.4 1.4 0 0 0 0-2.8M12 5.8a6.2 6.2 0 1 0-.2 12.4A6.2 6.2 0 0 0 12 5.8M12 8a4 4 0 1 1 0 8 4 4 0 0 1 0-8"
									fill="#F2F2F2" />
							</svg>
						</a>

						<a href="https://www.facebook.com/EndeavourBrewing/">
							<svg width="2.5rem" height="2.5rem" viewBox="0 0 32 32" fill="none"
								xmlns="http://www.w3.org/2000/svg" title="Facebook Logo">
								<path
									d="M24 12.0735C24 5.40533 18.6277 1.90735e-06 12.0015 1.90735e-06C5.37233 0.00150172 0 5.40533 0 12.075C0 18.0997 4.38845 23.0941 10.1237 24V15.5636H7.07911V12.075H10.1267V9.41283C10.1267 6.3877 11.919 4.71691 14.6592 4.71691C15.973 4.71691 17.3453 4.95238 17.3453 4.95238V7.92201H15.832C14.3427 7.92201 13.8778 8.8534 13.8778 9.80878V12.0735H17.2043L16.6734 15.5621H13.8763V23.9985C19.6115 23.0926 24 18.0982 24 12.0735Z"
									fill="#F2F2F2" />
							</svg>
						</a>

						<a href="https://twitter.com/Endeavour_Beer">
							<svg width="2.5rem" height="2.5rem" viewBox="0 0 32 29" fill="none"
								xmlns="http://www.w3.org/2000/svg" title="Twitter/X Logo">
								<path
									d="M20.8552 0H24.917L16.0452 10.1661L26.4828 24H18.3112L11.9106 15.6083L4.58648 24H0.523035L10.0121 13.1255L0 0H8.38014L14.165 7.66841L20.8552 0ZM19.4317 21.5636H21.6828L7.15531 2.30897H4.74207L19.4317 21.5636Z"
									fill="#F2F2F2" />
							</svg>

						</a>
					</div>
				</div>
			</div>

			<div class="map">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2365.5573841931187!2d-113.57844642314775!3d53.63703297237502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53a025c028fbfc9b%3A0x144edd599ac90e49!2sEndeavour%20Brewing!5e0!3m2!1sen!2sca!4v1712261723563!5m2!1sen!2sca"
					width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
					referrerpolicy="no-referrer-when-downgrade" title="Google Map to Endeavor Brewing Company">Map to Endeavour Brewing Company</iframe>
			</div>

		</div>
	</div><!-- .site-info -->
</footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>

</html>