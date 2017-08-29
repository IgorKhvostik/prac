<?php
try {
    $DBH = new PDO("mysql:host=127.0.0.1;dbname=test26", 'root', '');//host, name of db, user, password
    $DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch(PDOException $e) {
    echo $e->getMessage();
}