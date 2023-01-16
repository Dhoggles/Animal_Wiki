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
        <h1>KOMODO DRAGON</h1>
    </div>
    <div class="page_theme">



        <div class="photo_table">
            <img src="Assets/komodo_dragon.jfif">
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
                <td>Varanidae</td>
            </tr>
            <tr>
                <td>GENUS</td>
                <td>Varanus</td>
            </tr>
            <tr>
                <td>SPECIES</td>
                <td>Varanus komodoensis</td>
            </tr>
            </table>
        </div>
    </div>
    <div class="page_theme">
        <div class="page_text">
        <p>
        The Komodo dragon (Varanus komodoensis ), also known as the Komodo monitor, 
        is a member of the monitor lizard family Varanidae that is endemic to the Indonesian 
        islands of Komodo, Rinca, Flores, and Gili Motang. It is the largest extant species of 
        lizard, growing to a maximum length of 3 metres (10 ft), and weighing up to approximately 70 kilograms (150 lb).
        </p>
        </div>
    </div>




    <div class="page_name">
        <h1>Photos with Komodo Dragon</h1>
    </div>

    <div class="page_theme_photo">
        <section aria-label="Newest Photos">
            <div class="carousel" data-carousel>
                <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>
                <button class="carousel-button next" data-carousel-button="next">&#8658;</button>
                <ul data-slides>
                    <li class="slide" data-active>
                        <img src="Assets/komodo_dragon_ph1.jfif" alt="Nature Image #1">
                    </li>
                    <li class="slide">
                        <img src="Assets/komodo_dragon_ph2.jpg" alt="Nature Image #2">
                    </li>
                    <li class="slide">
                        <img src="Assets/komodo_dragon_ph3.jpg" alt="Nature Image #3">
                    </li>
                    <li class="slide">
                        <img src="Assets/komodo_dragon_ph4.jfif" alt="Nature Image #3">
                    </li>
                    <li class="slide">
                        <img src="Assets/komodo_dragon_ph5.jpg" alt="Nature Image #3">
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

            <img src="Assets/komodo_dragon_ph2.jpg">

        </div>
        <div class="page_text">
        <p>
        Komodo dragons are most active in the day, although they exhibit some nocturnal activity. 
        They are solitary and come together only to breed and eat. 
        These lizards are capable of running rapidly in brief sprints up 
        to 20 km/h (12 mph), diving up to 4.5 m (15 ft), and climbing trees 
        proficiently when young through use of their strong claws. 
            </p>
            <p>
            To catch out-of-reach prey,
         Komodo dragons may stand on their hind legs and use their tail as a support. 
         As they mature, their claws are used primarily as weapons, as their great size 
         makes climbing impractical. For shelter, Komodo dragons dig holes with their 
         powerful forelimbs and claws. These holes can measure from 1 to 3 m (3.3 to 9.8 ft) wide. 
        
            </p>
            <p>
            Because of their large size and habit of sleeping in these burrows, these lizards are able 
         to conserve body heat throughout the night and minimize their basking period the morning after. 
         Komodo dragon hunt in the afternoon, but stay in the shade during the hottest part of the day. 
         These special resting places, usually located on ridges with cool sea breezes, are marked with 
         droppings and are cleared of vegetation. They serve as strategic locations from which Komodo 
         dragons ambush deer.
            </p>
        </div>
    </div>

    <div class="page_name">
        <h1>Diet and Nutrition</h1>
    </div>
    <div class="page_theme">
        <div class="page_text">
        <p>Komodo dragons are carnivores. 
            Although they have been considered as eating mostly carrion, 
            they will frequently ambush live prey. Their diet is wide-ranging 
            and includes invertebrates, other reptiles (including smaller Komodo dragons), 
            birds, bird eggs, small mammals, monkeys, wild boar, goats, deer, horses, 
            and water buffalo. Young Komodos will eat insects, eggs, geckos, and small mammals, 
            while adults prefer to hunt large mammals. Occasionally, they attack and bite humans.</p>
        </div>
    </div>
    <div class="page_name">
        <h1>Mating Habits</h1>
    </div>
    <div class="page_theme">
        <div class="page_text">
        <p>
        Komodo dragons exhibit a rare behavior for lizards; they may be monogamous and form "pair bonds". 
        Mating occurs between May and August, with the eggs laid in September. During this period, males 
        fight over females and territory by grappling with one another upon their hind legs, with the loser
         eventually being pinned to the ground. These males may vomit or defecate when preparing for the fight.
          
        </p>
        <p>
        The winner of the fight will then flick his long tongue at the female to gain information about her 
          receptivity. Females are antagonistic and resist with their claws and teeth during the early phases 
          of courtship. Other courtship displays include males rubbing their chins on the female, hard scratches 
          to the back, and licking. Females lay their eggs from August to September and may use several types of 
          the locality. 
        </p>
        <p>
        They make many camouflage nests/holes to prevent other dragons from eating the eggs. 
          Clutches contain an average of 20 eggs, which are incubated around 7-8 months. Hatching is an exhausting 
          effort for the neonates, which break out of their eggshells with an egg tooth that falls off before long. 
          After cutting themselves out, the hatchlings may lie in their eggshells for hours before starting to dig 
          out of the nest. They are born quite defenseless and are vulnerable to predation. Young Komodos spend much 
          of their first few years in trees, where they are relatively safe from predators. They become reproductively mature at 8-9 years of age.
        </p>
        </div>
    </div>


    <div class="page_name">
        <h1>Population</h1>
    </div>

    <div class="page_theme">
        <div class="page_photo">

            <img src="Assets/komodo_dragon_ph3.jpg">

        </div>
        <div class="container">

            <button class="accordion"> <i class="fas fa-user"></i> Population threats</button>
            <div class="panel">
            <p>
            Volcanic activity, earthquakes, loss of habitat, fire, 
            loss of prey due to poaching, tourism, and illegal poaching 
            of the dragons themselves have all contributed to the vulnerable 
            status of the Komodo dragon.
            </p>
            </div>

            <button class="accordion"> <i class="fas fa-video"></i> Population number</button>
            <div class="panel">
            <p>
            According to the Wikipedia resource, in 2015 the total population 
            size of the Komodo dragon was 3,014 individuals. Currently, 
            this species is classified as Vulnerable (Vu) on the IUCN Red List.
            </p>
            </div>
            <button class="accordion"> <i class="fas fa-video"></i> Ecological niche</button>
            <div class="panel">
            <p>
            As a result of their size, Komodo dragons dominate the ecosystems in which they live. 
            They are top predators and also scavengers. These lizards eat recently dead animals 
            preventing the spread of disease and assist with a sort of “natural recycling”.
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