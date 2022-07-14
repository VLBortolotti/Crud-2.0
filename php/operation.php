<?php

require_once("db.php");
require_once("component.php");

$con = Createdb();

function textboxValue($value) {
    // preveting sql injection
    $textbox = mysqli_real_escape_string($GLOBALS['con'], trim($_POST[$value]));

    if(empty($textbox)) {
        return false;
    } else {
        return $textbox;
    }

}

// create button click
if(isset($_POST['create'])) {
    createData();
}

function createData() {
    // getting the input values
    $book_name = textboxValue("book_name");
    $book_publisher = textboxValue("book_publisher");
    $book_price = textboxValue("book_price");

    // checking if they're not empty 
    if($book_name && $book_publisher && $book_price) {
        // then I'll insert them into the table
        $sql = "INSERT INTO books(
            book_name, book_publisher, book_price
        ) VALUES (
            '$book_name', '$book_publisher', '$book_price'
        )";

        if(mysqli_query($GLOBALS['con'], $sql)) {
            echo 'Record Successfully Inserted';
        } else {
            echo 'Error';
        }
        
    // if they are empty
    } else {
        
    }

}



