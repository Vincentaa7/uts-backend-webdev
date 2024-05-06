<?php
if( isset($_GET["id"]) ) {
    $id = $_GET["id"];

$servername = "localhost";
$username = "root";
$password = "";
$database = "db_xyz";

//membuat koneksi ke database
$connection = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM sales WHERE id=$id";
    $connect->query($sql);
}

header("location: ../../public/index.php");
exit;
?>