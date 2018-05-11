<?php
class Myserver
{
    public function __construct()
    {
        
    }
    public function getComments(){

        function getDb(){ 
            $host = "localhost";
            $user = "root";
            $password = "";
            $db = "tijosbaze";
            $dsn = "mysql:host=$host;dbname=$db";
            return new PDO($dsn, $user, $password);
        }

        
        $sql = "SELECT * FROM comments";
        $sth = $pdo->query($sql);
        while ($arr = $sth->fetch())

    echo $arr['author']."<br>";
    }
}       
        


