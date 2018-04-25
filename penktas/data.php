<?php
session_start();

$uploaddir = "C:\\xampp\\htdocs\\MyWorks\\penktas\\uploads\\";
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
$filename = basename($_FILES['userfile']['name']);
echo $uploadfile;
echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}
echo 'Here is some more debugging info:';
    print_r($_FILES);
    print "</pre>";

?>

<?php

$file = 'files.txt';
$data = basename ($_FILES ['userfile']['name']) .date ("Y-m-d H:i:s"). PHP_EOL;
if(!file_exists($file)){
    file_put_contents($file, $data);
} else {
    //papildom faila jei toks failas jau yra
    file_put_contents($file, $data, FILE_APPEND);
}

?>

<?php
//pirmas budas, kaip nuskaityti tekstini failiuka i viena bendra tekstine eilute
//$file_data = file_get_contents($file);
//echo $file_data;
//$file_data = file($file);
//echo '<pre>';
//print_r($file_data);
//echo '<pre>';

$file_data = file($file);
foreach($file_data as $line){
    echo $line."<br>";
}

?>
