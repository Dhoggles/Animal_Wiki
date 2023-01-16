<?php
$conn = mysqli_connect('localhost', 'root', '', 'new_animal_wiki');

if(!$conn){
    die("Connection failed:" . mysqli_connect_error());
}
?>