<?php
session_start();

include("../Core/Database.php");

$database = new Database();

if(!empty($_POST["username"]) && !empty($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM member WHERE username='${username}' AND password='${password}'";

    $query = mysqli_query($database->connect(), $sql);

    $data = mysqli_fetch_assoc($query);

    if(count($data) != 0) {
        $_SESSION['user'] = $data;
        header("location: education.php");
    } else {
        header("location: index.php");
    }
}