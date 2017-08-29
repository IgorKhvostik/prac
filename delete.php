<?php

class RemoveFromDb{
    public $id;
    function __construct($id) {
        $this->id=$id;
    }

    static function delete($DBH,$id){
        require_once "connection.php";
        $res= new RemoveFromDb($id);
        $del=$DBH->prepare("DELETE FROM books WHERE id = (:id)");//Protection against SQL injection
        $del->execute((array)$res);
        $del=null; //close connection to DB
    }
}
if (isset($_GET['id'])){
    RemoveFromDb::delete($DBH, $_GET['id']);
}
header("Location: index.php");
exit();