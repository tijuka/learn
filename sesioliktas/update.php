<?php

require_once('nd.php');
var_dump($_POST);
if ( !empty($_POST)) {
    $data = [];
    $data['url'] = $_POST['url'];
    $data['value'] = $_POST['value'];
    $data['icon_url'] = $_POST['icon_url'];
    $data['id'] = $_POST['id'];
    $res = $jokes->saveUpdatedJoke($data);
}

var_dump($res);