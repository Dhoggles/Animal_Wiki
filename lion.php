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
        <h1>LION</h1>
    </div>
    <div class="page_theme">



        <div class="photo_table">
            <img src="Assets/lion.jfif">
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
                <td>Panthera leo</td>
            </tr>
            </table>
        </div>
    </div>
    <div class="page_theme">
        <div class="page_text">
        <p>
        The lion (Panthera leo ) is a large cat of the genus Panthera native to Africa and India. 
        It has a muscular, broad-chested body, short, rounded head, round ears, and a hairy tuft 
        at the end of its tail. It is sexually dimorphic; adult male lions are larger than females 
        and have a prominent mane. It is a social species, forming groups called prides. 
        </p>
        <p>
        A lion's 
        pride consists of a few adult males, related females, and cubs. Groups of female lions usually 
        hunt together, preying mostly on large ungulates. The lion is an apex and keystone predator; 
        although some lions scavenge when opportunities occur and have been known to hunt humans, 
        the species typically does not actively seek out and prey on humans.
        </p>
        </div>
    </div>




    <div class="page_name">
        <h1>Photos with Lion</h1>
    </div>

    <div class="page_theme_photo">
        <section aria-label="Newest Photos">
            <div class="carousel" data-carousel>
                <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>
                <button class="carousel-button next" data-carousel-button="next">&#8658;</button>
                <ul data-slides>
                    <li class="slide" data-active>
                        <img src="Assets/lion_ph1.jpg" alt="Nature Image #1">
                    </li>
                    <li class="slide">
                        <img src="Assets/lion_ph2.jpg" alt="Nature Image #2">
                    </li>
                    <li class="slide">
                        <img src="Assets/lion_ph3.jfif" alt="Nature Image #3">
                    </li>
                    <li class="slide">
                        <img src="Assets/lion_ph4.jpg" alt="Nature Image #3">
                    </li>
                    <li class="slide">
                        <img src="Assets/lion_ph5.jfif" alt="Nature Image #3">
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

            <img src="Assets/lion_ph3.jfif">

        </div>
        <div class="page_text">
        <p>Lions can be active at any time of the day but their activity 
            generally peaks after dusk with a period of socializing and 
            grooming. Most hunting often takes place at dusk. Apart from 
            that African lions spend much of their time resting. They rest 
            in order to save energy, in the absence of prey, or to escape 
            the midday heat. 
            </p>
            <p>
            African lions are highly social animals, gathering 
            in groups or prides, which include up to 3 male lions and multiple 
            lionesses with their young. Prides are defended by males, who patrol 
            and mark the territory. However, there's harsh competition between males 
            for the territory and position in the pride. 
            </p>
            <p>
            In a case, if another male 
            overcomes the leading male of the pride, he usually kills all cubs, 
            sired by the previous male. Meanwhile, males do not tend to hunt due 
            to their slow speed and eye-catching appearance. Instead, hunting is 
            left to females of the pride, who hunt in groups, cooperating with each 
            other during their hunting trips. 
            </p>
            <p>
            The females are excellent hunters:
             they are faster and more agile than males, able to hunt down animals 
             that are much bigger and faster than them.</p>
        </div>
    </div>

    <div class="page_name">
        <h1>Diet and Nutrition</h1>
    </div>
    <div class="page_theme">
        <div class="page_text">
        <p>Lions are generalist hypercarnivores. 
            They primarily hunt on zebras, antelopes, gazelles, deer, buffalos, 
            young giraffes, warthogs, wildebeest, young elephants, less frequently – on hares and birds. 
            Lions can also scavenge on carrion when the opportunity arises; they scavenge animals 
            dead from natural causes such as disease or those that were killed by other predators 
            such as hyenas.</p>
        </div>
    </div>
    <div class="page_name">
        <h1>Mating Habits</h1>
    </div>
    <div class="page_theme">
        <div class="page_text">
        <p>Lions have a polygynous mating system, meaning that a male lion 
            can mate with a number of lionesses. They breed throughout the 
            year with the peak period, occurring during the rainy season. 
            The gestation period lasts from 110 to 119 days, yielding 3-6 
            cubs on average. 
        </p>
        <p>
        The female gives birth in a hidden, solitary nursery. 
            Reaching the age of 4-6 weeks, the cubs join the pride. Usually, all 
            females of the pride feed and care for the young; when a mother female 
            leaves the pride to hunt, another lactating female will feed her cubs. 
           
        </p>
        <p>
        Weaning occurs at the age of 6-7 months, though the cubs typically stay 
            close to their mother during the first two years of their lives. Males 
            become reproductively mature at 5 years old while females reach maturity 
            earlier, at 2.5-3 years of age.</p>
        </div>
    </div>


    <div class="page_name">
        <h1>Population</h1>
    </div>

    <div class="page_theme">
        <div class="page_photo">

            <img src="Assets/lion_ph5.jfif">

        </div>
        <div class="container">

            <button class="accordion"> <i class="fas fa-user"></i> Population threats</button>
            <div class="panel">
            <p>Lions have long been hunted out of fear and as trophies.
                 However, hunting is still one of the major factors, 
                 threatening these animals' population across Africa. 
                 
            </p>
            <p>
            Currently, they suffer from loss of their range due to 
                 growing human settlements and alteration of their habitat 
                 into agricultural lands. Meanwhile, those, living nearby human 
                 settlements, are exposed to diseases, spread by domestic dogs.</p>
            </div>

            <button class="accordion"> <i class="fas fa-video"></i> Population number</button>
            <div class="panel">
            <p>Nowadays, the overall population of the lion is sharply decreasing, 
                estimated to 20,000 individuals throughout Africa. On the IUCN Red List, 
                the species is classified as Vulnerable.</p>
            </div>
            <button class="accordion"> <i class="fas fa-video"></i> Ecological niche</button>
            <div class="panel">
            <p>Lions are an irreplaceable link in the ecosystem of their range. 
                Feeding upon herbivorous animals such as zebras or buffaloes, 
                they control the numbers of these species’ populations. Otherwise, 
                these herbivores could out-compete other animals of their range, 
                leading to the complete extinction of these species and thus 
                destructing the biodiversity of the ecosystem.</p>

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