<?php
$servername = "localhost";
$username = "Roots";
$password = "DB";
$database = "fishningblogweb";


$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("<h3 class='container bg-dark text-center p-3 text-warning rounded-lg mt-5'>Jest problem z połączeniem do bazy danych </h3>");
}




$sql = "SELECT * FROM tblblogpost ORDER BY PostID DESC";
$query = mysqli_query($conn, $sql);
if (isset($_REQUEST["new_post"])) {
    $title = $_REQUEST["PostTitle"];
    $content = $_REQUEST["PostDescription"];
    $adminid = $_REQUEST["AdminID"];
    $adminname = $_REQUEST["AdminName"];
    $dateadded = $_REQUEST["DateAdded"];


    $sql = "INSERT INTO tblblogpost(PostTitle, PostDescription, AdminID, AdminName, DateAdded) VALUES ('$title', '$content', '$adminid', '$adminname', now())";
    mysqli_query($conn, $sql);
    header("Location: adminindex.php?info=added");
    exit();
}
if (isset($_REQUEST['PostID'])) {
    $PostID = $_REQUEST['PostID'];
    $sql = "SELECT * FROM tblblogpost WHERE PostID = $PostID";
    $query = mysqli_query($conn, $sql);
}
if (isset($_POST['signin'])) {
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    $sql = "SELECT LoginID FROM tbllogin WHERE username = '$username' AND password = '$password'";
    $query = mysqli_query($conn, $sql);
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;


    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        $_SESSION['LoginID'] = $row['LoginID'];
        header("Location: adminindex.php?info=loggedin");
        exit();
    }
}
if(isset($_REQUEST['update_post'])){
    $PostID = $_REQUEST['PostID'];
    $title = $_REQUEST['PostTitle'];
    $content = $_REQUEST['PostDescription'];
    $adminid = $_REQUEST['AdminID'];
    $adminname = $_REQUEST['AdminName'];

    $sql = "UPDATE tblblogpost SET PostTitle = '$title', PostDescription = '$content', AdminName = '$adminname' WHERE PostID = $PostID";
    mysqli_query($conn, $sql);

    header("Location: adminindex.php?info=updated");
    exit();
}
if(isset($_REQUEST['delete'])){
    $PostID = $_REQUEST['PostID'];
    $sql = "DELETE FROM tblblogpost WHERE PostID = $PostID";
    $query = mysqli_query($conn, $sql);

    header("Location: adminindex.php?info=deleted");
    exit();
}
?>