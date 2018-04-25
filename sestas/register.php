<?php
session_start ();

$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];


if(isset($_POST['save_post'])):
    $data = array();
    $data ['username'] = $_POST ['username'];
    $data ['password'] = $_POST ['password'];
    $data['yourname'] = $_POST['yourname'];
    $data ['useremail'] = $_POST ['useremail'];

    storePost($data);
endif;
?>
<?php
function getDb()
{
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "tijosbaze";
    $dsn = "mysql:host=$host;dbname=$db";
    return new PDO($dsn, $user, $password);
}
function storePost($data)
{
    $sql = "INSERT INTO usersdata (username, password, yourname, email) VALUES (:username, :password, :yourname, :useremail)";
    $sth = getDb()->prepare($sql);
    $sth->execute([
        'username' => $data['username'],
        'password' => $data['password'],
        'yourname' => $data['yourname'],
        'useremail' => $data['useremail']

    ]);
   // $sth->debugDumpParams();


}


header("Location: login.php");

?>