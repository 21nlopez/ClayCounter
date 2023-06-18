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
    //try connecting to DB with mysqli object and return it if successful
    $conn = new mysqli($GLOBALS['host'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['database']);
    if ($conn->connect_error) {
        die("Connection failed: ". $conn->connect_error);
    }
    return $conn;
}
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
function getTable () {

}
/* return a single column of information from a table */ 
function getSingleColumn () {

}
/* return a single row of information from a table */
function getSingleRow () {

}