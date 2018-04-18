<?php

$user = array (
    'username' => "tijuka",
    'password' => "tijuka123"
    );

$my_user = array (
    'username' => "tijuka",
    'password' => "tijuka123"
);

function checkUser ($user,$my_user)
{
    foreach($user as $vart);
    foreach($my_user as $kasjug);
    if ($vart == $kasjug)
    {
        echo "Sveiki prisijunge " .$user['username'];
        return TRUE;
    }
    else return FALSE;


}

checkUser($user,$my_user);

//{

 //if ($user['username'] == $my_user ['username'] && $user[ 'password'] == $my_user ['password'])
 {
 //    echo "Sveiki prisijunge " . $user ['username'];

 //}
    //else
       // return FALSE;
}

 //checkUser ($user, $my_user);

?>


