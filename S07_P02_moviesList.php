<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./src/min.css">
    <link rel="stylesheet" href="./src/cust.css">

    <style>
        .card {
            position: relative;
            margin: 5px;
        }
    </style>
</head>

<body>
    <?php
    require './S07_P02_list.php';
    ?>

    <div class="container">
        <div class="row">
            <?php

            foreach ($movies as $id => $info) {
                ?>

                <div class="col-md-3">
                    <div class="card">
                        <div class="rating">
                               <?= $info['name'] ?>
                           <span>
                                <img class="rating-img" src="./resources/icons/icons8-star-100.png" />
                            </span>
                            <span class="rating-rate">
                                
                                <?= $info['rating'] ?>
                            </span>
                           </div>
                        
                        <div class="card-body">
                            
                        <div class="poster">
                            
                            <img class="poster-img" src="./resources/posters/<?=$info['poster']?>"/>
                        </div>
                        <a href="./S07_P02_movie-preview.php?id=<?=$id?>">visit now</a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>

</body>

</html>