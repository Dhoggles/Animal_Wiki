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
        <h1>EMPEROR PENGUIN</h1>
    </div>
    <div class="page_theme">



        <div class="photo_table">
            <img src="Assets/adelie_penguin.jpg">
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
                    <td>CLASS</td>
                    <td>Aves</td>
                </tr>
                <tr>
                    <td>ORDER</td>
                    <td>Sphenisciformes</td>
                </tr>
                <tr>
                    <td>FAMILY</td>
                    <td>Spheniscidae</td>
                </tr>
                <tr>
                    <td>GENUS</td>
                    <td>Pygoscelis</td>
                </tr>
                <tr>
                    <td>SPECIES</td>
                    <td>Pygoscelis adeliae</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="page_theme">
        <div class="page_text">
            <p>
                One of the smallest penguin species, these birds have white
                chest and belly as well as white bands, surrounding their eyes.
                The head and bill are black while the back of the animal is blue-black in color.
            </p>
            <p>

                They have solid, tough, and coarse feet, which are pink in color.
                The nails on Adelie penguins' feet help them in climbing to their nests,
                situated on rocky cliffs. Also, they use the nails to push themselves when
                sliding on the surface of the ice. These birds possess webbed feet,
                which the animals use to move forward while swimming.
            </p>
        </div>
    </div>




    <div class="page_name">
        <h1>Photoes with emperor penguin</h1>
    </div>

    <div class="page_theme_photo">
        <section aria-label="Newest Photos">
            <div class="carousel" data-carousel>
                <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>
                <button class="carousel-button next" data-carousel-button="next">&#8658;</button>
                <ul data-slides>
                    <li class="slide" data-active>
                        <img src="Assets/adelie_penguin_ph1.jpg" alt="Nature Image #1">
                    </li>
                    <li class="slide">
                        <img src="Assets/adelie_penguin_ph2.jpg" alt="Nature Image #2">
                    </li>
                    <li class="slide">
                        <img src="Assets/adelie_penguin_ph3.jpg" alt="Nature Image #3">
                    </li>
                    <li class="slide">
                        <img src="Assets/adelie_penguin_ph4.jpg" alt="Nature Image #3">
                    </li>
                    <li class="slide">
                        <img src="Assets/adelie_penguin_ph5.jpg" alt="Nature Image #3">
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

            <img src="Assets/adelie_penguin_ph5.jpg">

        </div>
        <div class="page_text">
            <p>
                Adeline penguins are diurnal birds. They are highly social and communicative animals,
                gathering into small colonies, where they live, socialize, forage,
                hunt as well as find protection from predators. When it comes to nesting,
                these penguins usually display extremely territorial behavior,
                sometimes even stealing nesting sites of each other.
            </p>
            <p>
                Adelie penguins
                are migratory animals. Thus, in the winter, the penguin colonies are usually
                found in coastal areas, on large ice platforms. Then, with the approaching of
                the breeding season (at the beginning of spring and during summer months),
                the penguins migrate to the seashore, looking for ice-free areas, where they
                construct their nests.
            </p>
        </div>
    </div>

    <div class="page_name">
        <h1>Diet and Nutrition</h1>
    </div>
    <div class="page_theme">
        <div class="page_text">
            <p>Adelie penguins are carnivores (piscivores and molluscivore).
                Their diet primarily consists of krill. They will also consume other
                aquatic species, including silverfish, squid as well as crustaceans.</p>
        </div>
    </div>
    <div class="page_name">
        <h1>Mating Habits</h1>
    </div>
    <div class="page_theme">
        <div class="page_text">
            <p>
                Adelie penguins form monogamous pairs, remaining together throughout their lives.
                During October-November, the birds travel to their breeding grounds,
                constructing nests from stones and loose pieces of grass. Typically,
                the female lays 2 eggs at an interval of 2 days, after which both parents
                incubate the eggs for around 36 days.
            </p>
            <p>
                During the incubation period,
                the parents usually go out to sea to forage, leaving the nest one by one
                and taking turns with the eggs. Then, when the chicks are hatched, they
                again take turns to forage and feed the hatchlings, which are born semi-precocial
                and are not able to feed themselves.
            </p>
            <p>
                The hatchlings are born with their down feathers.
                By the age of 4 weeks, they join a creche or group of other chicks, where they
                find protection. However, during this period the parents still continue feeding
                the chicks for about 56 days, after which the young are independent.
            </p>
        </div>
    </div>


    <div class="page_name">
        <h1>Population</h1>
    </div>

    <div class="page_theme">
        <div class="page_photo">

            <img src="Assets/adelie_penguin_ph1.jpg">

        </div>
        <div class="container">

            <button class="accordion"> <i class="fas fa-user"></i> Population threats</button>
            <div class="panel">
                <p>

                    Industrial fishing is among notable threats to the species, reducing the numbers
                    of fish and krill populations and causing food shortages in some areas of their
                    range. However, the primary threat is environmental changes: populations
                    in the northernmost part of their range are exposed to air and water warming,
                    which reduces the area of sea ice, destructing their habitat. If the temperature
                    continues increasing throughout the Antarctic, it will eventually lead to a serious
                    danger to the Adelie penguins populations.
                </p>
            </div>

            <button class="accordion"> <i class="fas fa-video"></i> Population number</button>
            <div class="panel">
                <p>The overall population of the species is presently increasing,
                    estimated at 7,580,000 mature animals. On the IUCN Red List,
                    the Adelie penguin is classified as Least Concern (LC) species.</p>
            </div>

            <button class="accordion"> <i class="fas fa-edit"></i> Ecological niche</button>
            <div class="panel">
                <p>Feeding upon krill and Antarctic silverfish, the Adelie penguins control numbers of these species
                    populations.</p>
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