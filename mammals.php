<!DOCTYPE html>
<html lang="en">

<head>
    <title>Animal enciclopedia</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">


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
        <img src="Assets/blue_whale.jpg">
        <div class="common_information_block_text">
            <h1>BLUE WHALE</h1>
            <a href="#" class="categories-link"><h4>Balaenoptera musculus</h4></a>
            
            <div class="categories-div"><p>
            The blue whale (Balaenoptera musculus ) is a marine mammal and a baleen whale. 
            Reaching a maximum confirmed length of 29.9 meters (98 ft) and weighing 
            up to 199 metric tons (196 long tons; 219 short tons), it is the largest 
            animal known to have ever existed. The blue whale's long and slender body...
            </p></div>
            <div class="common_information_block_button"><a href="blue_whale.php">Read more</a></div>
        </div>

    </div>

    <div class="common_information_block">
        <img src="Assets/lion.jfif">
        <div class="common_information_block_text">
            <h1>LION</h1>
            <a href="#" class="categories-link"><h4>Panthera leo</h4></a>
            
            <div class="categories-div"><p>
            The lion (Panthera leo ) is a large cat of the genus Panthera native to Africa and India. 
            It has a muscular, broad-chested body, short, rounded head, round ears, and a hairy tuft 
            at the end of its tail. It is sexually dimorphic; adult male lions...
            </p></div>
            <div class="common_information_block_button"><a href="lion.php">Read more</a></div>
        </div>

    </div>

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

<br>
<br>






</body>

</html>