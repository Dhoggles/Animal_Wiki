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
        <h1>KING KOBRA</h1>
    </div>
    <div class="page_theme">



        <div class="photo_table">
            <img src="Assets/king_kobra.jpg">
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
                <td>Ophiophagus</td>
            </tr>
            <tr>
                <td>SPECIES</td>
                <td>Ophiophagus hannah</td>
            </tr>
            </table>
        </div>
    </div>
    <div class="page_theme">
        <div class="page_text">
        <p>
        The king cobra (Ophiophagus hannah ) 
        is a venomous snake species of elapids endemic 
        to jungles in Southern and Southeast Asia. The sole 
        member of the genus Ophiophagus, it is distinguishable from other cobras, 
        most noticeably by its size and neck patterns. 
        </p>
        <p>
        The king cobra is the world's 
        longest venomous snake, with an average length of 3.18 to 4 m (10.4 to 13.1 ft), 
        reaching a maximum of 5.85 m (19.2 ft). Its skin colour varies across the habitats, 
        from black with white stripes to unbroken brownish grey. It preys chiefly on other snakes, 
        including its own species. Unlike other snakes, it rarely hunts other vertebrates, such as rodents and lizards.
        </p>
        </div>
    </div>




    <div class="page_name">
        <h1>Photos with King Cobra</h1>
    </div>

    <div class="page_theme_photo">
        <section aria-label="Newest Photos">
            <div class="carousel" data-carousel>
                <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>
                <button class="carousel-button next" data-carousel-button="next">&#8658;</button>
                <ul data-slides>
                    <li class="slide" data-active>
                        <img src="Assets/king_kobra_ph1.jpg" alt="Nature Image #1">
                    </li>
                    <li class="slide">
                        <img src="Assets/king_kobra_ph2.jfif" alt="Nature Image #2">
                    </li>
                    <li class="slide">
                        <img src="Assets/king_kobra_ph3.jfif" alt="Nature Image #3">
                    </li>
                    <li class="slide">
                        <img src="Assets/king_kobra_ph4.jpg" alt="Nature Image #3">
                    </li>
                    <li class="slide">
                        <img src="Assets/king_kobra_ph5.jfif" alt="Nature Image #3">
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

            <img src="Assets/king_kobra_ph2.jfif">

        </div>
        <div class="page_text">
        <p>
        King cobras are solitary creatures and only come together to mate. 
        They are active throughout the day, but may also be seen at night. 
        King cobras, like other snakes, receive chemical information via their 
        forked tongue, which picks up scent particles and transfers them to a 
        special sensory receptor (Jacobson's organ) located in the roof of their
         mouth. 
            </p>
            <p>
            When the scent of a meal is detected, the snake flicks its tongue 
         to gauge the prey's location (the twin forks of the tongue acting in stereo); 
         it also uses its keen eyesight. King cobras are able to detect moving prey 
         almost 100 m (330 ft) away. Their intelligence and sensitivity to earth-borne 
         vibration are also used to track their prey. When annoyed, King cobras prefer
          to escape and avoid confrontation. 
            </p>
            <p>
            However, if continuously provoked, they 
          can be highly aggressive. When alarmed, they rear up the anterior portion 
          (usually one-third) of their body when extending the neck, showing the fangs 
          and hissing loudly. When raising their body, King cobras can still move forward 
          to strike with a long-distance and people may misjudge the safe zone. 
            </p>
            <p>This snake 
          can deliver multiple bites in a single attack, and adults are known to bite and 
          hold on. If King cobras face a natural predator, such as the mongoose, which has 
          resistance to the neurotoxins, these snakes generally try to flee. If unable to do 
          so, they form the distinctive cobra hood and emit a hiss, sometimes with feigned 
          closed-mouth strikes.</p>
        </div>
    </div>

    <div class="page_name">
        <h1>Diet and Nutrition</h1>
    </div>
    <div class="page_theme">
        <div class="page_text">
        <p>King cobras are carnivores and their diet consists 
            primarily of other snakes and even other venomous snakes 
            such as various members of the true cobras and the krait. 
            When food is scarce, King cobras also feed on other small 
            vertebrates, such as lizards, birds, and rodents.</p>
        </div>
    </div>
    <div class="page_name">
        <h1>Mating Habits</h1>
    </div>
    <div class="page_theme">
        <div class="page_text">
        <p>
        King cobras are suggested to be monogamous returning to a 
        previous mate every breeding season. They breed from January 
        through April. King cobras are oviparous (egg-laying). 
        Females build a nest in which they lay 12 to 51 eggs and guard 
        it during the incubation period of about 51 to 79 days. 
        
        </p>
        <p>
        The hatchlings are 31 to 73 cm (12 to 29 in) long and weigh 18.4 
        to 40 g (0.65 to 1.41 oz). They are independent at birth. 
        The King cobra is unusual among snakes in that the female is a very 
        dedicated parent. For the nest, the female scrapes up leaves and other 
        debris into a mound and stays in the nest until the young hatch.
        </p>
        <p>
        She guards 
        the mound tenaciously, rearing up into a threat display if any large animal 
        gets too close. Inside the mound, the eggs are incubated at a steady 28 °C (82 °F). 
        When the eggs start to hatch, the female leaves the nest. The baby King cobra's venom 
        is as potent as that of the adults. They may be brightly marked, but these colors
         often fade as they mature. They are alert and nervous, being highly aggressive if disturbed.
        </p>
        </div>
    </div>


    <div class="page_name">
        <h1>Population</h1>
    </div>

    <div class="page_theme">
        <div class="page_photo">

            <img src="Assets/king_kobra_ph3.jfif">

        </div>
        <div class="container">

            <button class="accordion"> <i class="fas fa-user"></i> Population threats</button>
            <div class="panel">
            <p>
            King cobra populations have dropped in some areas of its 
            range because of the destruction of forests and ongoing collection 
            for the international pet trade. These snakes also suffer 
            from harvesting for meat, skin, and use in traditional medicine.
            </p>
            </div>

            <button class="accordion"> <i class="fas fa-video"></i> Population number</button>
            <div class="panel">
            <p>
            The IUCN Red List and other sources don’t provide the number of 
            the King cobra total population size. Currently, this species is 
            classified as Vulnerable (VU) on the IUCN Red List and its numbers 
            today are decreasing.
            </p>
            </div>


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