<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<form action="" method="POST">
    My Clothes:
    <select name="clothes" id="">
        <option value="1">dresses</option>
        <option value="2">skirt</option>
        <option value="3">jeans</option>
    </select><br>
    Color:
    <input type="text" name="color"><br>
    Material:
    <input type="text" name="material"><br>
    Lenght:
    <input type="text" name="lenght"><br>

    <input type="submit" value="POST" name="post">
</form>


<?php
if(isset($_POST['post'])):
    $parent_id = $_POST['clothes'];
    $post_data = array();
    $post_data ['color'] = $_POST ['color'];
    $post_data['material'] = $_POST['material'];
    $post_data['lenght'] = $_POST['lenght'];
    StoreDresses( ['color'=>$post_data ['color'], 'material' => $post_data['material'],'lenght' => $post_data['lenght'], 'parent_id' => $parent_id]);
    unset($post_data);
endif;
?>


<?php
function storeDresses($post_data){
    $sql = "INSERT INTO dresses (color, material, lenght) VALUES (:color, :material, :lenght)";
    $sth = getDb()->prepare($sql);
    $sth->execute([
            "color" => $post_data ['color'],
            "material" => $post_data['material'],
        "lenght" => $post_data['lenght'],
    ]);
    return $sth->rowCount();
}



function getDb(){
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "tijosbaze";
    $dsn = "mysql:host=$host;dbname=$db";
    return new PDO($dsn, $user, $password);
}
?>


<!--Isvedimas-->
<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "tijosbaze";
$dsn = "mysql:host=$host;dbname=$db";
$pdo = new PDO($dsn, $user, $password);
$sql = "
SELECT c.clothes as clothes, 
sc.dresses as dresses
FROM clothes c
LEFT JOIN dresses sc 
ON sc.parent_id = c.id
";
$data = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>';
print_r($data);
echo '<pre>';
?>







</body>
</html>