<?php
date_default_timezone_set('Europe/Prague');
include 'dbh.inc.php';
include 'comments.inc.php';
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
        <h1>BLUE WHALE</h1>
    </div>
    <div class="page_theme">



        <div class="photo_table">
            <img src="Assets/blue_whale.jpg">
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
                <td>Mammalia</td>
            </tr>
            <tr>
                <td>ORDER</td>
                <td>Artiodactyla</td>
            </tr>
            <tr>
                <td>INFRAORDER</td>
                <td>Cetacea</td>
            </tr>
            <tr>
                <td>FAMILY</td>
                <td>Balaenopteridae</td>
            </tr>
            <tr>
                <td>GENUS</td>
                <td>Balaenoptera</td>
            </tr>
            <tr>
                <td>SPECIES</td>
                <td>Balaenoptera musculus</td>
            </tr>
            </table>
        </div>
    </div>
    <div class="page_theme">
        <div class="page_text">
        <p>
            The Blue whale has a huge long, slim, narrow body.
            Its skin is hairless and smooth, and is grayish blue,
            lighter on the underside, with a series of grooves on the throat.
        </p>
        <p>
            Its large tail is straight, splitting at the end into two rubbery flukes.
            Blue whales are part of the "baleen whales" group, having, instead of teeth,
            up to 395 hard, bristly baleen plates that descend from the upper jaw.
        </p>
        <p>
            These plates are used to filter seawater for food. They have two blow-holes
            that expel stale air and seawater out of the top of their heads when they
            come up to the surface to breathe.
        </p>
        </div>
    </div>




    <div class="page_name">
        <h1>Photos with Blue Whales</h1>
    </div>

    <div class="page_theme_photo">
        <section aria-label="Newest Photos">
            <div class="carousel" data-carousel>
                <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>
                <button class="carousel-button next" data-carousel-button="next">&#8658;</button>
                <ul data-slides>
                    <li class="slide" data-active>
                        <img src="Assets/blue_whale_ph1.jpg" alt="Nature Image #1">
                    </li>
                    <li class="slide">
                        <img src="Assets/blue_whale_ph2.jpg" alt="Nature Image #2">
                    </li>
                    <li class="slide">
                        <img src="Assets/blue_whale_ph3.jpg" alt="Nature Image #3">
                    </li>
                    <li class="slide">
                        <img src="Assets/blue_whale_ph4.jpg" alt="Nature Image #3">
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

            <img src="Assets/blue_whale_ph3.jpg">

        </div>
        <div class="page_text">
        <p>Blue whales are generally solitary creatures
                that may spend some time in pairs and occasionally come
                together in casual groups to feed.
            </p>
            <p>
                They communicate with
                each other using a variety of sounds or songs, including squeaks,
                hums, and rumbles, mainly during the breeding season, which is in winter.
                The sounds Blue whales make are extremely loud, the loudest of any animal
                on the planet, and they have been recorded at higher than 180 decibels.
            </p>
            <p>
                They use their tails to perform deep dives, as by lifting their tail above
                the water's surface, they muster enough power to dive up to 200 meters
                straight down into the sea.
            </p>
            <p>
                Blue whales feed through lunge feeding;
                they swim towards krill ast high speeds as they open their mouths up to 80°.
                While pursuing krill patches, Blue whales maximize their calorie intake by
                increasing the number of lunges while selecting the thickest patches.
                This provides them enough energy for everyday activities while storing
                additional energy necessary for migration and reproduction.</p>
        </div>
    </div>

    <div class="page_name">
        <h1>Diet and Nutrition</h1>
    </div>
    <div class="page_theme">
        <div class="page_text">
        <p>Blue whales are carnivorous (piscivorous).
            Their diet mainly consists of krill and small crustaceans,
            although they will occasionally eat small fish.</p>
        </div>
    </div>
    <div class="page_name">
        <h1>Mating Habits</h1>
    </div>
    <div class="page_theme">
        <div class="page_text">
        <p>Blue whales are monogamous, mating during winter or early spring
            in warmer, tropical waters. Gestation lasts for almost a year,
            the female giving birth to one calf when she returns to the region
            the next year.
        </p>
        <p>
            Having spent all summer feeding in the cold, rich waters
            of the Antarctic, the mothers eat almost nothing during the time they are
            providing their young with milk.
        </p>
        <p>
            Baby blue whales stay with their mother
            for at least a year and are weaned at about 8 months old. Blue whales can
            start reproducing between the age of 10-15 years old, producing a calf
            every 2 or 3 years.</p>
        </div>
    </div>


    <div class="page_name">
        <h1>Population</h1>
    </div>

    <div class="page_theme">
        <div class="page_photo">

            <img src="Assets/blue_whale_ph4.jpg">

        </div>
        <div class="container">

            <button class="accordion"> <i class="fas fa-user"></i> Population threats</button>
            <div class="panel">
            <p>Blue whales have almost no natural predators,
                due to their enormous size. The calves may be at
                risk of predation by large sharks and orcas.
            </p>
            <p>
                Humans hunted them so much throughout the 20th
                century that they almost became extinct. Globally,
                there appear to be no major threats to Blue whales at present.
                They can be subject to some ship strikes and entanglements
                but reported cases are few.</p>
            </div>

            <button class="accordion"> <i class="fas fa-video"></i> Population number</button>
            <div class="panel">
            <p>According to IUCN Red List, the global population
                size of the Blue whale in 2018 is plausibly in the
                range of 10,000-25,000 individuals or 5,000-15,000 mature individuals.
                Currently, this species is classified as Endangered (EN)
                on the IUCN Red List and its numbers today are increasing.</p>
            </div>
            <button class="accordion"> <i class="fas fa-video"></i> Ecological niche</button>
            <div class="panel">
            <p>As with other large baleen whales,
                Blue whales are significant predators of
                krill and control their populations.</p>

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