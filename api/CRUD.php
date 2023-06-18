<?php

include("dao.php");

/* create new entry in the users table */
function createUser (
    $em,
    $fname,
    $lname,
    $uname,
    $pass
) {
        $query = "            
            INSERT INTO users (email, first_name, last_name, username, password) 
            VALUES ('" . $em . "', '" . $fname . "', '" . $lname . "', '" . $uname . "', '" . $pass . "')";
        runQuery($query);
}