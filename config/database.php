<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_xyz";

//membuat koneksi ke database
$connect = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// <?php

// $connect = mysqli_connect('localhost', 'root', '', 'db_xyz');

// if (!$connect) 
//     exit('Gagal');