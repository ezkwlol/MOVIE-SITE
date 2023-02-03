<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="d-flex flex-column min-vh-100">
    <?php
        define("anul_curent", [" 2022"] );
    ?>
    <footer class="page-footer mt-auto font-small bg-dark">
            <div class="footer-copyright text-center py-3"><?php echo logo_explorer[0];?>. Copyright. Toate drepturile rezervate.<?php echo anul_curent[0];?></div>
    </footer>
</body>
</html>