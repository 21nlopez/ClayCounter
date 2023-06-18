<?php 
/**
 * DATE: 6/17/23
 * AUTHOR: Niko Lopez
 * DESC: Access database through various functions
 */

/* Includes */
include("databaseConnection.php");

/* Create connection to DB */
function dbConnect () {
    $conn = NULL; 
    //try connecting to DB with mysqli object and return it if successful
    try {
        $conn = new mysqli($GLOBALS['host'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['database']);
        return $conn;
    } catch (Exception $e) {
        Throw new Exception("Unable to establish connection to database");
    }
}
/* run single sql query without return */
function runQuery ($sql) {
    try { 
        $conn = dbConnect();
        $conn -> query($sql);
        $conn -> close();
    } catch (Exception $e) {
        throw new Exception("Query run failed");
    }
}
/* return an array of arrays populated with entire table from DB */
function getTable () {

}
/* return a single column of information from a table */ 
function getSingleColumn () {

}
/* return a single row of information from a table */
function getSingleRow () {

}
/* create new entry in the users table */
function createUser (
    $em,
    $fname,
    $lname,
    $uname,
    $pass
) {
    try {
        $query = "
            INSERT INTO users (email, first_name, last_name, username, password)
            VALUES (" . $em . ", " . $fname . ", " . $lname . ", " . $uname . ", " . $pass . ");
        ";
        runQuery($query);
    } catch (Exception $e) {
        Throw new Exception("There was an error adding the user to the database, please try again");
    }

}

?>