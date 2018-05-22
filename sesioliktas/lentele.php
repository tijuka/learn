<?php
require_once("nd.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>JokesTable</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div>
    <ul>
        <?php
        foreach ($masyvas as $val){
            echo '
                <li><img src="'.$val['icon_url'].'"><p>'.$val['value'].'</p>
                    <form action="edit.php" method="post">
                    <input type="hidden" value="'.$val['id'].'" name="id">
                    <button type="submit" class="btn btn-primary" name="edit">Edit</button>
                    </form>
                    <form action="delete.php" method="post">
                    <input type="hidden" value="'.$val['id'].'" name="id">
                    <button type="submit" class="btn btn-danger" name="delete">Delete</button>
                    </form>
                </li>';
        }
        ?>
    </ul>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
