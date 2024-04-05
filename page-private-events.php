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
    <main class="private-events">
       <section>
            <div class="private-events-bg">
                <h2><?php echo $title; ?></h2>
            </div>
        </section>

        <section class="private-events">
            <div class="inner-container">
                <div class="private-events-img">
                    <img class="private-events-img" src="<?php echo get_template_directory_uri(); ?>/img/private-events.webp" alt="Endeavour coffee on table">
                </div>
                <div class="private-events-content">
                    <div>
                        <h3 id="private-events-h3">Private events</h3>
                        <p class="private-people">(30-60 People)</p>
                        <p>Gather your friends and family for a special celebration in a fun, casual, and private space!</p>
                    </div>
                    <div class="private-events-list">
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
                                <b>
                                    IF BOOKING FOR A CORPORATE PRIVATE EVENT 
                                    <span class="block">
                                    - We Include servers and bartenders for the duration of your event.
                                    </span>
                                </b>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="table-bookings">
            <div class="inner-container"> 
                <picture class="table-bookings">
                    <source media="(min-width: 720px)" srcset="<?php echo get_template_directory_uri(); ?>/img/table-bookings.webp" alt="Endeavour coffee on table"s>
                    <img class="meet-the-team-img" src="<?php echo get_template_directory_uri(); ?>/img/table-bookings-mobile.webp" alt="Endeavour coffee on table">
                </picture>

                <div class="bookings-content">
                    <h3 id="private-events-h3">Table Bookings</h3>
                    <p class="private-people table">(20 People or less)</p>
                    <p>Section of the taproom can be sectioned off for your group, the taproom would remain open to the general public</p>
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
            </div>
        </section>
        <section class="wedding-receptions">
            <div class="inner-container wedding-flex">
                <img class="meet-the-team-img" src="<?php echo get_template_directory_uri(); ?>/img/wedding-photo.webp" alt="Endeavour coffee on table">
                <div class="wedding-info">
                    <h3 id="private-events-h3">Wedding and / or Reception</h3>
                    <p class="private-people">(30 - 60 people) </p>
                    <p>We are happy to work with you to make your event special and unique</p>
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
            </div>
        </section>
        <section class="team-building">
            <div class="inner-container">
                <img class="meet-the-team-img" src="<?php echo get_template_directory_uri(); ?>/img/team-building-cropped.webp" alt="Endeavour coffee on table">
                <h3 id="private-events-h3">Team Building Activities / Events</h3>
                <p>
                  Enjoy a private section with your team! You can reserve a section of the taproom for the group, however the remainder of the taproom will be open to the public.
                </p>
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
        </section>
    </main>

<?php

get_footer();