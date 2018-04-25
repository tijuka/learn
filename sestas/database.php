<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<form
    action="register.php" method="POST">
    Username: <input type="text" name="username" value=""><br>
    Password: <input type="password" value="" name="password"><br>
    Your name <input type="text" value="" name="yourname"><br>
    Email <input type="email" value="" name="useremail"<br>
<br>
    <input type="submit" value="submit" name="save_post">

</form>

</body>
</html>

