<?php
date_default_timezone_set('Europe/Prague');
include 'dbh.inc.php';
include 'comments.inc.php';
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Animal enciclopedia</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">
    <script src="slide.js" defer></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="map.php">Map</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mammals.php">Mammals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reptiles.php">Reptiles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="birds.php">Birds</a>
                </li>

            </ul>
        </div>
    </nav>


    <div class="page_name">
        <h1>BLACK MAMBA</h1>
    </div>
    <div class="page_theme">



        <div class="photo_table">
            <img src="Assets/black_mamba.jpg">
            <table>
                <tr>
                    <td>KINGDOM</td>
                    <td>Animalia</td>
                </tr>
                <tr>
                    <td>PHYLUM</td>
                    <td>Chordata</td>
                </tr>
                <tr>
                    <td>SUBPHYLUM</td>
                    <td>Vertebrata</td>
                </tr>
                <tr>
                    <td>CLASS</td>
                    <td>Reptilia</td>
                </tr>
                <tr>
                    <td>ORDER</td>
                    <td>Squamata</td>
                </tr>
                <tr>
                    <td>INFRAORDER</td>
                    <td>Serpentes</td>
                </tr>
                <tr>
                    <td>FAMILY</td>
                    <td>Elapidae</td>
                </tr>
                <tr>
                    <td>GENUS</td>
                    <td>Dendroaspis</td>
                </tr>
                <tr>
                    <td>SPECIES</td>
                    <td>Dendroaspis polylepis</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="page_theme">
        <div class="page_text">
            <p>
                The Black mamba is an extremely venomous snake native to parts of sub-Saharan Africa.
                It is the second-longest venomous snake after the King cobra.
                Black mambas have a coffin-shaped head with a somewhat pronounced brow ridge and a medium-sized eye.
            </p>
            <p>
                These snakes vary considerably in color, including olive, yellowish-brown, khaki,
                and gunmetal but are rarely black. The scales of some individuals may have a purplish sheen.
                Black mambas have greyish-white underbellies and the inside of
                the mouth is dark bluish-grey to nearly black.
            </p>
            <p>
                Mamba eyes range between greyish-brown and shades of black; the pupil is
                surrounded by a silvery-white or yellow color. Juvenile snakes are lighter
                in color than adults; these are typically grey or olive green and darken as they age.
            </p>
        </div>
    </div>




    <div class="page_name">
        <h1>Photos with Black Mamba</h1>
    </div>

    <div class="page_theme_photo">
        <section aria-label="Newest Photos">
            <div class="carousel" data-carousel>
                <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>
                <button class="carousel-button next" data-carousel-button="next">&#8658;</button>
                <ul data-slides>
                    <li class="slide" data-active>
                        <img src="Assets/black_mamba_ph1.jpg" alt="Nature Image #1">
                    </li>
                    <li class="slide">
                        <img src="Assets/black_mamba_ph2.jpg" alt="Nature Image #2">
                    </li>
                    <li class="slide">
                        <img src="Assets/black_mamba_ph3.jpg" alt="Nature Image #3">
                    </li>
                    <li class="slide">
                        <img src="Assets/black_mamba_ph4.jpg" alt="Nature Image #3">
                    </li>
                    <li class="slide">
                        <img src="Assets/black_mamba_ph5.jpg" alt="Nature Image #3">
                    </li>
                </ul>
            </div>
        </section>

    </div>








    <div class="page_name">
        <h1>Habits and Lifestyle</h1>
    </div>
    <div class="page_theme">
        <div class="page_photo">

            <img src="Assets/black_mamba_ph2.jpg">

        </div>
        <div class="page_text">
            <p>
                Black mambas are both terrestrial and arboreal creatures.
                On the ground, they move with their head and neck raised, and typically use termite mounds,
                abandoned burrows, rock crevices, and tree cracks as shelter. Black mambas are solitary;
                they are diurnal and tend to bask in the morning and again in the afternoon.
            </p>
            <p>
                They may return daily to the same basking site. Skittish and often unpredictable,
                Black mambas are agile and can move quickly. In the wild, they seldom tolerate humans
                approaching more closely than about 40 meters (130 ft). When mambas perceive a threat,
                they retreat into the brush or a hole. When confronted they are likely to engage in a threat display,
                gaping to expose their black mouth and flicking their tongue.
            </p>
            <p>
                They may also hiss and spread their neck-flap. During the threat display, any sudden movement
                by the intruder may provoke the snake into performing a series of rapid strikes, leading to severe
                envenomation.
                The Black mamba's reputation for being ready to attack is exaggerated;
                it is usually provoked by perceived threats such as the blocking of its movements and ability to
                retreat.
            </p>
        </div>
    </div>

    <div class="page_name">
        <h1>Diet and Nutrition</h1>
    </div>
    <div class="page_theme">
        <div class="page_text">
            <p>Black mambas are carnivores and mostly prey on small vertebrates such as birds,
                particularly nestlings and fledglings, and small mammals like rodents, bats,
                hyraxes, and bushbabies. They generally prefer warm-blooded prey but will also
                consume other snakes.</p>
        </div>
    </div>
    <div class="page_name">
        <h1>Mating Habits</h1>
    </div>
    <div class="page_theme">
        <div class="page_text">
            <p>
                Black mambas are polygynandrous (promiscuous); this means that both
                males and females mate with multiple partners. The breeding season spans
                from September to February. Rival males compete by wrestling, attempting to
                subdue each other by intertwining their bodies and wrestling with their necks.
            </p>
            <p>
                During mating, the male will slither over the dorsal side of the female while flicking
                its tongue. The female will signal its readiness to mate by lifting its tail and staying still.
                Black mambas are oviparous; females lay a clutch of 6-17 eggs. The eggs are elongated oval in shape,
                typically 60-80 mm (2.4-3.1 in) long and 30-36 mm (1.2-1.4 in) in diameter.
            </p>
            <p>
                Incubation lasts around
                2 to 3 months. When hatched, the young range from 40-60 cm (16-24 in) in length. They are independent
                directly from birth and have to be able to care for themselves. Snakelets may grow quickly,
                reaching 2 m (6 ft 7 in) after their first year. Juvenile Black mambas are very apprehensive and can be
                deadly like adults.
            </p>
        </div>
    </div>


    <div class="page_name">
        <h1>Population</h1>
    </div>

    <div class="page_theme">
        <div class="page_photo">

            <img src="Assets/black_mamba_ph3.jpg">

        </div>
        <div class="container">

            <button class="accordion"> <i class="fas fa-user"></i> Population threats</button>
            <div class="panel">
                <p>
                    There are no major threats to the Black mamba at present.
                </p>
            </div>

            <button class="accordion"> <i class="fas fa-video"></i> Population number</button>
            <div class="panel">
                <p>
                    According to IUCN, the Black mamba is locally common and widespread
                    throughout its range but no overall population estimate is available.
                    Currently, this species is classified as Least Concern (LC) on the IUCN Red
                    List and its numbers today are stable.
                </p>
            </div>
            <button class="accordion"> <i class="fas fa-video"></i> Ecological niche</button>
            <div class="panel">
                <p>
                    Black mambas play a very important ecological role in their environment
                    as they help to control populations of small rodents they prey on.
                </p>

            </div>


        </div>
        <script src="accordion.js"></script>

    </div>


    <div class="comment-section">
        <div class="comment-box">
            <?php
            echo "<form method='POST' action='" . setComments($conn) . "'>
        <input type= 'hidden' name='uid' value='Anonymous'>
        <input type= 'hidden' name='date' value='" . date('Y-m-d H:i:s') . "'>
        <textarea name='message'></textarea><br>
        <button type='submit' name='commentSubmit'>Comment</button>

            </form>";

            getComments($conn);
            ?>
        </div>
    </div>
</body>

</html>