<?php

if (isset($_POST['submit'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if ($user == "admin" && $pass == "log") {
        echo "Welcome user";
    } else {
        echo "Error! Please enter the correct details";
    }
}
