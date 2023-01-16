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
        <img src="Assets/wandering_albatross.jpg">
        <div class="common_information_block_text">
            <h1>WANDERING ALBATROSS</h1>
            <a href="#" class="categories-link"><h4>Diomedea exulans</h4></a>
            <div class="categories-div"><p>
                Described as "The bird which made the breeze to blow" the
                wingspan of a Wandering albatross is the longest of any bird.
                It lives up to its name when it takes fishing trips that last
                10-20 days and can cover 10,000 km while using hardly more energy
                than when sitting on its nests...
            </p></div>
            <div class="common_information_block_button"><a href="wandering_albatross.php">Read more</a></div>
        </div>

    </div>

    <div class="common_information_block">
        <img src="Assets/adelie_penguin_ph3.jpg " width="350px" >
        <div class="common_information_block_text">
            <h1>ADÉLIE PENGUIN</h1>
            <a href="#" class="categories-link"><h4>Pygoscelis adeliae</h4></a>
            <div class="categories-div"><p>The Adélie penguin (Pygoscelis adeliae ) is a species of penguin common along 
                the entire coast of the Antarctic continent, which is the only place where it is found. 
                It is the most widespread penguin species, and, along...</p></div>

            <div class="common_information_block_button"><a href="adelie_penguin.php">Read more</a></div>
        </div>

    </div>

    <div class="common_information_block">
        <img src="Assets/emperor_penguin.jpg">
        <div class="common_information_block_text">
            <h1>EMPEROR PENGUIN</h1>
            <a href="#" class="categories-link"><h4>Aptenodytes forsteri</h4></a>
            
            <div class="categories-div"><p>
                The Emperor penguin is the largest penguin species in the world.
                This bird is a rather interesting species from a biological standpoint.
                The Emperor penguin has streamlined plumage, consisting of shiny,
                water-repellent feathers, which prevent...
            </p></div>
            <div class="common_information_block_button"><a href="emperor_penguin.php">Read more</a></div>
        </div>

    </div>


    <br>
<br>

</body>

</html>