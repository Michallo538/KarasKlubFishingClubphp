<?php
include "logic.php";
session_start();
if(!isset($_SESSION["username"])){
    header("Location:adminlogin.php");
}
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
    echo "Witaj ". htmlspecialchars($_SESSION['username']) . "!";
    
}else{
    echo"Prosze sie zalogowac by widziec tą strone!";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel | Klub Karaś</title>
    <link data-require="bootstrap@4.0.0-beta" data-semver="4.0.0-beta" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="/JavaScript/bootstrap-721d948.min.js"></script>
    <link rel="stylesheet" href="/Styles/bootstrap-min.css">
    <link rel="stylesheet" href="/Styles/style.css" />
    <script src="/JavaScript/app.js"></script>
    <script src="/JavaScript/backgroundbanner.js"></script>
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
</head>



<body>

    <div class="wrapper">
        <div class="loader">
            <img style="width:200px ; height:200px;" src="/Images/340.svg" alt="Preloader with fish spinning in a circle">
        </div>
    </div>



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



        <?php if (isset($_REQUEST['info'])) { ?>
            <?php if ($_REQUEST['info'] == "added") { ?>
                <div class="aler alert-success" role="alert">
                    Post został pomyślnie dodany!
                </div>
            <?php } elseif ($_REQUEST['info'] == "loggedin") { ?>
                <div class="alert alert-success" role="alert">
                    Zostałeś zalogowany pomyślnie
                </div>
                <?php } elseif ($_REQUEST['info'] == "updated") {?>
                    <div class="alert alert-success" role="alert">
                        Blog został aktualizowany!
                    </div>

                    <?php } ?>
            <?php } ?>

            <div class="text-center mt-5">
                <a href="create.php" style="border:1px solid black" class="btn btn-outline-dark"> + Stwórz nowy blog</a>
                <a href="Upload.php" style="border:1px solid black " class="btn btn-outline-dark">+ Dodaj zdjęcie.</a>
            </div>

            <div class="container mt-5 rounded" style="display:flex;">
                <div class="row">
                    <?php foreach ($query as $q) { ?>
                        <div style="min-height:20px; ;" class="align-items-center d-flex justify-content-center">
                            <div class="card text-white bg-dark mt-2">
                                <div class="card-body d-flex" style="width:48rem; height:20rem;     display: flex !important;
    flex-direction: column;
    align-content: flex-start;
    justify-content: space-around;">
                                    <h2 class="card-title"><?php echo $q['PostTitle']; ?></h2>
                                    <p style="font-size: 15px;" class="card-text"> <?php echo  substr($q['PostDescription'], 0, 50); ?>... </p>
                                    <p style="position:absolute; right:0px; bottom:20%;" class="card-text"> <?php echo $q['DateAdded']; ?></p>
                                    <a style="" href="adminview.php?PostID=<?php echo $q['PostID']; ?>" class="btn btn-light"> Zobacz całe... <span class="text-danger">&rarr;</span></a>
                                </div>
                            </div>
                        </div>
                    <?php  } ?>

                </div>
            </div>




</body>

</html>