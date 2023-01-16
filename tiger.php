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
        <h1>TIGER</h1>
    </div>
    <div class="page_theme">



        <div class="photo_table">
            <img src="Assets/tiger.jpg">
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
                    <td>Carnivora</td>
                </tr>
                <tr>
                    <td>SUBORDER</td>
                    <td>Feliformia</td>
                </tr>
                <tr>
                    <td>FAMILY</td>
                    <td>Felidae</td>
                </tr>
                <tr>
                    <td>GENUS</td>
                    <td>Panthera</td>
                </tr>
                <tr>
                    <td>SPECIES</td>
                    <td>Panthera tigris</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="page_theme">
        <div class="page_text">
            <p>
                The tiger (Panthera tigris ) is the largest living cat species and a member
                of the genus Panthera. It is most recognisable for its dark vertical stripes
                on orange fur with a white underside. An apex predator, it primarily preys on
                ungulates such as deer and wild boar.
            </p>
            <p>
                It is territorial and generally a solitary
                but social predator, requiring large contiguous areas of habitat, which support
                its requirements for prey and rearing of its offspring. Tiger cubs stay with their
                mother for about two years, then become independent and leave their mother's
                home range to establish their own.
            </p>
        </div>
    </div>




    <div class="page_name">
        <h1>Photos with Tiger</h1>
    </div>

    <div class="page_theme_photo">
        <section aria-label="Newest Photos">
            <div class="carousel" data-carousel>
                <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>
                <button class="carousel-button next" data-carousel-button="next">&#8658;</button>
                <ul data-slides>
                    <li class="slide" data-active>
                        <img src="Assets/tiger_ph1.jpg" alt="Nature Image #1">
                    </li>
                    <li class="slide">
                        <img src="Assets/tiger_ph2.jfif" alt="Nature Image #2">
                    </li>
                    <li class="slide">
                        <img src="Assets/tiger_ph3.jpg" alt="Nature Image #3">
                    </li>
                    <li class="slide">
                        <img src="Assets/tiger_ph4.jpg" alt="Nature Image #3">
                    </li>
                    <li class="slide">
                        <img src="Assets/tiger_ph5.jfif" alt="Nature Image #3">
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

            <img src="Assets/tiger_ph2.jfif">

        </div>
        <div class="page_text">
            <p>Tigers are solitary animals, except during
                the mating season and when the females give birth.
                They like to be mostly alone, roaming their huge territories
                in search of food. They are territorial, marking their territory
                with scratch marks on trees.
            </p>
            <p>
                These animals are most active during
                the night when their prey is most active. They can, however,
                be active at any time. They prefer to hunt within dense vegetation,
                using routes where they are able to move quietly. They knock prey
                onto the ground with the weight of their body and kill their catch
                by biting their neck.
            </p>
            <p>
                They are very good swimmers and often bathe in
                ponds, lakes, and rivers, thus keeping cool in the heat of the day;
                they can even kill prey while swimming. Tigers communicate through
                facial expressions and vocally. The most common facial expression
                includes the "defense threat", where an individual bares its teeth,
                flattens its ears and its pupils enlarge.
            </p>
            <p>
                Like other members of their
                family, tigers roar, particularly in aggressive situations, during
                the mating season, or when making a kill. They will also chuff which is
                a soft, low-frequency snorting similar to purring in smaller cats.
                Other vocal communications include grunts, woofs, snarls, miaows, hisses, and growls.</p>
        </div>
    </div>

    <div class="page_name">
        <h1>Diet and Nutrition</h1>
    </div>
    <div class="page_theme">
        <div class="page_text">
            <p>All tigers are carnivores,
                eating mainly sambar deer, water buffalo, wild pigs,
                and antelope. They sometimes hunt sloth bears, dogs,
                monkeys, hares, leopards, pythons, and crocodiles.</p>
        </div>
    </div>
    <div class="page_name">
        <h1>Mating Habits</h1>
    </div>
    <div class="page_theme">
        <div class="page_text">
            <p>Tigers are polygynous animals. They have no association with mates aside from mating.
                Males within one area may compete for access to a female in estrus. November to
                April is the most common time for breeding. Gestation lasts for about 103 days,
                and 1 to 7 cubs can be born. They weigh from 780 to 1,600 g (28 to 56 oz) each at
                birth and are born with their eyes closed.
            </p>
            <p>
                The cubs open their eyes when they are
                6 to 14 days old. During the first 11 to 14 days following the birth, the mother
                tiger spends the majority of her time nursing her young. Weaning takes place at
                around 90 to 100 days.
            </p>
            <p>
                Cubs remain with their mothers until they reach between 18
                months and 3 years of age. They are not reproductively mature until about 3 or 4
                years old for females, and for males, it is about 4 to 5 years old.</p>
        </div>
    </div>


    <div class="page_name">
        <h1>Population</h1>
    </div>

    <div class="page_theme">
        <div class="page_photo">

            <img src="Assets/tiger_ph4.jpg">

        </div>
        <div class="container">

            <button class="accordion"> <i class="fas fa-user"></i> Population threats</button>
            <div class="panel">
                <p>Major reasons for tiger population decline
                    include habitat destruction, habitat fragmentation,
                    and poaching. Tigers are also victims of human-wildlife
                    conflict, particularly in range countries with a high human population density.
                </p>
            </div>

            <button class="accordion"> <i class="fas fa-video"></i> Population number</button>
            <div class="panel">
                <p>According to the Defenders Of Wildlife resource, the total population
                    size of the Tiger is around 3,000-4,500 individuals. There are estimated
                    to be less than 2,000 Bengal tigers, 750 to 1,300 Indochinese tigers; 450
                    Siberian tigers, 400 to 500 Sumatran tigers, and 600 to 800 Malayan tigers.
                </p>
                <p>According to the IUCN Red List, the total population size of this species is
                    around 2,154-3,159 mature individuals. Overall, currently, tigers are classified
                    as Endangered (EN) on the IUCN Red List and their numbers today are decreasing.</p>
            </div>
            <button class="accordion"> <i class="fas fa-video"></i> Ecological niche</button>
            <div class="panel">
                <p>Tigers help control the populations of their large herbivorous prey, 
                    which all put pressure on various plant communities. 
                    Due to their role as top predators, they are considered keystone species.</p>

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