<?php
$servername = "localhost";
$user = "root";
$password = "";
$db = "tijosbaze";

// Create connection
// $conn = mysqli_connect($servername, $user, $password, $db);
// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// $sql = "SELECT * FROM modules";
// $result = mysqli_query($conn, $sql);

// $res = [];
// if (mysqli_num_rows($result) > 0) {
//     while($row = mysqli_fetch_assoc($result)) {
//         $res[] = $row;
//     }
// }

// mysqli_close($conn);
// var_dump($res);
function getDb(){ 
  $host = "localhost";
  $user = "root";
  $password = "";
  $db = "tijosbaze";
  $dsn = "mysql:host=$host;dbname=$db";
  return new PDO($dsn, $user, $password);
}

function Readposts(){
  $sql='SELECT * FROM modules';
  $result=getDb()->query($sql);
  $res= $result->fetchAll(PDO::FETCH_ASSOC);
  return $res;
}
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
echo json_encode(Readposts());

?> 
