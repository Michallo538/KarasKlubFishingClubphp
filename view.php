<?php

include "logic.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    foreach ($query as $q) { ?>
    <title> <?php echo $q['PostTitle'];  ?>| Klub Karaś</title>

    <?php } ?>

    <link data-require="bootstrap@4.0.0-beta" data-semver="4.0.0-beta" rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="/JavaScript/bootstrap-721d948.min.js"></script>
    <link rel="stylesheet" href="/Styles/bootstrap.css">
    <link rel="stylesheet" href="/Styles/style.css" />
    <script src="/JavaScript/app.js"></script>
    <script src="/JavaScript/backgroundbanner.js"></script>
    <script>
    document.getElementById("datepicker").valueAsDate = new Date();
    </script>
</head>


<body>
    <div class="main-container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/index.php">Klub Wędkarski | Karaś</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="/index.php">Strona Głowna <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontakt</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Więcej
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Zaloguj się</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container mt-5">
            <?php foreach ($query as $q){ ?>
            <div class="bg-dark p-5 rounded-lg text-white text-center">
                <h2> <?php echo $q['PostTitle']; ?> </h2>
                <div class="d-flex mt-2 justify-content-center align-items-center">

                </div>
            </div>
            <p class="mt-5 border-left border-dark pl-3"><?php echo $q['PostDescription']; ?>  </p>
            <p> <?php echo $q['AdminName']; ?> </p>

            <?php } ?>
        </div>









    </div>

</body>