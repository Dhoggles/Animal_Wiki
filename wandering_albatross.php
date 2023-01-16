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
        <h1>WANDERING ALBATROSS</h1>
    </div>
    <div class="page_theme">



        <div class="photo_table">
            <img src="Assets/wandering_albatross.jpg">
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
                    <td>Procellariiformes</td>
                </tr>
                <tr>
                    <td>FAMILY</td>
                    <td>Diomedeidae</td>
                </tr>
                <tr>
                    <td>GENUS</td>
                    <td>Diomedea</td>
                </tr>
                <tr>
                    <td>SPECIES</td>
                    <td>Diomedea exulans</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="page_theme">
        <div class="page_text">
            <p>
            The wandering albatross, snowy albatross, white-winged albatross or goonie (Diomedea exulans ) 
            is a large seabird from the family Diomedeidae, which has a circumpolar range in the Southern Ocean. 
            It was the last species of albatross to be described, and was long considered the same species as the 
            Tristan albatross and the Antipodean albatross. A few authors still consider them all subspecies of 
            the same species. The SACC has a proposal on the table to split this species, and BirdLife International 
            has already split it. Together with the Amsterdam albatross, it forms the wandering albatross species complex. 
            </p>
            <p>
            The wandering albatross is one of the two largest members of the genus Diomedea 
            (the great albatrosses), being similar in size to the southern royal albatross. 
            It is one of the largest, best known, and most studied species of bird in the world. 
            It has the greatest known wingspan of any living bird, and is also one of the most 
            far-ranging birds. Some individual wandering albatrosses are known to circumnavigate
             the Southern Ocean three times, covering more than 120,000 km (75,000 mi), in one year.
            </p>
        </div>
    </div>




    <div class="page_name">
        <h1>Photos with Wandering Albatross</h1>
    </div>

    <div class="page_theme_photo">
        <section aria-label="Newest Photos">
            <div class="carousel" data-carousel>
                <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>
                <button class="carousel-button next" data-carousel-button="next">&#8658;</button>
                <ul data-slides>
                    <li class="slide" data-active>
                        <img src="Assets/wandering_albatross_ph1.jpeg" alt="Nature Image #1">
                    </li>
                    <li class="slide">
                        <img src="Assets/wandering_albatross_ph2.jpg" alt="Nature Image #2">
                    </li>
                    <li class="slide">
                        <img src="Assets/wandering_albatross_ph3.jpg" alt="Nature Image #3">
                    </li>
                    <li class="slide">
                        <img src="Assets/wandering_albatross_ph4.jpg" alt="Nature Image #3">
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

            <img src="Assets/wandering_albatross_ph3.jpg">

        </div>
        <div class="page_text">
            <p>
            Wandering albatrosses spend most of their life in flight, landing only to breed and feed. 
            While foraging at sea in the daytime, these birds travel in small groups. Sometimes there 
            are large feeding frenzies around fishing boats. An individual may fly thousands of kilometers 
            from its breeding grounds, sometimes crossing the equator. In the breeding season, a Wandering 
            albatross is gregarious and performs a range of displays. 
            </p>
            <p>
            Vocalizations and displays are common 
            when mating or defending territory and include croaks, bill-touching, bill-clapping, pointing to 
            the sky, trumpeting, head-shaking, the “gawky look” and the "ecstatic" gesture. Individuals sometimes 
            vocalize when they are fighting over food. These birds usually disperse over the Southern Ocean once 
            the breeding season ends, and most of them probably travel east, perhaps in a circumpolar movement.
            </p>
        </div>
    </div>

    <div class="page_name">
        <h1>Diet and Nutrition</h1>
    </div>
    <div class="page_theme">
        <div class="page_text">
            <p>Wandering albatrosses are carnivores (piscivores and molluscivores), 
                they mainly eat fish, including toothfish, squid, and other cephalopods, 
                and the occasional crustacean.</p>
        </div>
    </div>
    <div class="page_name">
        <h1>Mating Habits</h1>
    </div>
    <div class="page_theme">
        <div class="page_text">
            <p>
            Wandering albatrosses are monogamous and pairs mate for life. 
            Courtship displays are the same as other species, with bill-circling, 
            sky-pointing, mutual preening, and spreading wings. Both males and females 
            perform some dances while raising their spread wings and calling. The pair 
            will only defend a small territory around their nest. 
            </p>
            <p>
            Fights may occur, but 
            these are usually over food. Breeding is from December until March. 
            This species breeds in loose colonies, and typically the nests are in 
            scattered groups. Nests are a mound of mud and grass on the ground of 
            the slopes, among the sparse vegetation. 
            </p>
            <p>
            A single creamy-white egg is 
            laid, and both parents take turns incubating for periods of 2-3 weeks 
            over 78 days. The downy white chick is brooded for 4-5 weeks, being fed 
            by regurgitation, and remaining on the nest for around 9 months. Once it fledges, 
            it flies out to sea, returning to the colony after 5-6 years. It will not start breeding until it is 11-15 years old.
            </p>
        </div>
    </div>


    <div class="page_name">
        <h1>Population</h1>
    </div>

    <div class="page_theme">
        <div class="page_photo">

            <img src="Assets/wandering_albatross_ph4.jpg">

        </div>
        <div class="container">

            <button class="accordion"> <i class="fas fa-user"></i> Population threats</button>
            <div class="panel">
                <p>

                Wandering albatrosses are relatively well protected, due to both their remote location and certain laws. 
                However, its numbers are still slowly declining. The most likely cause is longline fishing, 
                as they become hooked and will drown, as well as the ingestion of plastics, 
                which kills both chicks and adults. Once hunted for their feathers to decorate women’s hats, 
                this practice has disappeared due to changes in fashion. On Kerguelen Island, feral cats 
                have killed entire broods of chicks.
                </p>
            </div>

            <button class="accordion"> <i class="fas fa-video"></i> Population number</button>
            <div class="panel">
                <p>According to IUCN’s Red List, the current estimates for Wandering 
                    albatrosses in specific areas are: on South Georgia (Georgias del Sur), 
                    1,553 pairs; on Prince Edward Island, 1,800 pairs; on Marion Island, 
                    2,056 pairs; on Iles Crozet, 340 pairs; on Iles Kerguelen, 354 pairs; 
                    and on Macquarie Island, 4 pairs, a total of 6,107 breeding pairs, 
                    equating to about 20,100 mature individuals. Overall, currently, 
                    Wandering albatrosses are classified as Vulnerable (VU) and their numbers today are decreasing.</p>
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