<!DOCTYPE html>
<html lang="en">

<head>
    <title>Animal enciclopedia</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">
    <script src="https://kit.fontawesome.com/2745e261bc.js"></script>

</head>
<style>
.categories-div{
display: none;
}
a.categories-link:hover+div{
display: block;
}
a.categories-link{
    color:grey;
}
</style>
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



  <div class="common_information_block">
        <img src="Assets/tiger.jpg">
        <div class="common_information_block_text">
            <h1>TIGER</h1>
            <a href="#" class="categories-link"><h4>Panthera tigris</h4></a>
            
            <div class="categories-div"><p>
            The tiger (Panthera tigris ) is the largest living cat species and a member of 
            the genus Panthera. It is most recognisable for its dark vertical stripes on orange 
            fur with a white underside. An apex predator, it primarily preys on...
            </p></div>
            <div class="common_information_block_button"><a href="tiger.php">Read more</a></div>
        </div>

    </div>

    <div class="common_information_block">
        <img src="Assets/komodo_dragon.jfif">
        <div class="common_information_block_text">
            <h1>KOMODO DRAGON</h1>
            <a href="#" class="categories-link"><h4>Varanus komodoensis</h4></a>
            <div class="categories-div"><p>
            The Komodo dragon (Varanus komodoensis ), also known as the Komodo monitor, 
            is a member of the monitor lizard family Varanidae that is endemic to the 
            Indonesian islands of Komodo, Rinca, Flores, 
            and Gili Motang. It is the largest extant species...
            </p></div>
            <div class="common_information_block_button"><a href="komodo_dragon.php">Read more</a></div>
        </div>

    </div>

    <div class="common_information_block">
        <img src="Assets/king_kobra.jpg">
        <div class="common_information_block_text">
            <h1>KING COBRA</h1>
            <a href="#" class="categories-link"><h4>Ophiophagus hannah</h4></a> 
            <div class="categories-div"><p>
            The king cobra (Ophiophagus hannah ) is a venomous snake species of elapids endemic to jungles 
            in Southern and Southeast Asia. The sole member of the genus Ophiophagus, it is distinguishable 
            from other cobras, most noticeably by its size and neck patterns. The king cobra is the world's longest...
            </p></div>
            <div class="common_information_block_button"><a href="king_cobra.php">Read more</a></div>
        </div>

    </div>



    <br>
<br>

</body>

</html>