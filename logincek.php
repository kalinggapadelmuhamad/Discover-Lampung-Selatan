<?php

include 'config.php';

if (isset($_POST['login'])) {

    $email      = $_POST['email'];
    $password   = $_POST['password'];

    $sql        = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $exe        = mysqli_query($conn, $sql);
    $row        = mysqli_num_rows($exe);

    if ($row === 1) {
        header('location: dashboard');
    } else {
        header('location: login.php?error');
    }
}
