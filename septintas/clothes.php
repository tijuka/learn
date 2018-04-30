<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LearningDatabases</title>
</head>
<body>
<form action="" method="POST">
    Type:  <input type="text" name="type">
    Color: <input type="text" name="color">
    Material: <input type="text" name="material">
    <input type="submit" value="SUBMIT" name="submit">
</form>


<?php if(isset($_POST['submit'])):
    $data = array();
    $data['type'] = $_POST['type'];
    $data['color'] = $_POST['color'];
    $data['material'] = $_POST['material'];
    storeClothes($data);
    unset($data);
endif;

?>
<?php
function getDb(){
    $host= "localhost";
    $user= "root";
    $password = "";
    $db = "tijosbaze";
    $dsn = "mysql:host=$host;dbname=$db";
    return new PDO($dsn, $user, $password);
}
function storeClothes($data){
    $sql = "INSERT INTO clothes (type, color, material)
            VALUES (:type, :color, :material)";
    $sth = getDb()->prepare($sql);
    $sth->execute([
        'type' => $data['type'],
        'color' => $data['color'],
        'material' => $data['material']
    ]);
}
?>

</body>
</html>






















