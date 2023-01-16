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
            <img src="Assets/emperor_penguin.jpg">
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
                    <td>Aptenodytes</td>
                </tr>
                <tr>
                    <td>SPECIES</td>
                    <td>Aptenodytes forsteri</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="page_theme">
        <div class="page_text">
            <p>
                The Emperor penguin is the largest penguin species in the world.
                This bird is a rather interesting species from a biological standpoint.
                The Emperor penguin has streamlined plumage, consisting of shiny, water-repellent feathers,
                which prevent the skin from getting wet.
            </p>
            <p>
                The webbed feet of the animal make swimming much easier.
                The head is big, the neck is short and thick, and the tail is wedge-shaped and short. The tiny wings
                of the penguin resemble flippers by their shape.
            </p>
            <p>
                The blackish-blue head is covered with large white and
                yellow markings on the ears of the animal. The upperparts are blue-grey while the underparts are white,
                except with the upper breast, having a pale yellow coloring. Males and females are alike.
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
                        <img src="Assets/emperor_penguin_ph4.jpeg" alt="Nature Image #1">
                    </li>
                    <li class="slide">
                        <img src="Assets/emperor_penguin_ph1.jpg" alt="Nature Image #2">
                    </li>
                    <li class="slide">
                        <img src="Assets/emperor_penguin_ph2.jpg" alt="Nature Image #3">
                    </li>
                    <li class="slide">
                        <img src="Assets/emperor_penguin_ph3.jpg" alt="Nature Image #3">
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

            <img src="Assets/emperor_penguin_ph4.jpeg">

        </div>
        <div class="page_text">
            <p>
                These birds are non-migratory, living deep in the Southern Ocean throughout the year.
                Emperor penguins can be active at any time of the night and day. They are highly social
                birds, gathering in groups to forage and nest. They form large nesting colonies;
            </p>
            <p>
                if the weather is good and usually defend only small areas around them. When it gets
                too cold, the birds huddle together. Breeding adults have to constantly travel between
                the nesting and foraging areas all year round. When in water, Emperor penguins are excellent
                swimmers;
            </p>
            <p>
                when on land, they either walk with the identifying waddling gait or slide over
                the ice surface on their bellies, propelling themselves with their feet.
            </p>
        </div>
    </div>

    <div class="page_name">
        <h1>Diet and Nutrition</h1>
    </div>
    <div class="page_theme">
        <div class="page_text">
            <p>This penguin is a carnivore (piscivore and molluscivore),
                feeding exclusively upon aquatic animals.
                Their diet mainly consists of krill and fish,
                supplemented with squid and crustaceans.</p>
        </div>
    </div>
    <div class="page_name">
        <h1>Mating Habits</h1>
    </div>
    <div class="page_theme">
        <div class="page_text">
            <p>
                The Emperor penguins have serially monogamous system,
                mating with only one mate during each season. In March-April,
                the birds return to their breeding colonies. The gestation period
                lasts for 63 days.
            </p>
            <p>
                Usually, a female penguin lays a single egg, leaving
                it to the male, and going out to sea. The male is responsible for keeping
                the egg warm, carrying it on his feet, and incubating the egg for 9 weeks.
                The hatching occurs after 70 days, which matches the return of the female.
            </p>
            <p>
                When the chick hatch out, the male leaves to forage, and this time the female
                has to care for the hatchling, feeding it and keeping it warm. The chicks of
                the Emperor penguin grow up quite rapidly. Reaching the age of 150 days,
                the young fledge. Male penguins start breeding at 5-6 years
                old while females - at 5 years of age.
            </p>
        </div>
    </div>


    <div class="page_name">
        <h1>Population</h1>
    </div>

    <div class="page_theme">
        <div class="page_photo">

            <img src="Assets/emperor_penguin_ph4.jpeg">

        </div>
        <div class="container">

            <button class="accordion"> <i class="fas fa-user"></i> Population threats</button>
            <div class="panel">
                <p>Global warming negatively affects the population of these animals,
                    decreasing the area of pack ice, which is the natural habitat of the
                    Emperor penguins. Another concern is fishing vessels that sometimes
                    accidentally catch these penguins in their nets..</p>
            </div>

            <button class="accordion"> <i class="fas fa-video"></i> Population number</button>
            <div class="panel">
                <p>The overall estimated population of these penguins is about 595,000 mature individuals.
                    Despite the fact, that the total population of the Emperor penguin is presently stable,
                    on the IUCN Red List the species is classified as Near Threatened.</p>
            </div>

            <button class="accordion"> <i class="fas fa-edit"></i> Ecological niche</button>
            <div class="panel">
                <p>Emperor penguins are an irreplaceable link in the ecosystem of their range.
                    These birds consume various marine species such as small fish, cephalopods,
                    or crustaceans. Besides, penguins are an important source of food for larger
                    local predators, including leopard seals and large sharks.</p>
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