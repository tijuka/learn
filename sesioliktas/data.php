<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <title>Document</title>
    <script>
    var req = $.ajax( "data.php" )
  .done(function() {
    alert( "success" );
  })
  .fail(function() {
    alert( "error" );
  })
  .always(function() {
    alert( "complete" );
  });
    
    </script>
</head>
<body>
<button type="button" id="mygtukas" class="btn btn-primary btn-lg" color="green">Modules ID</button>
<div id="15">
</div>

</body>
</html>

