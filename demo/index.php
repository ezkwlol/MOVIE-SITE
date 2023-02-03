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

    <div class="container">
        <div class="jumbotron">
            <h1 classs="display-4">Buna ziua, vizitatorule!</h1>
            <p class="lead">Pentru a vedea lista intreaga cu toate filmele, apasa pe butonul de mai jos</p>
            <p class="lead">
              <a class="btn btn-primary btn-lg" href="../demo/movies.php" role="button">Vezi lista de filme</a>
            </p>
          </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <?php require_once('includes/footer.php') ?>
</body>

</html>