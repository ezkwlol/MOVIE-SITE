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
    <?php require_once('includes/header.php') ?>
    <div class="container">
        <nav class="navbar">
            <div class="container fluid">
                <ul class="navbar-nav">
                    <li>
                        <a class="nav-link" href="#">Movies</a>
                    </li>
                </ul>
            </div>
        </nav>
        <h1>Movies</h1>
            <div class="row">
                    <?php $i=0; foreach($movies as $movie_key => $movie){ $i++; ?>
                        <div class="col-md-4 mb-4 d-flex align-items-stretch" id="movie-<?php echo $movie['id']; ?> ">
                            <div class="card">
                                <img class="card-img-top" src="<?php echo $movie['posterUrl']; ?>" alt="<?php echo $movie['title']; ?>">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title"><?php echo $movie['title']; ?></p>
                                    <p class="card-text"><?php echo $movie['plot'] . '...';?></p>
                                    <form class="d-flex">
                                        <a class="btn btn-primary" href="movie.php?movie_id=<?php echo $movie_key;?>" role="button">Read more</a>
                                    </form>
                                </div>
                            </div>
                        </div>            
                        <?php
                    }
                ?>
            </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <?php require_once('includes/footer.php') ?>
</body>
</html>