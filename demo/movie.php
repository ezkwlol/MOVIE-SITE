<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curala Gabriel</title>
    
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body class="d-flex flex-column min-vh-100">
    <?php require_once('includes/header.php') ?>
    <?php require_once('includes/functions.php');

    if(!empty($_GET) && isset($_GET['movie_id'])){
        $movie = $movies[$_GET['movie_id']]; 
        $actors = explode(',', $movie['actors']);
    ?>
    <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="<?php echo $movie['posterUrl']; ?>" alt="">
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body d-flex flex-column">
                            <h1 class="card-title"><?php echo $movie['title'];?></h1>
                            <h4 class="card-subtitle mb-2 text-muted"><?php echo $movie['year'];?></h4>
                            <p class="card-text"><?php echo $movie['plot'];?></p>
                            <p class="card-text">Regizat de: <?php echo $movie['director'];?></p>
                            <p class="card-text"> Personaje: 
                                <ul>    
                                    <?php
                                         foreach ($actors as $actor) { ?>
                                        <li>
                                            <?php echo "$actor"; }?>
                                        </li> 
                                    </ul>    
                            </p>
                            <strong>Runtime: <?php echo runtime_prettier($movie['runtime']); ?></strong>
                        </div>
                    </div>
                </div> 
            </div>
    </div>
    <?php 
    }
        else {
        echo " Ai intrat in pagina gresita";
        return;
    }?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <?php require_once('includes/footer.php') ?>
</body>
</html>