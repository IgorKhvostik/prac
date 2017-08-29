<?php
require_once "connection.php";

class Book {
    public $author;
    public $name;

    function __construct($a,$n) {
        $this->author = $a;
        $this->name = $n;
    }
}

if (($_GET['author'])!=='' && ($_GET['name'])!=='' ) {
    $obj = new Book($_GET['author'], $_GET['name']); //Creating the new object with data from form
    $STH = $DBH->prepare("INSERT INTO books (author, name) values (:author, :name)"); //Protection against SQL injection
    $STH->execute((array)$obj);
    $STH=null; //close connection to DB
}
header("Location: index.php");
exit();