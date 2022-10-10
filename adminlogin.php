<?php
include "logic.php";
session_start();
$_SESSION['loggedin'] = true;
$_SESSION['username'] = $username;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Klub Karaś</title>
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
    </div>
    <h2>Logowanie</h2>
    <p>Prosze wpisać swoje dane aby sie zalogować.</p>

    <?php
    if (!empty($login_err)) {
        echo '<div class="alert alert-danger">' . $login_err . '</div>';
    }
    ?>

    <form action="" method="post">
        <div class="align-items-center d-flex justify-content-center">
            <div class="form-group">
                <label>Nazwa Użytkownika</label>
                <input required type="text" name="username" value="" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
            </div>
            <div class="form-group">
                <label>Hasło</label>
                <input required type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
            </div>
            <br>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="signin" value="Login">
            </div>
        </div>
    </form>
    </div>
</body>

</html>