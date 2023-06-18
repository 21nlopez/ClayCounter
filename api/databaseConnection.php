<?php
/**
 * DATE: 6/17/23
 * AUTHOR: Niko Lopez
 * DESC: create connection for DB
 */
function dbConnect () {

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "clay_counter";

    //try connecting to DB with mysqli object and return it if successful
    $conn = new mysqli($host, $username, $password, $database);
    if ($conn->connect_error) {
        die("Connection failed: ". $conn->connect_error);
    }
    return $conn;
}
