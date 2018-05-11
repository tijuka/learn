<?php
require_once './vendor/autoload.php';

$faker = Faker\Factory::create();
for ($i=0; $i < 10; $i++) 
{
    $data[]=array (
        'author'=> $faker->name,
        'comment'=> $faker->realText($maxNbChars = 150, $indexSize = 2),
        'created_at'=>$faker->date($format = 'Y-m-d', $max = 'now') 
    );
    
}
//var_dump($data)

function getDb(){
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "tijosbaze";
    $dsn = "mysql:host=$host;dbname=$db";
    return new PDO($dsn, $user, $password);
}
function storePost($data){
    $sql = "INSERT INTO comments (author, comment, created_at) VALUES (:author, :comment, :created_at)";
    $sth = getDb()->prepare($sql);
    $sth->execute([
        'author' => $data['author'],
        'comment' => $data['comment'],
        'created_at'=>$data['created_at']
    ]);
}

foreach ($data as $newpost)
{
    var_dump($newpost);

    storePost($newpost);
}

function Readposts (){
$sql='SELECT * FROM comments';
$result=getDb()->query($sql)->fetchAll(PDO::FETCH_ASSOC());
return $result;
}

$result = json_encode(Readposts());
echo $result;