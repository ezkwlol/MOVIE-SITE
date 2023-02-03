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
        <nav class="navbar">
            <div class="container fluid">
                <ul class="navbar-nav">
                    <li>
                        <a class="nav-link" href="../demo/contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="row">
            <h1>Contact us</h1>
            <div class="mb-3">
                <label for="Nume" class="form-label">Nume complet</label>
                <input type="text" class="form-control" id="Nume" placeholder="Nume Prenume">
            </div>
            <div class="mb-3">
                <label for="Email" class="form-label">Adresa de email</label>
                <input type="email" class="form-control" id="Email" placeholder="contact@gmail.com">
            </div>
            <div class="mb-3">
                <label for="Text-area" class="form-label"> Mesajul dvs</label>
                <textarea class="form-control" id="Text-area" rows="5"></textarea>
            </div>
            <form class="d-flex">
                <button class="btn bg-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>



    <?php require_once('includes/footer.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>