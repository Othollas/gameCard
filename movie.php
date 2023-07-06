<?php
include("template/header.php");

$json = file_get_contents("movies.json");

$movies = json_decode($json, true);


$filmID = $_GET["id"];

foreach ($movies as $movie) {
    if ($movie["id"] == $filmID) {
        
        $title =  $movie["title"];
        $description = $movie["description"];
        $release = $movie["releaseDate"];
        $duration = $movie["duration"];
        $video = $movie["video"];
        $image = $movie["picture"];
        $genres = implode(", ",$movie["genres"]);
        
    }
    
} ?>

<div class=card>
    <div class="presentation">
        <h1> <?= $title ?> </h1>
        <img src="<?= $image ?>" alt="">
    </div>

    <div class="description">
        <h2>Categorie : <?= $genres?></h2>
        <p><strong>Résumé : </strong><?= $description?></p>
        <p> sorti le : <?= $release?> </p>
        <p>Durée du film : <?= $duration?> Mn</p>
        
        <iframe width="560" height="315" src="<?= $video?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</div>

<?php


include "template/footer.php"
?>

