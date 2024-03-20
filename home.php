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
        <section>
            <h2>Our Beer and Coffee</h2>
            <div>
                <a href="year-round">
                <h3>Mainstays</h3>
                    <img src="" alt="">
                </a>
                
            </div>
            <div>
                <a href="seasonal">
                <h3>Rotational</h3>
                    <img src="" alt="">
                </a>
                
            </div>
            <div>
                <a href="barrel-aged">
                <h3>Barrel Aged</h3>
                    <img src="" alt="">
                </a>
                
            </div>
        </section>
    </main>
</body>
</html>

<?php
get_footer();
?>