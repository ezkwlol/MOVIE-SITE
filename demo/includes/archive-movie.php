<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

                <?php foreach($movies as $movie){ ?>
                        <div class="col-md-4 mb-4 d-flex align-items-stretch" id="movie-<?php echo $movie['id']; ?> ">
                            <div class="card">
                                <img class="card-img-top" src="<?php echo $movie['poster']; ?>" alt="<?php echo $movie['title']; ?>">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title"><?php echo $movie['title']; ?></p>
                                    <p class="card-text"><?php echo $movie['desc'] . '...';?></p>
                                    <form class="d-flex">
                                        <a class="btn btn-primary" href="<?php echo $movie['permalink']; ?>" role="button">Read more</a>
                                    </form>
                                </div>
                            </div>
                        </div>            
                        <?php
                    }
                ?>
    
</body>
</html>