<?php
session_start();
/**
 * DATE: 6/17/23
 * AUTHOR: Niko Lopez
 * DESC: Access database through various functions
 */

/* Includes */
include("databaseConnection.php");

/* run single sql query without return */
function runQuery ($sql) {
        $conn = dbConnect();
        if ($conn->query($sql) === true) {
            echo "query ran";
        } else {
            echo "error running query";
        }
        $conn->close();
}
/* return an array of arrays populated with entire table from DB */
function getTableData ($table) {
    $query = "SELECT * FROM " . $table . " ";
    $conn = dbConnect();
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $result->fetch_assoc();
    } else {
        throw new \mysql_xdevapi\Exception("No rows found in table: " . $table . ".");
    }

    return $result;
}
/* return a single column of information from a table */ 
function getSingleColumn () {

}
/* validate login information with db */
function validateLogin ($uname, $password) {
    $userTableData = getTableData("users");
    foreach ($userTableData as $userData) {
        if ($userData['username'] == $uname && $userData['password'] == $password) {
            $_SESSION['idx'] = $userData['idx'];
            return True;
        }
    }
    return False;
}