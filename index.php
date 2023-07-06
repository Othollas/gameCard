<?php
$json = file_get_contents("movies.json");

$movies = json_decode($json, true);


include("template/header.php")
?>

<div class="depart">
    <h1>Movies de M....</h1>
    <p>les films que tu dois voir absolument sinon tu n'as pas de culture cinematographique mais personne ne se pose de question sur toxic avenger ou meme sur l'été de kikujiro, pourtant c'est un trés bon film par kitano et pour tant il est trés soucoté parcequ'il est mignon, ainsi que de multiples films inconnus et qui reste à decouvrir mais non !!! on va encore et toujours bouffer la meme merde jusqu'a plus soif </p>
</div>

<div class="container">
    <?php
    foreach ($movies as $movie) {


    ?>

        <!-- <h2><?= $movie["title"] ?></h2> -->
        <div class="movie">
            <a href="movie.php?id=<?= $movie["id"] ?>">
                <img src="<?= $movie["picture"] ?>" alt="">
            </a>
        </div>

    <?php
    }
    ?>
</div>
<?php include "template/footer.php" ?>