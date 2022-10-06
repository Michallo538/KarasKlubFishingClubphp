<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fishing club bruh lmao cringe yoll</title>
    <link data-require="bootstrap@4.0.0-beta" data-semver="4.0.0-beta" rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="/JavaScript/bootstrap-721d948.min.js"></script>
    <link rel="stylesheet" href="/Styles/bootstrap-min.css">
    <link rel="stylesheet" href="/Styles/style.css" />
    <script src="/JavaScript/app.js"></script>
    <script src="/JavaScript/backgroundbanner.js"></script>
</head>
<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>

<body onload="myFunction()" style="margin:0;">
    <!--Preloader-->
    <div class="wrapper">
        <div class="loader">
            <img style="width:200px ; height:200px;" src="/Images/340.svg" alt="Preloader with fish spinning in a circle"> 
        </div>
    </div>



    <div class="main-container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/index.php">Klub Wędkarski | Karaś</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/index.php">Strona Głowna <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blogindex.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontakt</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
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




        <div class="CarouselContainer">

            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="Images/RouletePhoto1Crop.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/Images/RouletePhoto2Crop.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/Images/RouletePhoto4Crop.jpg" alt="Third slide">
                    </div>
                </div>
            </div>

        </div>



        <div style="display:flex; flex-direction:column; align-items:center; justify-content:center; margin-right:40%; margin-left:40%; "
            class="Container BlogContainer bg-secondary text-white rounded mt-5">
            <div style="display:flex;" class="BlogContainer">
                <p style="align-items:center;">Tutaj Zobacz posty na naszym blogu!</p>
            </div>
            <br>
            <div class="ViewBlogButton ">
                <a style="font-size: 20px;" href="blogindex.php" class="btn btn-dark"> Zobacz Blogi! </a>

            </div>
        </div>


        <div class="container">

        </div>



    </div>
</body>

</html>