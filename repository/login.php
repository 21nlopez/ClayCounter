<?php

include("../api/dao.php");

/* Grab username and password from form */
$username = $_POST['username'];
$password = $_POST['password'];

if (validateLogin($username, $password)) {
    header("location: ../frontend/user/userView.php");
} else {
    header("location: ../frontend/index.php");
}
