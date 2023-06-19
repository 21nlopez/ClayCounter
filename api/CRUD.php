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

function readUser ($userIDX) {
    $query = "SELECT * FROM users WHERE idx = " . $userIDX . ";";
    return dbConnect()->query($query)->fetch_assoc();
}

function updateUser () {

}

function deleteUser () {

}

function createScore () {

}

function readScores ($userIDX) {
    $query = "SELECT s.idx, s.date, s.user_idx, g.make, g.modal, g.trim, d.discipline_name, s.score, d.out_of FROM scores s
	            INNER JOIN gun g ON g.idx=s.gun_idx
                INNER JOIN disciplines  d ON d.idx=s.discipline_idx
                WHERE s.user_idx = $userIDX; ";
    return dbConnect()->query($query);
}
