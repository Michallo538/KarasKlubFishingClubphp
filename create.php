<?php
include "logic.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stwórz Blog | Klub Karaś</title>
    <link data-require="bootstrap@4.0.0-beta" data-semver="4.0.0-beta" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="/JavaScript/bootstrap-721d948.min.js"></script>
    <link rel="stylesheet" href="/Styles/bootstrap.css">
    <link rel="stylesheet" href="/Styles/style.css" />
    <script src="/JavaScript/app.js"></script>
    <script src="/JavaScript/backgroundbanner.js"></script>
    <script> document.getElementById("datepicker").valueAsDate = new Date(); </script>
</head>

<body>
    <div class="container mt-5">

        <a href="adminindex.php" style="width:100px; height:auto;" class="btn btn-dark"> Cofnij</a>


        <div style="width: 100%;" class="container mt-5" style="display: flex; align-items:Center">
            <form method="GET">
                <input autocomplete="Off" type="text" name="PostTitle" placeholder="Tytuł Bloga" class="form-control bg-dark text-white my-3 text-center">
                <input autocomplete="off" type="text" name="PostDescription" placeholder="Zawartość Bloga" class="form-control bg-dark text-white my-3 text-center">

                <input name="AdminID" class="form-control bg-dark text-white my-3 text-center" list="AdminIDs" placeholder="Admin ID">
                <input type="text" name="AdminName" placeholder="Nazwa Admina" class="form-control bg-dark text-white my-3 text-center">
                <input id="datePicker" class="form-control bg-dark text-white my-3 text-center" type="hidden" name="DateAdded">
                <button name="new_post" class="btn btn-dark">Dodaj Blog</button>
                <datalist id="AdminIDs">
                    <option value="1">
                </datalist>
            </form>
        </div>
    </div>
</body>

</html>