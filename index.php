<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tijos ketvirtas namu darbas</title>
</head>

<body>

<form action="user.php" method="POST">
    User:<input type="text" name="username" id="">
    Password: <input type="password" name="password" id="">
    <input type="submit" value="login" name="login">
</form>

<?php

if(!empty($_SESSION['name']))
{
echo "Welcome back " .$_SESSION ['name'];
    unset($_SESSION['name']);
}
else
    return "FALSE"
?>

</body>
</html>
