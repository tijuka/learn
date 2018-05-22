<?php

require_once('nd.php');

if ( !empty($_POST)) {
    $id = $_POST['id'];
    $data = $jokes->getOneJoke($id);
}
//var_dump($data);
//$data turi du indeksus, nes pirmas indeksas yra per objekta, kuris yra duomenu bazeje,
//vienas joke yra chuck lenteles iraso masyvas, o tame joke dar yra kitas masyviukas su value, url, id 
//ir icon_url
?>*/
?>



 <form action="update.php" method="post"> 
 <input type="hidden" value="'<?php echo $id?>'" name="id">
 url <input type="url" name="url" value="<?php echo $data[0]['url']?>"
><br><br>
value <input type="text" name="value" value="<?php echo $data[0]['value'] ?>"><br><br>
icon_url <input type="url" name="icon_url" value="<?php echo $data[0]['icon_url']?>"><br><br>            
<button type="submit" class="btn btn-success" name="update">Update</button></form>

