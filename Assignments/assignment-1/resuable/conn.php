<?php
$connect = mysqli_connect('localhost', 'root', 'root', 'animedb');
if (!$connect) {
  die("Connection Failed: " . mysqli_connect_error());
}
// fetch data from top250_anime table and  image url from anime_data table
$query = '
    SELECT 
        top250_anime.*, 
        anime_data.main_picture
    FROM 
         top250_anime 
    JOIN 
        anime_data 
    ON 
        anime_data.title =  top250_anime.Title
    LIMIT 1000';
$animes = mysqli_query($connect, $query);
?>