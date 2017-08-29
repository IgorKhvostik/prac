<?php
require_once "connection.php";
class Selection{
    static function createObj($DBH){
        $STH=$DBH->query('SELECT author, name, id FROM books ORDER BY id DESC ');
         $STH->setFetchMode(PDO::FETCH_ASSOC);

        while($row=$STH->fetch()){
            echo "<b>Author:</b>";
            echo "<br>";
             echo $row['author'];
             echo "<br>";


            echo "<b>Name:</b>";
            echo "<br>";
             echo $row['name'];
             echo "<br>";


            echo "<b>ID:</b>";
            echo "<br>";
             echo $row['id'];

            ?>
            <form method="get" action="delete.php">
                <button type="submit" name="id" value="<?php echo $row['id']?>" >DELETE</button>
            </form>
            <?php
             echo "<br>";
            echo "<br>";
            echo "<br>";

         }
    }
}