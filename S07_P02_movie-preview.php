<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/min.css">
    <link rel="stylesheet" href="./src/cust.css">
    <style>
        li{
            display: block;
            transition: ease-in-out 1s;
        }
        li:hover{
            letter-spacing: 10px;
        }
    </style>
    <?php

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        require './S07_P02_list.php';

        $movie = $movies[$id];
    }
    ?>
    <title>
        <?= $movie['name'] ?>
    </title>
</head>

<body>
    <div class="card">
        <div class="card-header">
            <div class="rating">
                <?= $movie['name'] ?>
                <span>
                    <img class="rating-img" src="./resources/icons/icons8-star-100.png" />
                </span>
                <span class="rating-rate">

                    <?= $movie['rating'] ?>
                </span>
            </div>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <?php 
                            foreach($movie['cast'] as $cast)
                            {
                                ?>
                                <li>
                                    <?=$cast?>

                                </li>
                                <?php
                            }
                        ?>
                    </div>  

                    <div class="col">
                        <div class="poster">
                            <img class="poster-img" src="./resources/posters/<?= $movie['poster'] ?>" />
                        </div>
                    </div>
                </div>
            </div>
            <blockquote class="blockquote mb-0">
                <p>
                    <?= $movie['description'] ?>
                </p>
                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite>
                </footer>
            </blockquote>
        </div>
    </div>
</body>

</html>