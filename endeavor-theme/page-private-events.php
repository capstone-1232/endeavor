<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package endeavor-theme
 */

get_header();
$title = get_the_title();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
    <main>
        <!-- Hero banner -->
        <div>
            <h2>Private Functions</h2>
        </div>

        <section class="">
            <img src="" alt="">
            <div class="inner-container">
                <h3>Private events<span>(30-60 People)</span></h3>
                <ul>
                    <li>
                        Event Taproom Space closed to the general public (½ taproom with privacy barriers in place)
                    </li>
                    <li>
                        Event start time 7:30pm
                    </li>
                    <li>
                        Last call 12:00am with your party cleaned up and leaving by 1:00am
                    </li>
                    <li>
                        Wine and spirits selection available   upon request, our delicious beer is always available
                    </li>
                    <li>
                        Brewery tour available upon request
                    </li>
                    <li>
                        Endeavour’s Food Menu may be utilized or catering, food trucks, or potluck may be brought in
                    </li>
                    <li>
                        70 inch TV available on request for slideshows or presentations
                    </li>
                </ul>
                <ul>
                    <li>
                        Speaker and microphone available for use on request
                    </li>
                    <li>
                        Use of the SONOS speaker system to play your specific playlist(s)
                    </li>
                    <li>
                        We are happy to work with you to make your event special and unique
                    </li>
                    <li>
                        Booking fee $400; a deposit of $200 is required to hold your date
                    </li>
                    <li>
                        A $1200 minimum charge(including rental fee) will be applied to groups of less than 30 people
                    </li>
                    <li>
                        <span class="red">
                            IF BOOKING FOR A CORPORATE PRIVATE EVENT - We Include servers and bartenders for the duration of your event.
                        </span>
                    </li>
                </ul>
            </div>
        </section>
        <section class="">
            <div class="inner-container">
                <h3>Table Bookings<span>(20 People or less)</span></h3>
                <ul>
                    <li>
                        Section of the taproom can be sectioned off for your group, the taproom would remain open to the general public
                    </li>
                    <li>
                        Brewery tour available
                    </li>
                    <li>
                        Regular taproom hours apply
                    </li>
                    <li>
                        No booking fee
                    </li>
                </ul>
            </div>
            <img src="" alt="">
        </section>
        <section class="">
            <img src="" alt="">
            <div class="inner-container">
                <h3>Wedding and / or Reception<span>(30-60 people)</span></h3>
                <ul>
                    <li>
                        Event Taproom Space closed to the general public (½ taproom with privacy barriers in place)
                    </li>
                    <li>
                        Event start time 7:30pm
                    </li>
                    <li>
                        Last call 12:00am with your party cleaned up and leaving by 1:00am
                    </li>
                    <li>
                        Wine and spirits selection available upon request, our delicious beer is always available
                    </li>
                    <li>
                        Brewery tour available upon request
                    </li>
                    <li>
                        Endeavour’s Food Menu may be utilized or catering, food trucks, or potluck may be brought in
                    </li>
                    <li>
                        Includes bartenders for the duration of your event.
                    </li>
                </ul>
                <ul>
                    <li>
                        Help with set up and takedown is happily provided
                    </li>
                    <li>
                        Angle parking available for guests
                    </li>
                    <li>
                        70 inch TV available on request for slideshows or presentations
                    </li>
                    <li>
                        Speaker and microphone available for use on request
                    </li>
                    <li>
                        Use of the SONOS speaker system to play your specific playlist(s)
                    </li>
                    <li>
                        Booking fee $1500
                    </li>
                    <li>
                        Deposit of $750 is required to hold your date
                    </li>
                </ul>
            </div>
        </section>
        <section class="">
            <div class="inner-container">
                <h3>Team Building Activities/Events</h3>
                <ul>
                    <li>
                        Brewery Tour and Tasting with the Head Brewero Discover what goes into the making of a beer and how to taste beer.
                    </li>
                    <li>
                        Table Tennis Tournament
                    </li>
                    <li>
                        Board Game Event
                    </li>
                    <li>
                        Movie and Beer Night
                    </li>
                </ul>
            </div>
            <img src="" alt="">
        </section>
    </main>
</body>
</html>

<?php

get_footer();