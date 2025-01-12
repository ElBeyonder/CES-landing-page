<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "workplay_new";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Fallo la conexion: " . $conn->connect_error);
    }



