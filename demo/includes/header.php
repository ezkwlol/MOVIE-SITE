<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="d-flex flex-column min-vh-100">
        <?php require_once('functions.php') ?>
        <?php
            define("logo_explorer", ["CG"] );
        ?>
        <?php

            $navy = array (
                array(
                    'nume' => 'Home',
                    'link' => 'index.php'
                ),
                array(
                    'nume' => 'Movies',
                    'link' => 'movies.php'
                ),
                array(
                    'nume' => 'Contact',
                    'link' => 'contact.php'
                ),

            );

        ?>
        <nav class="navbar navbar-expand-md bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="../demo/index.php"><?php echo logo_explorer[0];?></a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php
                    $current_uri = basename ($_SERVER ['REQUEST_URI']);
                    foreach ($navy as $nav){?>
                    <li class="nav-item">
                        <a class="nav-link <?php if('current_uri' == $nav['link']){echo 'active';}?>"
                    href="<?php echo $nav['link'];?>"><?php echo $nav['nume']; ?></a>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
                <?php require_once('search-form.php') ?>
            </div>    
        </nav>

        <?php
          if(!in_array($current_uri, array('index.php', 'contact.php'))){
            $movies = json_decode(file_get_contents('./assets/movies-list-db.json'), true)['movies'];
          }     
        ?>  
</body>
</html>