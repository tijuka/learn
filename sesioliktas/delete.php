<?php

require_once('nd.php');

if ( !empty($_POST)) {
    $id = $_POST['id'];
    $data = $jokes->deleteJoke($id);
}