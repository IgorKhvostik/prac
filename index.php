<!--The page where you can see books from DB (e.g. here i've used structure  table "books" and columns "author, name, id"), add, delete books-->
<form method="get" action="handler.php">
    <p><b>Author:</b><br>
    <input type="text" size="50" name="author">
    <p><b>Name:</b><br>
    <input type="text" size="50" name="name">
    <br>
    <input type="submit" value="SEND" name="send">
</form>

<?php
require_once "select.php";
Selection::createObj($DBH);