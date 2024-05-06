<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "ajax";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!isset($conn)) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM users" ;

$names =  mysqli_query($conn, $sql);
$namesResult = mysqli_query($conn, $sql);

if (isset($_POST['suggestion'])) {
    $suggestion = strtoupper($_POST['suggestion']);
    if (!empty($suggestion)) {
        while ($row = mysqli_fetch_assoc($namesResult)) {
            $name = $row['name'];
            if (strpos(strtoupper($name), $suggestion) === 0 && strpos(strtoupper($name), $suggestion) !== false) {
                echo $name.", ";
            }
        }
    }
}
