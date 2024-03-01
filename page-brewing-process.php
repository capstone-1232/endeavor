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
            <h2>Our Brewing Process</h2>
        </div>
        <section>
            <section>
                <h3>Malting</h3>
                <p>
                    The process starts with malted grains, usually barley. Malting involves soaking the grains in water, allowing them to germinate, and then halting germination through drying in a kiln. This process activates enzymes in the grains that will later convert starches into fermentable sugars.
                </p>
            </section>
            <section>
                <h3>Mashing</h3>
                <p>
                    The malted grains are mixed with hot water in a vessel called a mash tun. The hot water activates enzymes in the malt, converting starches into sugars, primarily maltose. This sugary liquid is called wort.
                </p>
            </section>
            <section>
                <h3>Lautering</h3>
                <p>
                    The wort is separated from the solid remnants of the grains (called spent grains) in a process called lautering. The liquid wort is drained off from the mash tun, leaving the spent grains behind.
                </p>
            </section>
            <section>
                <h3>Boiling</h3>
                <p>
                    The wort is transferred to a kettle and boiled. Hops are added during the boil for bitterness, flavor, and aroma. The boiling process sterilizes the wort, extracts hop flavors and aromas, and helps concentrate the sugars.
                </p>
            </section>
            <section>
                <h3>Cooling</h3>
                <p>
                    After boiling, the hot wort must be rapidly cooled to a temperature suitable for fermentation. This is typically done using a heat exchanger, where the hot wort passes through a series of pipes surrounded by cool water.
                </p>
            </section>
            <section>
                <h3>Fermentation</h3>
                <p>
                    Once cooled, the wort is transferred to a fermentation vessel, often a fermenter. Yeast is added to the cooled wort, and fermentation begins. Yeast converts the sugars in the wort into alcohol and carbon dioxide, creating beer.
                </p>
            </section>
            <section>
                <h3>Conditioning</h3>
                <p>
                    After primary fermentation, the beer may undergo additional conditioning, where it is allowed to mature and develop flavors. This can take place in the same vessel as fermentation (in the case of a uni-tank) or in separate conditioning tanks.
                </p>
            </section>
            <section>
                <h3>Packaging</h3>
                <p>
                    Once fermentation and conditioning are complete, the beer is ready for packaging. It can be packaged in cans, or kegs.
                </p>
            </section>
            <section>
                <h3>Distribution & Enjoyment</h3>
                <p>
                    Packaged beer is then distributed to retailers, bars, restaurants, and consumers, where it can be enjoyed responsibly.
                </p>
            </section>
        </section>
    </main>
</body>
</html>


<?php
get_footer();
?>